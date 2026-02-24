<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use App\Models\frontEnd\Contact;
use App\Models\superAdmin\Page;
use App\Models\frontEnd\Connect;

use Illuminate\Http\Request;


class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {         
        
      $hidden = Page::pluck('hidden')->values()->get(4);
      $title = Page::pluck('title')->values()->get(4);
      return view('frontEnd.contact.index',compact('hidden','title'));
       
    }
    
    public function store(Request $request)
    {
        $request->validate([
            
        ]);
        

        $connect= Connect::create([
            'name' => $request->input('name'),
            'detail' => $request->input('detail'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'suburb' => $request->input('suburb'),

          
        ]);

        return back()->with('success', 'Thank you! Contact Requested submitted successfully.');
    }



}