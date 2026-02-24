<?php

namespace App\Http\Controllers\superAdmin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\superAdmin\Query;

use Illuminate\Http\Request;



class QueryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check ()){

            $queries = Query ::latest()->get();
            return view('superAdmin.queries.index' , compact('queries'));
        }
        return redirect("login")->withErrors('You are not allowed to access');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::check()) {
            return view('superAdmin.queries.create');
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

       
        $query= Query::create([
            
            'name' => $request->input('name'),
            'detail' => $request->input('detail'),
            'status' => $request->input('status'),
            'category' => $request->input('category'),
          
        ]);

        return redirect()->route('queries.index')->with('success', 'Faq Created Sucessfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Query $query)
    {
        if (Auth::check()) {
            return view('superAdmin.queries.show', compact('query'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Query $query)
    {
        if (Auth::check()) {
            return view('superAdmin.queries.edit', compact('query'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Query $query)
    {
        // Validate the input data
        $request->validate([
            
        ]);

        // Update the queryy record
        $query->name= $request->input('name');
        $query->detail = $request->input('detail');
        $query->status = $request->input('status');
        $query->category = $request->input('category');

              $query->save();

        // Redirect and send message
        return redirect()->route('queries.index')->with('success', 'Faq updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Query $query)
    {
        $query->delete();
        return redirect()->route('queries.index')->with('success', 'Faq Deleted Sucessfully');
    }
}
