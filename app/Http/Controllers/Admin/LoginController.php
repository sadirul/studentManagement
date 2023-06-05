<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(Request $request){
        return view('admin.login');
    }

    public function login(Request $request){
        $request->validate([
            "username" => ['required'],
            "password" => ['required']
        ],[
            "username.required" => 'Please enter Username!',
            "password.required" => 'Please enter Password!',
        ]);
        if(Auth::guard('admin')->attempt(['username' => $request->username, 'password' => $request->password])){
            // dd(Auth::guard('admin')->user()->name);
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard');
        }else{
            return back()->withErrors(["status" => 'error', "message" => 'Wrong Username or Password!']);
        }
        
    }
}
