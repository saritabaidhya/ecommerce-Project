<?php

namespace App\Http\Controllers\superAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\superAdmin\Offering;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class OfferingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()) {

            $offerings = Offering::all();
            return view('superAdmin.offerings.index',compact('offerings'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

   
/**
     * Show the form for creating a new resource.
     */
    public function create(Offering $offering)
    {
        if (Auth::check()) {

            return view('superAdmin.offerings.create',compact('offering'));
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
            'priority' => 'required',
            'price' => 'required',

           
            
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

       
        $offering= Offering::create([ 
            'path' => $imageUrl,           
            'slug' => $slugWithHyphens,           
            'name' => $request->input('name'),
            'unit' => $request->input('unit'),
            'priority' => $request->input('priority'),
            'price' => $request->input('price'),
            'currency' => $request->input('currency'),

          
        ]);

        return redirect()->route('offerings.index')->with('success', 'offering Created Sucessfully');
    }
    
    /**
     * Display the specified resource.
     */
    public function show(Offering $offering)
    {
        if (Auth::check()) {
            return view('superAdmin.offerings.show', compact('offering'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Offering $offering)
    {
        if (Auth::check()) {
            return view('superAdmin.offerings.edit', compact('offering'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Offering $offering)
    {
        // Validate the input data
        $request->validate([
            
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Add any additional validation rules as needed
            'name' => 'required',
            'unit' => 'required',
            'priority' => 'required',
            'price' => 'required',
            'currency' => 'nullable',
           
        ]);

        // Handle image upload if provided
        if ($request->hasFile('image')) {
            // Delete the previous image if it exists
            if ($offering->path) {
                Storage::delete('public/images/' . $offering->path);
            }

            $imagePath = $request->file('image')->store('public/images');
            $imageUrl = basename($imagePath);
            $offering->path = $imageUrl;
        }

        // Update the record
        $offering->name = $request->input('name');
        $offering->unit= $request->input('unit');
        $offering->priority= $request->input('priority');
        $offering->status= $request->input('status');
        $offering->price= $request->input('price');
        $offering->currency= $request->input('currency');
     

       $offering->save();

        // Redirect and send message
        return redirect()->route('offerings.index')->with('success', 'offering updated successfully');
    }


    
    public function destroy(Offering $offering)
        {
            $offering->delete();
            return redirect()->route('offerings.index')->with('success', 'offering Deleted Sucessfully');
        }
    
}
