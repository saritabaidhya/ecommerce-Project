<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use App\Models\superAdmin\Triumph;
use Illuminate\Http\Request;


class successGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {         

            $successes = Triumph::all();
            return view('frontEnd.succeses.index',compact('successes'));
       
    }
    
   


}