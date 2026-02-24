<?php

namespace App\Http\Controllers\superAdmin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\superAdmin\Market;
use App\Models\superAdmin\Area;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class MarketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check ()){
            $markets = Market ::latest()->get();
            return view('superAdmin.markets.index' , compact('markets'));
        }
        return redirect("login")->withErrors('You are not allowed to access');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Market $market)
    {
        if (Auth::check()) {
           $unitprice=$market->unitprice;
            $benefit=$market->benefit;

            return view('superAdmin.markets.create',compact('unitprice','benefit'));
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
            'name' => 'required',
            'price' => 'nullable',
            'offprice' => 'required',
            'unitprice' => 'required',
             'purpose' => 'required',
            'benefit' => 'required',
        ]);

        $imagePath = $request->file('image')->store('public/images');
        $imageUrl = basename($imagePath);

        $name = $request->input('name');
            $slug = Str::slug($name);
            $slugWithHyphens = str_replace(' ', '-', $slug);

        $market= Market::create([
            'path' => $imageUrl,
            'slug' => $slugWithHyphens,
            'name' => $request->input('name'),
            'detail' => $request->input('detail'),
            'status' => $request->input('status'),
            'category' => $request->input('category'),
            'price' => $request->input('price'),
            'offprice' => $request->input('offprice'),
            'title' => $request->input('title'),
            'hero' => $request->input('hero'),
            'unitprice' => $request->input('unitprice'),
            'benefit' => $request->input('benefit'),
            'purpose' => $request->input('purpose'),

            'meta_keyword' => $request->input('meta_keyword'),
            'meta_description' => $request->input('meta_description'),
            'image' => $imageUrl,
        ]);

        return redirect()->route('markets.index')->with('success', 'Service Created Sucessfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Market $market)
    {
        if (Auth::check()) {
            return view('superAdmin.markets.show', compact('market'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Market $market)
    {
        if (Auth::check()) {
            $unitprice=$market->unitprice;
            $benefit=$market->benefit;

            return view('superAdmin.markets.edit', compact('market','unitprice','benefit'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Market $market)
    {
        // Validate the input data
        $request->validate([
            
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'slug' => 'nullable',
            'name' => 'required',
            'price' => 'nullable',
            'offprice' => 'required',
            'unitprice' => 'required',
        ]);

        // Update the journaly record
        $market->name = $request->input('name');
        $market->category = $request->input('category');
        $market->detail = $request->input('detail');
        $market->status = $request->input('status');
        $market->title = $request->input('title');
        $market->hero = $request->input('hero');
        $market->offprice = $request->input('offprice');
        $market->price = $request->input('price');         
        $market->meta_keyword = $request->input('meta_keyword');
        $market->meta_description = $request->input('meta_description');
        
        $market->unitprice = $request->input('unitprice');

        $market->benefit = $request->input('benefit');
        $market->purpose = $request->input('purpose');

        // Handle image upload if provided
        if ($request->hasFile('image')) {
            // Delete the previous image if it exists
            if ($market->path) {
                Storage::delete('public/images/' . $market->path);
            }

            $imagePath = $request->file('image')->store('public/images');
            $imageUrl = basename($imagePath);
            $market->path = $imageUrl;
        }

        $market->save();

        // Redirect and send message
        return redirect()->route('markets.index')->with('success', 'Service updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Market $market)
    {
        $market->delete();
        return redirect()->route('markets.index')->with('success', 'Service Deleted Sucessfully');
    }
}