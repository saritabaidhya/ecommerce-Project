<?php

namespace App\Http\Controllers\superAdmin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\superAdmin\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('superAdmin.logins.index');
    }

    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboards')
                        ->withSuccess('You have successfully signed in');
        }
  
        return redirect("login")->withErrors('Sorry, your credentials were incorrect.');

    }

    public function registration()
    {
        if(Auth::check()){
        return view('superAdmin.logins.register');
        }
        
          return redirect("login")->withErrors('You are not allowed to access');
    }

    public function customRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect("dashboards")->with('success', ' You have successfully signed in');
    }
}
