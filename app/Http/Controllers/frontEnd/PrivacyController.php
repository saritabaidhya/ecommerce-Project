<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use App\Models\superAdmin\Policy;
use Illuminate\Http\Request;


class PrivacyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {         

            $policies = Policy::all();
            return view('frontEnd.privacy-policy.index',compact('policies'));
       
    }



}
