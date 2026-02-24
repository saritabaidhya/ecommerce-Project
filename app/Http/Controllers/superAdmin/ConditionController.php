<?php

namespace App\Http\Controllers\superAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\superAdmin\Condition;
use Illuminate\Support\Facades\Auth;


class ConditionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()) {

            $conditions = Condition::all();
            return view('superAdmin.conditions.index',compact('conditions'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

   

    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Condition $condition)
    {
        if (Auth::check()) {
            return view('superAdmin.conditions.edit', compact('condition'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Condition $condition)
    {
        // Validate the input data
        $request->validate([
            
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Update the record
        $condition->name = $request->input('name');
        $condition->detail= $request->input('detail');
        
       $condition->save();

        // Redirect and send message
        return redirect()->route('conditions.index')->with('success', 'Terms & conditions updated successfully');
    }

    
}
