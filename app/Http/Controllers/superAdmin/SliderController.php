<?php

namespace App\Http\Controllers\superAdmin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\superAdmin\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()) {
            $sliders = Slider::latest()->get();
            return view('superAdmin.sliders.index',compact('sliders'));
        }
       return redirect("login")->withErrors('You are not allowed to access');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::check()) {
            return view('superAdmin.sliders.create');
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

        $slider = Slider::create([
            'path' => $imageUrl,
            'name' => $request->input('name'),
            'detail' => $request->input('detail'),
            'status' => $request->input('status'),
            'hero' => $request->input('hero'),
            'currency' => $request->input('currency'),
            'amount' => $request->input('amount'),
        ]);

        return redirect()->route('sliders.index')->with('success', 'Slider Created Sucessfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Slider $slider)
    {
        if (Auth::check()) {
            return view('superAdmin.sliders.show', compact('slider'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slider $slider)
    {
        if (Auth::check()) {
            return view('superAdmin.sliders.edit', compact('slider'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Slider $slider)
    {
        // Validate the input data
        $request->validate([
            
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Update the journaly record
        $slider->name = $request->input('name');
        $slider->detail = $request->input('detail');
        $slider->status = $request->input('status');
         $slider->hero = $request->input('hero');
         $slider->currency = $request->input('currency');
         $slider->amount = $request->input('amount');
        

        // Handle image upload if provided
        if ($request->hasFile('image')) {
            // Delete the previous image if it exists
            if ($slider->path) {
                Storage::delete('public/images/' . $slider->path);
            }

            $imagePath = $request->file('image')->store('public/images');
            $imageUrl = basename($imagePath);
            $slider->path = $imageUrl;
        }

        $slider->save();

        // Redirect and send message
        return redirect()->route('sliders.index')->with('success', 'Sliders updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $slider)
    {
        $slider->delete();
        return redirect()->route('sliders.index')->with('success', 'Slider Deleted Sucessfully');
    }
}
