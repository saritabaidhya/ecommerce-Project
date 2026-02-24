<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use App\Models\superAdmin\Slider;
use App\Models\superAdmin\UtilityType;
use App\Models\superAdmin\UtilitysubType;
use App\Models\superAdmin\Utility;
use App\Models\superAdmin\Grant;
use App\Models\superAdmin\Merchant;
use App\Models\superAdmin\Squad;
use App\Models\superAdmin\Review;
use App\Models\superAdmin\Approach;
use App\Models\superAdmin\Associate;
use App\Models\superAdmin\Market;

use App\Models\frontEnd\Subscribe;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {         

            $sliders = Slider::where('status',1)->get();
            $deals = Grant::where('status',1)->get();
            $utilitytypes = UtilityType::where('status', 1)->withCount('utilities')->orderBy('order', 'desc')->get();

            $selectedsub = UtilitysubType::where('status', 1)->withCount('utilities')->orderBy('order', 'desc')->get();
            $utilitysubtypes = UtilitysubType::where('status', 1)->withCount('utilities')->orderBy('order', 'desc')->get();
           
            $featured = Utility::with('utilitysubtype')->where('status', 1)->where('featured' , '1')->latest()->get();
            $onsale = Utility::with('utilitysubtype')->where('status', 1)->where('onsale' , '1')->latest()->get();
            $special = Utility::with('utilitysubtype')->where('status', 1)->where('featured' , 'special')->latest()->get();

               

            $allproducts = Utility::with('utilitysubtype')->where('status', 1)->latest()->get();


            $electronics = Utility::with('utilitysubtype')->where('status', 1)->where('category' , '62')->latest()->get();
            $partners = Associate ::latest()->get();


            $teams = Squad::where('status', 1)->latest()->get();
            $testimonials = Review::where('status', 1)->latest()->get();

         
            $markets = Market::where('status', 1)->latest()->get();
            
            $merchantCount = Merchant::where('status',1)->count();
            $courses = Utility::where('status',1)->get();

            return view('frontEnd.home.index',compact('sliders','utilitytypes','utilitysubtypes','deals','merchantCount','electronics',
            'special','featured','onsale','partners','markets','teams','testimonials','courses','allproducts'));
       
    }


    public function store(Request $request)
    {
        $request->validate([
            
        ]);
        

        $subscribe = Subscribe ::create([
            
            'email' => $request->input('email'),

          
        ]);

        return back()->with('success', 'Thank you! Subscribed successfully.');
    }
    


}
