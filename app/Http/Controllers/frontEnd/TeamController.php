<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use App\Models\superAdmin\Squad;
use Illuminate\Http\Request;


class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {         

            $teams = Squad::all();
            return view('frontEnd.teams.index',compact('teams'));
       
    }

    public function show($slug)
    {
        $team = Squad::where('slug', $slug)->firstOrFail();
        $currentmarketId = $team->id;
        $teams = Squad::where('status', 1)->where('id', '!=', $currentmarketId)->get();
        
        // SEO Keywords for the specific market post
        
        return view('frontEnd.teams.show', compact('team','teams'));
    }



    
    
   


}