<?php

namespace App\Http\Controllers\superAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\superAdmin\Page;
use Illuminate\Support\Facades\Auth;


class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()) {

            $pages = Page::all();
            return view('superAdmin.pages.index',compact('pages'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

   
/**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::check()) {
            return view('superAdmin.pages.create');
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        ]);

       
        $page= Page::create([
            
            'name' => $request->input('name'),
            'detail' => $request->input('detail'),
            'hidden' => $request->input('hidden'),
            'title' => $request->input('title'),
          
        ]);

        return redirect()->route('pages.index')->with('success', 'Page Created Sucessfully');
    }
    
    /**
     * Display the specified resource.
     */
    public function show(Page $page)
    {
        if (Auth::check()) {
            return view('superAdmin.pages.show', compact('page'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Page $page)
    {
        if (Auth::check()) {
            return view('superAdmin.pages.edit', compact('page'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Page $page)
    {
        // Validate the input data
        $request->validate([
            
        ]);

        // Update the record
        $page->name = $request->input('name');
        $page->detail= $request->input('detail');
        $page->hidden= $request->input('hidden');
        $page->title= $request->input('title');
        
       $page->save();

        // Redirect and send message
        return redirect()->route('pages.index')->with('success', 'Page updated successfully');
    }

    
}
