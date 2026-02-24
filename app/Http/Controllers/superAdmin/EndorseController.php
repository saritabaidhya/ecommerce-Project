<?php

namespace App\Http\Controllers\superAdmin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\superAdmin\End;
use App\Models\superAdmin\Subscribe;



class EndorseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()) {
            $endorses=Subscribe::latest()->get();

            return view('superAdmin.endorses.index',compact('endorses'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

     public function destroy(Subscribe $endorse)
    {
        $endorse->delete();
        return redirect()->route('endorses.index')->with('success', 'Subscribes Deleted Sucessfully');
    }




}
