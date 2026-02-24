<?php

namespace App\Http\Controllers\superAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\superAdmin\Approach;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ApproachController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()) {

            $approachs = Approach::all();
            return view('superAdmin.approaches.index',compact('approachs'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

   
/**
     * Show the form for creating a new resource.
     */
    public function create(Approach $approach)
    {
        if (Auth::check()) {
            $point =$approach->point;

            return view('superAdmin.approaches.create',compact('approach','point'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Add any additional validation rules as needed

           
            
        ]);
        $imageUrl = null; // Default value if no image is uploaded
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/images');
            $imageUrl = basename($imagePath);
        }
        $imagePaths = [];

       
        $approach= Approach::create([ 
            'path' => $imageUrl,           
            'name' => $request->input('name'),
            'detail' => $request->input('detail'),
            'category' => $request->input('category'),
            'title' => $request->input('title'),
            'status' => $request->input('status'),
            'point' => $request->input('point'),

          
        ]);

        return redirect()->route('approaches.index')->with('success', 'approach Created Sucessfully');
    }
    
    /**
     * Display the specified resource.
     */
    public function show(Approach $approach)
    {
        if (Auth::check()) {
            return view('superAdmin.approaches.show', compact('approach'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Approach $approach)
    {
        if (Auth::check()) {
            $point=$approach->point;
            // dd($steps);
            return view('superAdmin.approaches.edit', compact('approach','point'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Approach $approach)
    {
        // Validate the input data
        $request->validate([
            
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Add any additional validation rules as needed
           
           
        ]);

        // Handle image upload if provided
        if ($request->hasFile('image')) {
            // Delete the previous image if it exists
            if ($approach->path) {
                Storage::delete('public/images/' . $approach->path);
            }

            $imagePath = $request->file('image')->store('public/images');
            $imageUrl = basename($imagePath);
            $approach->path = $imageUrl;
        }

        // Update the record
        $approach->name = $request->input('name');
        $approach->detail= $request->input('detail');
        $approach->category= $request->input('category');
        $approach->title= $request->input('title');
        $approach->status= $request->input('status');
        $approach->point= $request->input('point');
     

       $approach->save();

        // Redirect and send message
        return redirect()->route('approaches.index')->with('success', 'approach updated successfully');
    }


    
    public function destroy(Approach $approach)
        {
            $approach->delete();
            return redirect()->route('approaches.index')->with('success', 'approach Deleted Sucessfully');
        }
    
}
