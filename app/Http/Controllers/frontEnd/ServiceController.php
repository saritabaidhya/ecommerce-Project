<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use App\Models\superAdmin\Utility;
use App\Models\superAdmin\UtilityType;
use App\Models\superAdmin\Associate;
use Illuminate\Http\Request;
use Carbon\Carbon;


class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {         
         $query = Utility::where('status', 1);

        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }

        if ($request->filled('type')) {
            $query->where('type', $request->type);
        }
        $utilities = $query->get(); // Only filtered results
        $utilitytypes = UtilityType::where('status', 1)->get();

        return view('frontEnd.service.index',compact('utilities','utilitytypes'));
       
    }
    
public function show( $categorySlug, $slug)
{
    $category = UtilityType::where('slug', $categorySlug)->firstOrFail();
    $service = Utility::where('slug', $slug)
                      ->where('category', $category->id)
                      ->firstOrFail();
                      
    $currentServiceId = $service->id;
    $services = Utility::where('status', 1)->where('id', '!=', $currentServiceId)->where('category', $category->id)->get();
                          
    $utilitytypes = UtilityType::where('status', 1)->get();
    $seoKeywords = $service->seo_keywords;
    $seoDescriptions = $service->seo_descriptions;
    $hidden = $service->hidden;
    $title = $service->title;
    $metaImage = $service->path;

    $partners = Associate ::latest()->get();


    return view('frontEnd.service.show', compact(
        'service', 'seoKeywords', 'seoDescriptions', 'metaImage', 'hidden', 'title', 'services','utilitytypes','partners',
    ));
}







}