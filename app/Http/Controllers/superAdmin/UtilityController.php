<?php

namespace App\Http\Controllers\superAdmin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\superAdmin\Utility;
use App\Models\superAdmin\Area;
use App\Models\superAdmin\UtilityType;
use App\Models\superAdmin\UtilitysubType;
use App\Models\superAdmin\Package;
use App\Models\superAdmin\Offering;

use App\Models\superAdmin\Squad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class UtilityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check ()){
            
            $utilitytypes = UtilityType::where('status', 1)->latest()->get();
            $utilitysubtypes = UtilitysubType::where('status', 1)->latest()->get();
            $utilities = Utility ::latest()->get();
            $offerings = Offering::all();

            return view('superAdmin.utilities.index' , compact('utilities','utilitytypes','offerings','utilitysubtypes'));
        }
        return redirect("login")->withErrors('You are not allowed to access');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Utility $utility)
    {
        if (Auth::check()) {
            $areas = Area::where('status', 1)->latest()->get();
            $utilitytypes = UtilityType::where('status', 1)->latest()->get();
            $benefit=$utility->benefit;
            $variant=$utility->variant;
            $unitprice=$utility->unitprice;
            $teams = Squad::where('status', 1)->latest()->get();
            $utilitysubtypes = UtilitysubType::where('status', 1)->latest()->get();

            


            return view('superAdmin.utilities.create',compact('utilitytypes','utilitysubtypes','areas','benefit','unitprice','teams','variant'));
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
            'price' => 'required',
            'offprice' => 'required',
            'hero' => 'required',
            'purpose' => 'required',
            "photo" => "nullable", // Made optional to allow for no changes
            "photo.*" => "image|mimes:jpeg,png,jpg,gif|max:9048",
        ]);
        $imageUrl = null;

       if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/images');
            $imageUrl = basename($imagePath);
        }
        $imagePaths = [];

       

        // Handle multiple image uploads
        if ($request->hasFile("photo")) {
            foreach ($request->file("photo") as $file) {
                $imagePath1 = $file->store("public/images");
                $imagePaths[] = basename($imagePath1);
            }
        }

        $name = $request->input('name');
        $slug = Str::slug($name);
        $slugWithHyphens = str_replace(' ', '-', $slug);

        $utility= Utility::create([
            'path' => $imageUrl,
            'slug' => $slugWithHyphens,
            'name' => $request->input('name'),
            'detail' => $request->input('detail'),
            'benefit' => $request->input('benefit'),
            'variant' => $request->input('variant'),
            'purpose' => $request->input('purpose'),
            'status' => $request->input('status'),
            'category' => $request->input('category'),
            'subcategory' => $request->input('subcategory'),
            'featured' => $request->input('featured'),
            'onsale' => $request->input('onsale'),
            'icon' => $request->input('icon'),
            'order' => $request->input('order'),
            'validity' => $request->input('validity'),
            'unitprice' => $request->input('unitprice'),
            'title' => $request->input('title'),
            'hero' => $request->input('hero'),
            'price' => $request->input('price'),
            'offprice' => $request->input('offprice'),
            'meta_keyword' => $request->input('meta_keyword'),
            'meta_description' => $request->input('meta_description'),
            "image" => json_encode($imagePaths), // Store image paths as a array
        ]);

        return redirect()->route('utilities.index')->with('success', 'Service Created Sucessfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Utility $utility)
    {
        if (Auth::check()) {
            $utilitytypes = UtilityType::where('status', 1)->latest()->get();

            return view('superAdmin.utilities.show', compact('utility','utilitytypes'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Utility $utility)
    {
        if (Auth::check()) {
            $benefit=$utility->benefit;
            $variant=$utility->variant;
            $unitprice=$utility->unitprice;
            $areas = Area::where('status', 1)->latest()->get();
            $utilitytypes = UtilityType::where('status', 1)->latest()->get();
            $utilitysubtypes = UtilitysubType::where('status', 1)->latest()->get();
            $packages = Package::where('status', 1)->latest()->get();
            $teams = Squad::where('status', 1)->latest()->get();

           
            return view('superAdmin.utilities.edit', compact('utility','utilitytypes','utilitysubtypes','areas' ,'benefit','unitprice','packages','teams','variant'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Utility $utility)
    {
        // Validate the input data
        $request->validate([
            
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'slug' => 'nullable',
            'name' => 'required',
            'price' => 'required',
            'offprice' => 'required',
            'hero' => 'required',
              "photo" => "nullable", // Made optional to allow for no changes
            "photo.*" => "image|mimes:jpeg,png,jpg,gif|max:9048",
        ]);

        // Update the journaly record
        $utility->name = $request->input('name');
        $utility->detail = $request->input('detail');
        $utility->benefit = $request->input('benefit');
        $utility->variant = $request->input('variant');
        $utility->purpose = $request->input('purpose');
        $utility->status = $request->input('status');
        $utility->category = $request->input('category');
        $utility->subcategory = $request->input('subcategory');
        $utility->icon = $request->input('icon');
        $utility->featured = $request->input('featured');
        $utility->onsale = $request->input('onsale');
        $utility->order = $request->input('order');
        $utility->unitprice = $request->input('unitprice');
        $utility->title = $request->input('title');
        $utility->hero = $request->input('hero');
        $utility->offprice = $request->input('offprice');
        $utility->price = $request->input('price');
        $utility->validity = $request->input('validity');
        
        $utility->meta_keyword = $request->input('meta_keyword');
        $utility->meta_description = $request->input('meta_description');
        

        // Handle image upload if provided
        if ($request->hasFile('image')) {
            // Delete the previous image if it exists
            if ($utility->path) {
                Storage::delete('public/images/' . $utility->path);
            }

            $imagePath = $request->file('image')->store('public/images');
            $imageUrl = basename($imagePath);
            $utility->path = $imageUrl;
        }


        if ($request->hasFile("photo")) {
            // Decode the current images
            $currentImages = $utility->image
                ? json_decode($utility->image, true)
                : [];

            // Handle new image uploads
            $newImagePaths = [];
            foreach ($request->file("photo") as $file) {
                $imagePath1 = $file->store("public/images");
                $newImagePaths[] = basename($imagePath1);
            }

            // Merge new images with current images
            $currentImages = array_merge($currentImages, $newImagePaths);

            $utility->image = json_encode($currentImages);
        }
        // Handle image deletion
        if ($request->has("delete_images")) {
            $imagesToDelete = $request->input("delete_images");
            $currentImages = json_decode($utility->image, true);

            foreach ($imagesToDelete as $image) {
                if (($key = array_search($image, $currentImages)) !== false) {
                    // Delete the image from storage
                    Storage::delete("public/images/" . $image);
                    // Remove from the current images array
                    unset($currentImages[$key]);
                }
            }

            // Re-save the updated image array
            $utility->image = json_encode(array_values($currentImages));
        }

         $selected = $request->input('offerings', []);

        // Check if "all" was selected (even though JS should remove it)
        if (in_array('all', $selected)) {
            // Replace with all actual offering names
            $selected = Offering::pluck('name')->toArray();
        }

        // Store in JSON (or any format you're using)
        $utility->offerings = json_encode($selected);
        $utility->save();     



        // Redirect and send message
        return redirect()->route('utilities.index')->with('success', 'Service updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Utility $utility)
    {
        $utility->delete();
        return redirect()->route('utilities.index')->with('success', 'Service Deleted Sucessfully');
    }
}