<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use App\Models\superAdmin\Page;

use Illuminate\Http\Request;


class GuideController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {         

      $hidden = Page::pluck('hidden')->values()->get(2);
      $title = Page::pluck('title')->values()->get(2);
      return view('frontEnd.guide.index',compact('hidden','title'));
       
    }



}