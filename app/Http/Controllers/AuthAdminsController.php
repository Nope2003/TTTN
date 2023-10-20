<?php

namespace App\Http\Controllers;

use App\Models\Admins;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthAdminsController extends Controller
{
    public function register_admins()
    {
        return view('admins.register');
    }
 
    public function registerPost_admins(Request $request)
    {
        $admins = new Admins();
 
        $admins->nameadmins = $request->name;
        $admins->emailadmins = $request->email;
        $admins->passwordadmins = Hash::make($request->password);
 
        $admins->save();
 
        return back()->with('success', 'Register successfully');
    }
 
    public function login_admins()
    {
        return view('admins.login');
    }
 
    public function loginPost_admins(Request $request)
    {
        
        
        if (Auth::guard('admins')->attempt(['emailadmins' => $request->email,'passwordadmins' => $request->password,])) {
            return redirect('admins/home')->with('success', 'Login Success');
        }
 
        return back()->with('error', 'Error Email or Password');
    }
 
    public function logout_admins()
    {
        Auth::logout();
 
        return redirect()->route('login_admins');
    }
}
