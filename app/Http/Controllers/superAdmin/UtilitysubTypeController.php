<?php

namespace App\Http\Controllers\superAdmin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\superAdmin\UtilitysubType;
use App\Models\superAdmin\Area;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UtilitysubTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check ()){

            $utilitysubtypes = UtilitysubType::withCount('utilities')->orderBy('order', 'asc')->get();
            return view('superAdmin.utilitysubtypes.index' , compact('utilitysubtypes'));
        }
        return redirect("login")->withErrors('You are not allowed to access');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::check()) {
            $areas = Area::where('status' , 1)->get();
            return view('superAdmin.utilitysubtypes.create',compact('areas'));
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
        ]);

        $imageUrl = null;
        // Handle image upload if provided
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/images');
            $imageUrl = basename($imagePath);
        }

        $name = $request->input('name');
        $slug = Str::slug($name);
        $slugWithHyphens = str_replace(' ', '-', $slug);
        
        $address = $request->input('address');
        $slugaddress = Str::slug($address);
        $addressslugWithHyphens = str_replace(' ', '-', $slugaddress);

        $utilitysubtype = UtilitysubType::create([
            'path' => $imageUrl,
            'slug' => $slugWithHyphens . '-' . $addressslugWithHyphens,
            'name' => $request->input('name'),
            'detail' => $request->input('detail'),
            'status' => $request->input('status'),
            'address' => $request->input('address'),
            'meta_keyword' => $request->input('meta_keyword'),
            'meta_description' => $request->input('meta_description'),
            'hidden' => $request->input('hidden'),
            'title' => $request->input('title'),
            'hero' => $request->input('hero'),
            'image' => $imageUrl,
            
            'order' => $request->input('order'),
            'category' => $request->input('category'),
        ]);

        return redirect()->route('utilitysubtypes.index')->with('success', 'Service Category Created Sucessfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(UtilitysubType $utilitysubtype)
    {
        if (Auth::check()) {
            return view('superAdmin.utilitysubtypes.show', compact('utilitytype'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UtilitysubType $utilitysubtype)
    {
        if (Auth::check()) {
            
          $areas = Area::where('status' , 1)->get();

            return view('superAdmin.utilitysubtypes.edit', compact('utilitysubtype','areas'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UtilitysubType $utilitysubtype)
    {
        // Validate the input data
        $request->validate([
            
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Update the journaly record
        $utilitysubtype->name = $request->input('name');
        $utilitysubtype->detail = $request->input('detail');
        $utilitysubtype->status = $request->input('status');
        $utilitysubtype->address = $request->input('address');
        $utilitysubtype->order = $request->input('order');
        $utilitysubtype->meta_keyword = $request->input('meta_keyword');
        $utilitysubtype->meta_description = $request->input('meta_description');
        $utilitysubtype->hidden = $request->input('hidden');
        $utilitysubtype->title = $request->input('title');
         $utilitysubtype->hero = $request->input('hero');
        $utilitysubtype->slug = $request->input('slug');
        $utilitysubtype->category = $request->input('category');
        

        // Handle image upload if provided
        if ($request->hasFile('image')) {
            // Delete the previous image if it exists
            if ($utilitysubtype->path) {
                Storage::delete('public/images/' . $utilitysubtype->path);
            }

            $imagePath = $request->file('image')->store('public/images');
            $imageUrl = basename($imagePath);
            $utilitysubtype->path = $imageUrl;
        }

        $utilitysubtype->save();

        // Redirect and send message
        return redirect()->route('utilitysubtypes.index')->with('success', 'Service SubCategory updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UtilitysubType $utilitysubtype)
   {
        $utilitysubtype->delete();
        return redirect()->route('utilitysubtypes.index')->with('success', 'Service Category Deleted Sucessfully');
    }
}
