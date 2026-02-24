<?php

namespace App\Http\Controllers\superAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\superAdmin\Associate;
use Illuminate\Support\Facades\Storage;

class AssociateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       if(Auth::check()){

        $associates = Associate ::latest()->get();
            return view('superAdmin.associates.index' , compact('associates'));
        }
        return redirect("login")->withErrors('You are not allowed to access');

       }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::check()) {
            return view('superAdmin.associates.create');
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

       

        $associates= associate::create([
            'path' => $imageUrl,
            'name' => $request->input('name'),
            'detail' => $request->input('detail'),
            'status' => $request->input('status'),
           
        ]);

        return redirect()->route('associates.index')->with('success', 'Partner Created Sucessfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Associate $associate)
    {
        if (Auth::check()) {
            return view('superAdmin.associates.show', compact('associate'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Associate $associate)
    {
        if (Auth::check()) {
            return view('superAdmin.associates.edit', compact('associate'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Associate $associate)
    {
        // Validate the input data
        $request->validate([
            
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Update the journaly record
        $associate->name = $request->input('name');
        $associate->detail = $request->input('detail');
        $associate->status = $request->input('status');
        

        // Handle image upload if provided
        if ($request->hasFile('image')) {
            // Delete the previous image if it exists
            if ($associate->path) {
                Storage::delete('public/images/' . $associate->path);
            }

            $imagePath = $request->file('image')->store('public/images');
            $imageUrl = basename($imagePath);
            $associate->path = $imageUrl;
        }

        $associate->save();

        // Redirect and send message
        return redirect()->route('associates.index')->with('success', 'Partner Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Associate $associate)
    {
        $associate->delete();
        return redirect()->route('associates.index')->with('success', 'Partner Deleted Sucessfully');
    }
}
