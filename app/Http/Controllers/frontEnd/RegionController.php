<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use App\Models\superAdmin\UtilityType;
use App\Models\superAdmin\Area;
use App\Models\superAdmin\Page;
use Illuminate\Http\Request;


class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {         

            $areas = Area::where('status',1)->withCount('utilitytypes')->get();
            
            $hidden = Page::pluck('hidden')->values()->get(3);
            $title = Page::pluck('title')->values()->get(3);
            return view('frontEnd.regions.index',compact('areas','hidden','title'));
       
    }
    
        public function show($slug)
    {
        $area = Area::where('slug', $slug)->firstOrFail();
        $currentareaId = $area->id;
        $utilitytypes = UtilityType::where('status', 1)->where('address', '=', $currentareaId)->withCount('utilities')->orderBy('order', 'asc')->get();
        $areas = Area::where('status',1)->withCount('utilitytypes')->get();
        // SEO Keywords for the specific area post
        $seoKeywords = $area->meta_keyword; //
        $seoDescriptions = $area->meta_description; 
		$metaImage = $area->path;
		$hidden = $area->hidden;
		$title = $area->title;
        return view('frontEnd.regions.show', compact('area','utilitytypes','seoKeywords','seoDescriptions','metaImage' ,'hidden','title','areas'));
    }



}