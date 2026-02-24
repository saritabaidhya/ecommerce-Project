<?php

namespace App\Http\Controllers\superAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\superAdmin\Review;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       if(Auth::check()){

        $reviews = Review ::latest()->get();
            return view('superAdmin.reviews.index' , compact('reviews'));
        }
        return redirect("login")->withErrors('You are not allowed to access');

       }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::check()) {
            return view('superAdmin.reviews.create');
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

       

        $reviews= review::create([
            'path' => $imageUrl,
            'name' => $request->input('name'),
            'detail' => $request->input('detail'),
            'status' => $request->input('status'),
            'minititle' => $request->input('minititle'),
           
        ]);

        return redirect()->route('reviews.index')->with('success', 'Testimonial Created Sucessfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        if (Auth::check()) {
            return view('superAdmin.reviews.show', compact('review'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        if (Auth::check()) {
            return view('superAdmin.reviews.edit', compact('review'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $review)
    {
        // Validate the input data
        $request->validate([
            
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Update the journaly record
        $review->name = $request->input('name');
        $review->detail = $request->input('detail');
        $review->status = $request->input('status');
        $review->minititle = $request->input('minititle');
        

        // Handle image upload if provided
        if ($request->hasFile('image')) {
            // Delete the previous image if it exists
            if ($review->path) {
                Storage::delete('public/images/' . $review->path);
            }

            $imagePath = $request->file('image')->store('public/images');
            $imageUrl = basename($imagePath);
            $review->path = $imageUrl;
        }

        $review->save();

        // Redirect and send message
        return redirect()->route('reviews.index')->with('success', 'Testimonial updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        $review->delete();
        return redirect()->route('reviews.index')->with('success', 'Testimonial Deleted Sucessfully');
    }
}
