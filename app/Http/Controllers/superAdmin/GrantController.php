<?php

namespace App\Http\Controllers\superAdmin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\superAdmin\Grant;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class GrantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check ()){

            $grants = Grant ::latest()->get();
            return view('superAdmin.grants.index' , compact('grants'));
        }
        return redirect("login")->withErrors('You are not allowed to access');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::check()) {
            return view('superAdmin.grants.create');
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Add any additional validation rules as needed
        ]);

        $imagePath = $request->file('image')->store('public/images');
        $imageUrl = basename($imagePath);

        $name = $request->input('name');
        $slug = Str::slug($name);
        $slugWithHyphens = str_replace(' ', '-', $slug);

        $grant= grant::create([
            'path' => $imageUrl,
            'slug' => $slugWithHyphens,
            'name' => $request->input('name'),
            'category' => $request->input('category'),
            'detail' => $request->input('detail'),
            'status' => $request->input('status'),
            
        ]);

        return redirect()->route('grants.index')->with('success', 'Offer Created Sucessfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(grant $grant)
    {
        if (Auth::check()) {
            return view('superAdmin.grants.show', compact('grant'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Grant $grant)
    {
        if (Auth::check()) {
            return view('superAdmin.grants.edit', compact('grant'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Grant $grant)
    {
        // Validate the input data
        $request->validate([
            
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Update the granty record
        $grant->name= $request->input('name');
        $grant->detail = $request->input('detail');
        $grant->status = $request->input('status');
        $grant->category = $request->input('category');
            

        // Handle image upload if provided
        if ($request->hasFile('image')) {
            // Delete the previous image if it exists
            if ($grant->path) {
                Storage::delete('public/images/' . $grant->path);
            }

            $imagePath = $request->file('image')->store('public/images');
            $imageUrl = basename($imagePath);
            $grant->path = $imageUrl;
        }

        $grant->save();

        // Redirect and send message
        return redirect()->route('grants.index')->with('success', 'Offer updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(grant $grant)
    {
        $grant->delete();
        return redirect()->route('grants.index')->with('success', 'Offer Deleted Sucessfully');
    }
}
