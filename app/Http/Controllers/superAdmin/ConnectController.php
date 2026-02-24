<?php

namespace App\Http\Controllers\superAdmin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\frontEnd\Connect;

use Illuminate\Http\Request;


class ConnectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()) {
            
            
            $connects = Connect::latest()->get();
            return view('superAdmin.connects.index',compact('connects'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    
    /**
     * Display the specified resource.
     */
    public function show(Connect $connect)
    {
        if (Auth::check()) {
            return view('superAdmin.connects.show', compact('connect'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    public function destroy(Connect $connect)
    {
        $connect->delete();
        return redirect()->route('connects.index')->with('success', 'Blog Deleted Sucessfully');
    }


}
