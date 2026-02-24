<?php

namespace App\Http\Controllers\superAdmin;

use App\Http\Controllers\Controller;
use App\Models\superAdmin\Triumph;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class StudioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()) {
            $studios = Triumph::all();
            return view('superAdmin.studios.index', compact('studios'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::check()) {
            return view('superAdmin.studios.create');
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Add any additional validation rules as needed
             'photo' => 'required', // Ensure at least one file is uploaded
        'photo.*' => 'image|mimes:jpeg,png,jpg,gif|max:9048', // Validate each image file
        ]);

        $imagePath = $request->file('image')->store('public/images');
        $imageUrl = basename($imagePath);
        
         $imagePaths = [];

    // Handle multiple image uploads
    if($request->hasFile('photo')) {
        foreach($request->file('photo') as $file) {
            $imagePath1 = $file->store('public/images');
            $imagePaths[] = basename($imagePath1);
        }
    }

 $name = $request->input('name');
    $slug = Str::slug($name);
    $slugWithHyphens = str_replace(' ', '-', $slug);
        $studio = Triumph::create([
             'slug' => $slugWithHyphens,
            'path' => $imageUrl,
             'image' => json_encode($imagePaths), // Store image paths as a JSON array
            'name' => $request->input('name'),
        ]);

        return redirect()->route('studios.index')->with('success', 'Gallery Created Sucessfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Triumph $studio)
    {
        if (Auth::check()) {
            return view('superAdmin.studios.show', compact('studio'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Triumph $studio)
    {
        if (Auth::check()) {
            return view('superAdmin.studios.edit', compact('studio'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Triumph $studio)
    {
        //validate
        $request->validate([
            'name' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'photo' => 'nullable', // Made optional to allow for no changes
        'photo.*' => 'image|mimes:jpeg,png,jpg,gif|max:9048',

        ]);


        // Update the journaly record
        $studio->name = $request->input('name');


        // Handle image upload if provided
        if ($request->hasFile('image')) {
            // Delete the previous image if it exists
            if ($studio->path) {
                Storage::delete('public/images/' . $studio->path);
            }

            $imagePath = $request->file('image')->store('public/images');
            $imageUrl = basename($imagePath);
            $studio->path = $imageUrl;
        }
        
        // Handle multiple image uploads if provided
if ($request->hasFile('photo')) {
    // Decode the current images
    $currentImages = $studio->image ? json_decode($studio->image, true) : [];

    // Handle new image uploads
    $newImagePaths = [];
    foreach ($request->file('photo') as $file) {
        $imagePath1 = $file->store('public/images');
        $newImagePaths[] = basename($imagePath1);
    }

    // Merge new images with current images
    $currentImages = array_merge($currentImages, $newImagePaths);

    $studio->image = json_encode($currentImages);
}

// Handle image deletion
if ($request->has('delete_images')) {
    $imagesToDelete = $request->input('delete_images');
    $currentImages = json_decode($studio->image, true);

    foreach ($imagesToDelete as $image) {
        if (($key = array_search($image, $currentImages)) !== false) {
            // Delete the image from storage
            Storage::delete('public/images/' . $image);
            // Remove from the current images array
            unset($currentImages[$key]);
        }
    }

    // Re-save the updated image array
    $studio->image = json_encode(array_values($currentImages));
}

        $studio->save();

        //redirect& send message
        return redirect()->route('studios.index')->with('success', 'Gallery Updated Sucessfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Triumph $studio)
    {
        $studio->delete();
        return redirect()->route('studios.index')->with('success', 'Gallery Deleted Sucessfully');
    }
}
