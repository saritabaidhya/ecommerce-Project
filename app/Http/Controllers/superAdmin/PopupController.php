<?php

namespace App\Http\Controllers\superAdmin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\superAdmin\Popup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PopupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()) {
            $popups = Popup::latest()->get();
            return view('superAdmin.popups.index',compact('popups'));
        }
       return redirect("login")->withErrors('You are not allowed to access');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::check()) {
            return view('superAdmin.popups.create');
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

        $popup= Popup::create([
            'path' => $imageUrl,
            'name' => $request->input('name'),
            'detail' => $request->input('detail'),
            'status' => $request->input('status'),
        ]);

        return redirect()->route('popups.index')->with('success', 'Popup Created Sucessfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Popup $popup)
    {
        if (Auth::check()) {
            return view('superAdmin.popups.show', compact('popup'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Popup $popup)
    {
        if (Auth::check()) {
            return view('superAdmin.popups.edit', compact('popup'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Popup $popup)
    {
        // Validate the input data
        $request->validate([
            
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Update the journaly record
        $popup->name = $request->input('name');
        $popup->detail = $request->input('detail');
        $popup->status = $request->input('status');
        

        // Handle image upload if provided
        if ($request->hasFile('image')) {
            // Delete the previous image if it exists
            if ($popup->path) {
                Storage::delete('public/images/' . $popup->path);
            }

            $imagePath = $request->file('image')->store('public/images');
            $imageUrl = basename($imagePath);
            $popup->path = $imageUrl;
        }

        $popup->save();

        // Redirect and send message
        return redirect()->route('popups.index')->with('success', 'Popup updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Popup $popup)
    {
        $popup->delete();
        return redirect()->route('popups.index')->with('success', 'Popup Deleted Sucessfully');
    }
}
