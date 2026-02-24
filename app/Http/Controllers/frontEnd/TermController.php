<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use App\Models\superAdmin\Condition;
use Illuminate\Http\Request;


class TermController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {         

            $conditions = Condition::all();
            return view('frontEnd.terms-conditions.index',compact('conditions'));
       
    }



}
