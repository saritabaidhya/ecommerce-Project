<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use App\Models\superAdmin\Query;
use Illuminate\Http\Request;


class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {         

            $faqs = Query::all();
            return view('frontEnd.faqs.index',compact('faqs'));
       
    }
    
   


}