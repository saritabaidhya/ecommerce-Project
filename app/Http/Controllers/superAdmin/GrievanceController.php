<?php

namespace App\Http\Controllers\superAdmin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\frontEnd\Complaint;

use Illuminate\Http\Request;


class GrievanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()) {
            
            
            $grievances = Complaint::latest()->get();
            return view('superAdmin.grievances.index',compact('grievances'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    
    /**
     * Display the specified resource.
     */
    public function show(Complaint $grievance)
    {
        if (Auth::check()) {
            return view('superAdmin.grievances.show', compact('grievance'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

     /**
     * Remove the specified resource from storage.
     */
    public function destroy(Complaint $grievance)
    {
        $grievance->delete();
        return redirect()->route('grievances.index')->with('success', 'Enquiry Deleted Sucessfully');
    }



}
