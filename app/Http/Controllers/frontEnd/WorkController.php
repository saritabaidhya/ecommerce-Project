<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use App\Models\superAdmin\Page;
use Illuminate\Http\Request;


class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {    
        
     $hidden = Page::pluck('hidden')->values()->get(0);
     $title = Page::pluck('title')->values()->get(0);

      return view('frontEnd.work.index',compact('hidden','title'));
       
    }



}