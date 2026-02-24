<?php

namespace App\Http\Controllers\superAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\superAdmin\Triumph;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class TriumphController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       if(Auth::check()){

        $triumphs = Triumph ::latest()->get();
            return view('superAdmin.triumphs.index' , compact('triumphs'));
        }
        return redirect("login")->withErrors('You are not allowed to access');

       }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::check()) {
            return view('superAdmin.triumphs.create');
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


        $triumphs= Triumph::create([
            'path' => $imageUrl,
             'slug' => $slugWithHyphens,
            'name' => $request->input('name'),
            'designation' => $request->input('designation'),
            'company' => $request->input('company'),
            'institute' => $request->input('institute'),
            'status' => $request->input('status'),
           
        ]);

        return redirect()->route('triumphs.index')->with('success', 'Testimonial Created Sucessfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(triumph $triumph)
    {
        if (Auth::check()) {
            return view('superAdmin.triumphs.show', compact('triumph'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Triumph $triumph)
    {
        if (Auth::check()) {
            return view('superAdmin.triumphs.edit', compact('triumph'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Triumph $triumph)
    {
        // Validate the input data
        $request->validate([
            
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Update the journaly record
        $triumph->name = $request->input('name');
        $triumph->designation = $request->input('designation');
        $triumph->company = $request->input('company');
        $triumph->institute = $request->input('institute');
        $triumph->status = $request->input('status');
        

        // Handle image upload if provided
        if ($request->hasFile('image')) {
            // Delete the previous image if it exists
            if ($triumph->path) {
                Storage::delete('public/images/' . $triumph->path);
            }

            $imagePath = $request->file('image')->store('public/images');
            $imageUrl = basename($imagePath);
            $triumph->path = $imageUrl;
        }

        $triumph->save();

        // Redirect and send message
        return redirect()->route('triumphs.index')->with('success', 'Testimonial updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Triumph $triumph)
    {
        $triumph->delete();
        return redirect()->route('triumphs.index')->with('success', 'Testimonial Deleted Sucessfully');
    }
}
