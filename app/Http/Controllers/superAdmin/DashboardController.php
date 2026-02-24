<?php

namespace App\Http\Controllers\superAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\superAdmin\Utility;
use App\Models\superAdmin\UtilityType;
use App\Models\superAdmin\Merchant;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            
            
            $countUtility = Utility ::count();
            $countUtilityType = UtilityType ::count();
            $countMerchant = Merchant::where('status',1)->count();

           
            return view('superAdmin.dashboards.index',compact('countUtility','countUtilityType','countMerchant'));
        }

       return redirect("login")->withErrors('You are not allowed to access');
    }

    public function signOut()
    {
        Auth::logout();
        Session::forget('user_id');  // Forget the merchant's ID stored in the session

        return Redirect('login');
    }
}
