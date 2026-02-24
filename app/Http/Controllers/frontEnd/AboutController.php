<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use App\Models\superAdmin\Story;
use App\Models\superAdmin\Area;
use App\Models\superAdmin\Approach;
use App\Models\superAdmin\Grant;
use Illuminate\Http\Request;


class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {         

            $abouts = Story::all();
            $appsteps = Approach::where('status', 1)->where('category' , 'app')->latest()->get();
            $features = Grant::where('status',1)->oldest()->get();


            return view('frontEnd.abouts.index',compact('abouts','appsteps','features'));
       
    }
    
   


}