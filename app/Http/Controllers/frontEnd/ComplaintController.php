<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use App\Models\frontEnd\Complaint;

use Illuminate\Http\Request;


class ComplaintController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {         
        
      return view('frontEnd.complaint.index');
       
    }
    
    public function store(Request $request)
    {
         $request->validate([
]);



$complaint = Complaint::create([
            'name' => $request->input('name'),
            'detail' => $request->input('detail'),
            'phone' => $request->input('phone'),
            'subject' => $request->input('subject'),
            'email' => $request->input('email'),
            'category' => $request->input('category'),
            'unit' => $request->input('unit'),
            'quantity' => $request->input('quantity'),
            'package' => $request->input('package'),
            'address' => $request->input('address'),

          
        ]);

        return back()->with('success', 'Thank you! Form submitted successfully.');
    }



}