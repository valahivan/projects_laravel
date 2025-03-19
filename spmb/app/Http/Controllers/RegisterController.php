<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{

    public function showFormRegister(){
        return view('auth.register');
    }

    public function register(Request $request){
        $request->validate([
            'name' => ['required', 'unique:users,name', 'max:255'],
            'email' => 'required',
            'password' => ['required', 'max:255']
        ]
        );

        $validator = Validator::make($request->all(), [
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required|string|min:8'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)->withInput();
        }

        $isMatch = DB::table('users')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $data = [
            'name' => $request->name,
            'password' => $request->password
        ];
        

        if($isMatch && Auth::attempt($data)){
            $request->session()->regenerate();
            return redirect()->route('dashboard.index');
        }
    }
}
