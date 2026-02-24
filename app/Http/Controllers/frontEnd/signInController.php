<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\superAdmin\Merchant;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;



class signInController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {         
        return view('frontEnd.signIn.index');
       
    }
    
   public function merchantSignin(Request $request)
{
    $request->validate([
        'merchant_id' => 'required',
    ]);

    $credentials = $request->only('merchant_id', 'password');

    // Check if merchant exists and if status is 1
    $merchant = Merchant::where('merchant_id', $request->merchant_id)->first();

    if ($merchant && $merchant->status == 1 && Auth::guard('merchant')->attempt($credentials)) {
        // Store the merchant's ID in session
        Session::put('merchant_id', $merchant->id);

        // Authentication passed
        return redirect()->intended('/')->with('success', 'Login successful! Welcome, ' . $merchant->name);
    }

    // If merchant doesn't exist or status is not 1, return with an error
    return redirect()->back()->withInput($request->only('merchant_id'))
        ->withErrors(['merchant_id' => 'Login details are not valid or merchant is inactive']);
}

    public function logOut()
    {
       
        Auth::guard('merchant')->logout(); // Use 'merchant' guard for logout
        Session::forget('merchant_id');
        return redirect('/');
    }
    
 }