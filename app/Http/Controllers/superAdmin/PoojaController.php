<?php

namespace App\Http\Controllers\superAdmin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\superAdmin\Utility;
use App\Models\superAdmin\Area;
use App\Models\superAdmin\UtilityType;
use App\Models\superAdmin\Package;
use App\Models\superAdmin\Offering;

use App\Models\superAdmin\Squad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class PoojaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check ()){
            
            $utilitytypes = UtilityType::where('status', 1)->latest()->get();
            $utilities = Utility::whereRelation('utilityType', 'name', 'Pooja')->latest()->get();
            $offerings = Offering::all();

            return view('superAdmin.poojas.index' , compact('utilities','utilitytypes','offerings'));
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
            $unitprice=$utility->unitprice;
            $packages = Package::where('status', 1)->latest()->get();
            $teams = Squad::where('status', 1)->latest()->get();
            $offerings = Offering::where('status', 1)->latest()->get();
            


            return view('superAdmin.utilities.create',compact('utilitytypes','areas','benefit','unitprice','packages','teams','offerings'));
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
            'unitprice' => 'required',
            'hero' => 'required',
            'purpose' => 'required',
            'benefit' => 'required',
        ]);

        $imagePath = $request->file('image')->store('public/images');
        $imageUrl = basename($imagePath);

        $name = $request->input('name');
        $slug = Str::slug($name);
        $slugWithHyphens = str_replace(' ', '-', $slug);

        $utility= Utility::create([
            'path' => $imageUrl,
            'slug' => $slugWithHyphens,
            'name' => $request->input('name'),
            'detail' => $request->input('detail'),
            'benefit' => $request->input('benefit'),
            'purpose' => $request->input('purpose'),
            'status' => $request->input('status'),
            'category' => $request->input('category'),
            'featured' => $request->input('featured'),
            'icon' => $request->input('icon'),
            'order' => $request->input('order'),
            'unitprice' => $request->input('unitprice'),
            'title' => $request->input('title'),
            'hero' => $request->input('hero'),
            'type' => $request->input('type'),
            'price' => $request->input('price'),
            'offprice' => $request->input('offprice'),
            'meta_keyword' => $request->input('meta_keyword'),
            'meta_description' => $request->input('meta_description'),
            'image' => $imageUrl,
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
            $unitprice=$utility->unitprice;
            $areas = Area::where('status', 1)->latest()->get();
            $utilitytypes = UtilityType::where('status', 1)->latest()->get();
            $packages = Package::where('status', 1)->latest()->get();
            $teams = Squad::where('status', 1)->latest()->get();

            $offerings = Offering::all();
            $selectedOfferings = json_decode($utility->offerings, true) ?? [];
            return view('superAdmin.utilities.edit', compact('utility','utilitytypes','areas' ,'benefit','unitprice','packages','teams','offerings','selectedOfferings'));
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
            'unitprice' => 'required',
            'hero' => 'required',
            'purpose' => 'required',
            'benefit' => 'required',
        ]);

        // Update the journaly record
        $utility->name = $request->input('name');
        $utility->detail = $request->input('detail');
        $utility->benefit = $request->input('benefit');
        $utility->purpose = $request->input('purpose');
        $utility->status = $request->input('status');
        $utility->type = $request->input('type');
        $utility->category = $request->input('category');
        $utility->icon = $request->input('icon');
        $utility->featured = $request->input('featured');
        $utility->order = $request->input('order');
        $utility->unitprice = $request->input('unitprice');
        $utility->title = $request->input('title');
        $utility->hero = $request->input('hero');
        $utility->offprice = $request->input('offprice');
        $utility->price = $request->input('price');
        
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