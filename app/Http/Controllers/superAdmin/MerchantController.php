<?php

namespace App\Http\Controllers\superAdmin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\superAdmin\Utility;
use App\Models\superAdmin\Merchant;
use Illuminate\Http\Request;


class MerchantController extends Controller
{
    /**
     * Display a merchanting of the resource.
     */
    public function index()
    {
        if (Auth::check()) {
            
            $merchants = merchant ::latest()->get();
            return view('superAdmin.merchants.index',compact('merchants'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    
     /**
     * Display the specified resource.
     */
    public function show(merchant $merchant)
    {
        if (Auth::check()) {
            return view('superAdmin.merchants.show', compact('merchant'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(merchant $merchant)
    {
        if (Auth::check()) {
            
            $utilities = Utility :: all();
            return view('superAdmin.merchants.edit', compact('merchant','utilities'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    /**
     * Update the specified resource in storage.
     */
   public function update(Request $request, merchant $merchant)
{
    // Validate the input data
    $request->validate([
        'name' => 'required',
    ]);

    // Store the original status before updating
    $originalStatus = $merchant->status;

    // Update the merchant record
    $merchant->name = $request->input('name');
    $merchant->detail = $request->input('detail');
    $merchant->status = $request->input('status');
    $merchant->address = $request->input('address');
    $merchant->service = $request->input('service');
    $merchant->save();

    

    // Redirect and send message
    return redirect()->route('merchants.index')->with('success', 'merchant updated successfully');
}

    
     public function destroy(merchant $merchant)
    {
        $merchant->delete();
        return redirect()->route('merchants.index')->with('success', 'merchant Deleted Sucessfully');
    }



}
