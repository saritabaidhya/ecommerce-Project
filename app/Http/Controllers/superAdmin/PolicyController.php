<?php

namespace App\Http\Controllers\superAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\superAdmin\Policy;
use Illuminate\Support\Facades\Auth;

class PolicyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()){
            $policies = Policy::all();
            return view('superAdmin.policies.index',compact('policies'));
        }
    }

    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Policy $policy)
    {
        if (Auth::check()){
            return view('superAdmin.policies.edit' ,compact('policy'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Policy $policy)
    {
        // Validate the input data
        $request->validate([
            
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Update the record
        $policy->name = $request->input('name');
        $policy->detail = $request->input('detail');
        
       $policy->save();

        // Redirect and send message
        return redirect()->route('policies.index')->with('success', 'Privacy policy updated successfully');
    }


}
