<?php

namespace App\Http\Controllers\superAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\superAdmin\Package;
use App\Models\superAdmin\Offering;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()) {

            $packages = Package::all();
            return view('superAdmin.packages.index',compact('packages'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

   
/**
     * Show the form for creating a new resource.
     */
    public function create(Package $package)
    {
        if (Auth::check()) {
            $point =$package->point;

            return view('superAdmin.packages.create',compact('package','point'));
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
            'name' => 'required',
            'member' => 'required',
            'point' => 'required',

           
            
        ]);
        $imageUrl = null; // Default value if no image is uploaded
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/images');
            $imageUrl = basename($imagePath);
        }
        $imagePaths = [];
        $name = $request->input('name');
        $slug = Str::slug($name);
        $slugWithHyphens = str_replace(' ', '-', $slug);

       
        $package= Package::create([ 
            'path' => $imageUrl,           
            'slug' => $slugWithHyphens,           
            'name' => $request->input('name'),
            'detail' => $request->input('detail'),
            'member' => $request->input('member'),
            'status' => $request->input('status'),
            'point' => $request->input('point'),
            'offerings' => $request->input('offering'),

          
        ]);

        return redirect()->route('packages.index')->with('success', 'package Created Sucessfully');
    }
    
    /**
     * Display the specified resource.
     */
    public function show(Package $package)
    {
        if (Auth::check()) {
            return view('superAdmin.packages.show', compact('package'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Package $package)
    {
        if (Auth::check()) {
            $point=$package->point;

            // dd($steps);
            return view('superAdmin.packages.edit', compact('package','point'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Package $package)
    {
        // Validate the input data
        $request->validate([
            
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Add any additional validation rules as needed
            'name' => 'required',
            'member' => 'required',
            'point' => 'required',
           
        ]);

        // Handle image upload if provided
        if ($request->hasFile('image')) {
            // Delete the previous image if it exists
            if ($package->path) {
                Storage::delete('public/images/' . $package->path);
            }

            $imagePath = $request->file('image')->store('public/images');
            $imageUrl = basename($imagePath);
            $package->path = $imageUrl;
        }

        // Update the record
        $package->name = $request->input('name');
        $package->detail= $request->input('detail');
        $package->member= $request->input('member');
        $package->status= $request->input('status');
        $package->point= $request->input('point');
          

       $package->save();

        // Redirect and send message
        return redirect()->route('packages.index')->with('success', 'package updated successfully');
    }


    
    public function destroy(Package $package)
        {
            $package->delete();
            return redirect()->route('packages.index')->with('success', 'package Deleted Sucessfully');
        }
    
}
