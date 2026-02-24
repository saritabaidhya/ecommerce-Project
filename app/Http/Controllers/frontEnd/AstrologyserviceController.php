<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use App\Models\superAdmin\Squad;
use App\Models\superAdmin\Utility;
use Illuminate\Http\Request;


class AstrologyserviceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {         

            $astrologyservices = Squad::all();
            return view('frontEnd.astrologyservices.index',compact('astrologyservices'));
       
    }

    public function show($slug)
    {
        $astrologyservice = Squad::where('slug', $slug)->firstOrFail();
        $currentmarketId = $astrologyservice->id;
        $astrologyservices = Utility::where('name', 1)->where('id', '!=', $currentmarketId)->get();

        $selectedServices = json_decode($astrologyservice->services, true) ?? [];
        // dd($selectedServices);
        // Get Utilities where name is in selectedServices and id is not current squad id
        $availableervices = Utility::whereIn('name', $selectedServices)
                                    ->where('id', '!=', $currentmarketId)
                                    ->get();

        
        
        // SEO Keywords for the specific market post
        
        return view('frontEnd.astrologyservices.show', compact('astrologyservice','astrologyservices','availableervices'));
    }

    
  



    
    
   


}