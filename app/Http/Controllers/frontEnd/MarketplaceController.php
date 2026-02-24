<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use App\Models\superAdmin\Market;
use Illuminate\Http\Request;


class MarketplaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {         

            $marketplaces = Market::where('status',1)->get();

            return view('frontEnd.marketplace.index',compact('marketplaces'));
       
    }
    
    public function show($slug)
    {
        $marketplace = Market::where('slug', $slug)->firstOrFail();
        $currentmarketId = $marketplace->id;
        $marketplaces = Market::where('status', 1)->where('id', '!=', $currentmarketId)->get();
        
        // SEO Keywords for the specific market post
        $seoKeywords = $marketplace->meta_keyword; //
        $seoDescriptions = $marketplace->meta_description; 
		$metaImage = $marketplace->path;
		$hidden = $marketplace->hidden;
		$title = $marketplace->title;
        return view('frontEnd.marketplace.show', compact('marketplace','seoKeywords','seoDescriptions','metaImage','marketplaces'));
    }




}