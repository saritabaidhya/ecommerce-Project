<?php

namespace App\Http\Controllers\superAdmin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\superAdmin\Journal;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class journalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check ()){

            $journals = Journal ::latest()->get();
            return view('superAdmin.journals.index' , compact('journals'));
        }
        return redirect("login")->withErrors('You are not allowed to access');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::check()) {
            return view('superAdmin.journals.create');
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

        $journal= journal::create([
            'path' => $imageUrl,
            'slug' => $slugWithHyphens,
            'name' => $request->input('name'),
            'detail' => $request->input('detail'),
            'status' => $request->input('status'),
            'category' => $request->input('category'),
            'meta_keyword' => $request->input('meta_keyword'),
            'meta_description' => $request->input('meta_description'),
        ]);

        return redirect()->route('journals.index')->with('success', 'Blog Created Sucessfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Journal $journal)
    {
        if (Auth::check()) {
            return view('superAdmin.journals.show', compact('journal'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Journal $journal)
    {
        if (Auth::check()) {
            return view('superAdmin.journals.edit', compact('journal'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Journal $journal)
    {
        // Validate the input data
        $request->validate([
            
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Update the journaly record
        $journal->name= $request->input('name');
        $journal->detail = $request->input('detail');
        $journal->status = $request->input('status');
        $journal->category = $request->input('category');
        $journal->meta_keyword = $request->input('meta_keyword');
        $journal->meta_description = $request->input('meta_description');
        

        // Handle image upload if provided
        if ($request->hasFile('image')) {
            // Delete the previous image if it exists
            if ($journal->path) {
                Storage::delete('public/images/' . $journal->path);
            }

            $imagePath = $request->file('image')->store('public/images');
            $imageUrl = basename($imagePath);
            $journal->path = $imageUrl;
        }

        $journal->save();

        // Redirect and send message
        return redirect()->route('journals.index')->with('success', 'Blog updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Journal $journal)
    {
        $journal->delete();
        return redirect()->route('journals.index')->with('success', 'Blog Deleted Sucessfully');
    }
}
