<?php

namespace App\Http\Controllers\superAdmin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\superAdmin\Area;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class areaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()) {
            $areas = area::latest()->get();
            return view('superAdmin.areas.index',compact('areas'));
        }
       return redirect("login")->withErrors('You are not allowed to access');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::check()) {
            return view('superAdmin.areas.create');
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
        
         $name = $request->input('name');
    $slug = Str::slug($name);
    $slugWithHyphens = str_replace(' ', '-', $slug);
    
    $imagePath = $request->file('image')->store('public/images');
        $imageUrl = basename($imagePath);


    

        $area= Area::create([
            'slug' => $slugWithHyphens,
            'path' => $imageUrl,
            'name' => $request->input('name'),
            'detail' => $request->input('detail'),
            'status' => $request->input('status'),
            'hidden' => $request->input('hidden'),
            'title' => $request->input('title'),
            'meta_keyword' => $request->input('meta_keyword'),
            'meta_description' => $request->input('meta_description'),
        ]);

        return redirect()->route('areas.index')->with('success', 'area Created Sucessfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Area $area)
    {
        if (Auth::check()) {
            return view('superAdmin.areas.show', compact('area'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Area $area)
    {
        if (Auth::check()) {
            return view('superAdmin.areas.edit', compact('area'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Area $area)
    {
        // Validate the input data
        $request->validate([
                        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);

        // Update the journaly record
        $area->name = $request->input('name');
        $area->detail = $request->input('detail');
        $area->title = $request->input('title');
        $area->status = $request->input('status');
        $area->slug = $request->input('slug');
        $area->hidden = $request->input('hidden');
        $area->meta_description = $request->input('meta_description');
        $area->meta_keyword= $request->input('meta_keyword');


        // Handle image upload if provided
        if ($request->hasFile('image')) {
            // Delete the previous image if it exists
            if ($area->path) {
                Storage::delete('public/images/' . $area->path);
            }

            $imagePath = $request->file('image')->store('public/images');
            $imageUrl = basename($imagePath);
            $area->path = $imageUrl;
        }

        $area->save();

        // Redirect and send message
        return redirect()->route('areas.index')->with('success', 'Region updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Area $area)
    {
        $area->delete();
        return redirect()->route('areas.index')->with('success', 'Region Deleted Sucessfully');
    }
}
