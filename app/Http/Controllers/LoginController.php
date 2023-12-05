<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login', [
            'title' => 'Login'
        ]);
    }
    public function authenticate(Request $request)
    {
        // dd($request->all());
        $credentials = $request-> validate([
        'username' => 'required|min:2',
        'password' => 'required',
        ]);
    

        if (Auth::guard('web')->attempt($credentials)){
            $request->session()->regenerate();
            return redirect('/beranda');
        }
        
        return back()->with('loginError','Login Gagal!');
             
    }

     public function logout(Request $request)
     {
         Auth::logout();

         $request->session()->invalidate();

         $request->session()->regenerateToken();
         
         return redirect('/login');
     }
}


