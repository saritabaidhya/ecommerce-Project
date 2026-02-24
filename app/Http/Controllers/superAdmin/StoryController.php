<?php

namespace App\Http\Controllers\superAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\superAdmin\Story;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class StoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()){
            $stories = Story::all();
            return view('superAdmin.stories.index',compact('stories'));
        }
    }


    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Story $story)
    {
        if (Auth::check()) {
            
            return view('superAdmin.stories.edit', compact('story'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Story $story)
    {
        // Validate the input data
        $request->validate([
            
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Update the record
        $story->name = $request->input('name');
        $story->detail = $request->input('detail');
       
        // Handle image upload if provided
        if ($request->hasFile('image')) {
            // Delete the previous image if it exists
            if ($story->path) {
                Storage::delete('public/images/' . $story->path);
            }

            $imagePath = $request->file('image')->store('public/images');
            $imageUrl = basename($imagePath);
            $story->path = $imageUrl;
        }

        $story->save();

        // Redirect and send message
        return redirect()->route('stories.index')->with('success', 'About updated successfully');
    }

   
}
