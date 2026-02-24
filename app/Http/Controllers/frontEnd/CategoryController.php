<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use App\Models\superAdmin\UtilityType;
use App\Models\superAdmin\Page;
use App\Models\superAdmin\Utility;
use App\Models\superAdmin\Merchant;
use App\Models\superAdmin\Squad;
use App\Models\superAdmin\Area;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {         

            $utilitytypes = UtilityType::where('status',1)->withCount('utilities')->orderBy('order', 'asc')->get();
            $hidden = Page::pluck('hidden')->values()->get(3);
            $title = Page::pluck('title')->values()->get(3);
            $areas = Area::where('status',1)->get();
            return view('frontEnd.category.index',compact('utilitytypes','hidden','title','areas'));
       
    }
    
   public function show($slug)
{

    $category = UtilityType::where('slug', $slug)
                           ->firstOrFail();

    $currentCategoryId = $category->id;

    $utilities = Utility::where('status', 1)
    ->where('category', $currentCategoryId)
    ->orderBy('order', 'asc')
    ->get();

    $astrologers = Squad::where('status', 1)
    ->where('expertise', 'Astrologer')
    ->get();

    // Attach merchant count to each utility
    foreach ($utilities as $utility) {
        $merchantCount = Merchant::where('status', 1)
            ->whereJsonContains('service', (string) $utility->id)
            ->count();

        $utility->merchant_count = $merchantCount; // Attach merchant_count dynamically
    }
    $utilitytypes = UtilityType::where('status', 1)->withCount('utilities')->orderBy('order', 'asc')->get();
    $seoKeywords = $category->seo_keywords;
    $seoDescriptions = $category->seo_descriptions;
    $metaImage = $category->path;
    $hidden = $category->hidden;
    $title = $category->title;

    return view('frontEnd.category.show', compact('category', 'utilities', 'seoKeywords', 'seoDescriptions', 'metaImage', 'hidden', 'title','utilitytypes','astrologers'));
}




}