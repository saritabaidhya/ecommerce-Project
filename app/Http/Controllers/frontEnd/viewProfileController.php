<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use App\Models\superAdmin\Area;
use App\Models\superAdmin\Utility;
use App\Models\superAdmin\Merchant;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


use Illuminate\Http\Request;


class viewProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Merchant $viewProfile)
    { 
         if (Auth::guard('merchant')->check()) {
                     $viewProfile = Auth::guard('merchant')->user();

             $utilities = Utility::where('status', 1)->get();
     $areas = Area::where('status', 1)->get();
     
    // dd($viewProfile);
      return view('frontEnd.viewProfile.index',compact('areas','utilities','viewProfile'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
        
       
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Merchant $viewProfile)
    {
       if (Auth::guard('merchant')->check()) {
            $utilities = Utility::where('status', 1)->get();
            return view('frontEnd.viewProfile.edit', compact('viewProfile','utilities'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    
    /**
     * Update the specified resource in storage.
     */
public function update(Request $request, Merchant $viewProfile)
{
    // Validate the input
    $request->validate([
        'name' => 'required',
        'fav' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:width=40,height=40',
        'image' => 'nullable|array|max:5', // 'image' is an optional array, max 5 files
        'image.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // each item must be a valid image


    ]);

    // Update the profile
    $viewProfile->name = $request->input('name');
    $viewProfile->phone = $request->input('phone');
    $viewProfile->email = $request->input('email');
    $viewProfile->address = $request->input('address');
    $viewProfile->service = $request->input('service');
    $viewProfile->abn = $request->input('abn');
    $viewProfile->website = $request->input('website');
    $viewProfile->map = $request->input('map');
    $viewProfile->hero = $request->input('hero');
    $viewProfile->detail = $request->input('detail');
    
    // Handle image upload if provided
        if ($request->hasFile('fav')) {
            // Delete the previous image if it exists
            if ($viewProfile->fav) {
                Storage::delete('public/images/' . $viewProfile->fav);
            }

            $favPath = $request->file('fav')->store('public/images');
            $favUrl = basename($favPath);
            $viewProfile->fav = $favUrl;
        }
        
        // Handle multiple image uploads if provided
if ($request->hasFile('image')) {
    // Decode the current images
    $currentImages = $viewProfile->path ? json_decode($viewProfile->path, true) : [];

    // Handle new image uploads
    $newImagePaths = [];
    foreach ($request->file('image') as $file) {
        $imagePath = $file->store('public/images');
        $newImagePaths[] = basename($imagePath);
    }

    // Merge new images with current images
    $currentImages = array_merge($currentImages, $newImagePaths);

    $viewProfile->path = json_encode($currentImages);
}

// Handle image deletion
if ($request->has('delete_images')) {
    $imagesToDelete = $request->input('delete_images');
    $currentImages = json_decode($viewProfile->path, true);

    foreach ($imagesToDelete as $image) {
        if (($key = array_search($image, $currentImages)) !== false) {
            // Delete the image from storage
            Storage::delete('public/images/' . $image);
            // Remove from the current images array
            unset($currentImages[$key]);
        }
    }

    // Re-save the updated image array
    $viewProfile->path = json_encode(array_values($currentImages));
}

        
        
    $viewProfile->save();

    // Redirect back with success
    return redirect()->route('viewProfile.index')->with('success', 'Profile updated successfully');
}



    
   

}