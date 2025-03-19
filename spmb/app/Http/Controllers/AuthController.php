<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    

    public function showFormLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'name' => ['required', 'exists:users,name'],
            'password' => 'required'
        ]
        );

        if($request->has('remember')){
            $remember = true;
        }else{
            $remember = false;
        }
 
        if (Auth::attempt([
            'name' => $request->name, 
            'password' => $request->password
            ], $remember)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard.index');
        }
 
        return back()->withErrors([
            'password' => 'The your password is wrong!'
        ])->onlyInput('password');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
