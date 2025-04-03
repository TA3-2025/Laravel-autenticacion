<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function CheckLogin(Request $request){
        if(Auth::check())
            return redirect('/');
        return view("login");
        
    }
    public function Autenticar(Request $request){
        $credenciales = $request->only(['email', 'password']);

        if (Auth::attempt($credenciales)) 
            return redirect('/');

        return redirect('/login')
                    ->with('error', 'Credenciales incorrectas');
    }
    public function logout(Request $request){
        Auth::logout();
        return redirect('/login')->with('logout',true);
    }
}
