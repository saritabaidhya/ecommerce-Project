<?php

namespace App\Http\Controllers\superAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\superAdmin\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
{
    if (Auth::check()) {
        $user = Auth::user(); // Get only the authenticated user
        return view('superAdmin.profile.index', compact('user'));
    }
    
    return redirect("login")->with('error', 'You are not allowed to access');
}

   

    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $profile)
    {
        if (Auth::check()) {
            return view('superAdmin.profile.edit', compact('profile'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    /**
     * Update the specified resource in storage.
     */
   public function update(Request $request, User $profile)
{
    // Validate input data
    $request->validate([
        'name' => 'required|string|max:255',
        'password' => 'nullable|string|min:8|confirmed', // Will validate against password_confirmation
    ]);

    // Update profile
    $profile->name = $request->input('name');

    // If a new password is provided
    if ($request->filled('password')) {
        $profile->password = Hash::make($request->input('password'));
    }

    $profile->save();

    return redirect()->route('profile.index')->with('success', 'Profile updated successfully');
}

    
}
