<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use App\Models\frontEnd\Business;
use App\Models\superAdmin\Page;
use App\Models\superAdmin\Utility;
use App\Models\superAdmin\Area;
use Illuminate\Http\Request;
use Illuminate\Support\Str;



class registerBusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {         
      $utilities = Utility::all();
      $areas = Area::where('status', 1)->get();
      return view('frontEnd.registerBusiness.index',compact('utilities' ,'areas'));
       
    }
    
    public function store(Request $request)
    {
        $request->validate([
            
        ]);
        
        $name = $request->input('name');
        $slug = Str::slug($name);
        $slugWithHyphens = str_replace(' ', '-', $slug);

       
        $business= Business::create([
            'slug' => $slugWithHyphens,
            'name' => $request->input('name'),
            'detail' => $request->input('detail'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'suburb' => $request->input('suburb'),
            'service' => $request->input('service'),
            'website' => $request->input('website'),
            'abn' => $request->input('abn'),
            'package' => $request->input('package'),
            'gst' => $request->input('gst'),
            'cost' => $request->input('cost'),
             'liability' => $request->input('liability'),
              'indemnity' => $request->input('indemnity'),
            
          
        ]);

        return redirect()->route('register-business.index')->with('success', 'Thank you! Your business listing request was submitted successfully.');
    }



}