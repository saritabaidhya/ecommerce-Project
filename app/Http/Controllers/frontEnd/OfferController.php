<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use App\Models\superAdmin\Grant;
use Illuminate\Http\Request;


class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {         

            $offers = Grant::where('status',1)->get();

            return view('frontEnd.offers.index',compact('offers'));
       
    }
    
        public function show($slug)
    {
        $offer = Grant::where('slug', $slug)->firstOrFail();
        $currentofferId = $offer->id;
        $offers = Grant::where('status', 1)->where('id', '!=', $currentofferId)->get();
        
        // SEO Keywords for the specific offer post
        $seoKeywords = $offer->meta_keyword; //
        $seoDescriptions = $offer->meta_description; 
		$metaImage = $offer->path;
		$hidden = $offer->hidden;
		$title = $offer->title;
        return view('frontEnd.offers.show', compact('offer','metaImage','offers'));
    }



}