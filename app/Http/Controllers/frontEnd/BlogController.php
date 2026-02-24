<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use App\Models\superAdmin\Journal;
use Illuminate\Http\Request;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {         

            $blogs = Journal::where('status',1)->get();

            return view('frontEnd.blogs.index',compact('blogs'));
       
    }
    
        public function show($slug)
    {
        $blog = Journal::where('slug', $slug)->firstOrFail();
        $currentblogId = $blog->id;
        $blogs = Journal::where('status', 1)->where('id', '!=', $currentblogId)->get();
        
        // SEO Keywords for the specific blog post
        $seoKeywords = $blog->meta_keyword; //
        $seoDescriptions = $blog->meta_description; 
		$metaImage = $blog->path;
		$hidden = $blog->hidden;
		$title = $blog->title;
        return view('frontEnd.blogs.show', compact('blog','seoKeywords','seoDescriptions','metaImage','blogs'));
    }



}