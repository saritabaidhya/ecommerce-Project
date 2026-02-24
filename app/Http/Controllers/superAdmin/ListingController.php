<?php

namespace App\Http\Controllers\superAdmin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\frontEnd\Business;
use App\Models\superAdmin\Utility;
use App\Models\superAdmin\Area;
use App\Models\superAdmin\Merchant;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;


class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()) {
            
            $businesses = Business ::latest()->get();
            $areas = Area ::where('status', 1)->get();
            return view('superAdmin.lists.index',compact('businesses','areas'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    
     /**
     * Display the specified resource.
     */
    public function show(Business $list)
    {
        if (Auth::check()) {
            return view('superAdmin.lists.show', compact('list'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Business $list)
    {
        if (Auth::check()) {
            
            $utilities = Utility :: all();
            $areas = Area ::where('status', 1)->get();
            return view('superAdmin.lists.edit', compact('list','utilities','areas'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    /**
     * Update the specified resource in storage.
     */
   public function update(Request $request, Business $list)
{
    // Validate the input data
    $request->validate([
        'name' => 'required',
    ]);

    // Store the original status before updating
    $originalStatus = $list->status;

    // Update the business record
    $list->name = $request->input('name');
    $list->detail = $request->input('detail');
    $list->status = $request->input('status');
    $list->gst = $request->input('gst');
    $list->save();

    // Create Merchant only if status changes from anything to 1
    if ($originalStatus != 1 && $list->status == 1) {
        Merchant::create([
            'merchant_id' => $list->id,  // assuming you want to link it
            'name' => $list->name,
            'detail' => $list->detail,
            'service' => $list->service,
            'email' => $list->email,
            'phone' => $list->phone,
            'suburb' => $list->suburb,
            'website' => $list->website,
            'slug' => $list->slug,
            'status' => $list->status,
            'abn' => $list->abn,
            'gst' => $list->gst,
            'cost' => $list->cost,
            'liability' => $list->liability,
            'indemnity' => $list->indemnity,
            'password'=> Hash::make($list->abn),
        ]);
    }

    // Redirect and send message
    return redirect()->route('lists.index')->with('success', 'Business updated successfully');
}

    
     public function destroy(Business $list)
    {
        $list->delete();
        return redirect()->route('lists.index')->with('success', 'Business Deleted Sucessfully');
    }



}
