<?php

namespace App\Http\Controllers\frontEnd;
use App\Models\superAdmin\Query;
use App\Http\Controllers\Controller;
use App\Models\superAdmin\Page;

use Illuminate\Http\Request;


class TradeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {         
      $queries = Query::where('status',1)->get();
      $hidden = Page::pluck('hidden')->values()->get(1);
      $title = Page::pluck('title')->values()->get(1);

      return view('frontEnd.trade.index',compact('queries','hidden','title'));
       
    }



}