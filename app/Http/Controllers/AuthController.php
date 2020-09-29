<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Str;

class AuthController extends Controller
{
    public function index()
    {
    	if (Auth::check()) {
    		$user = auth()->user();
    		return redirect('/')->with('sukses', 'Selamat Datang '.Str::title($user->username));
    	} else {
    		return view('pages.login');
    	}    	
    }

    public function postlogin(Request $request)
    {
    	if (Auth::attempt($request->only('email', 'password'))) {
    		$user = Auth::user();
    		return redirect()->intended('/')->with('sukses', 'Selamat Datang '.Str::title($user->username));
    	}
    	return redirect('/weblogin')->with('gagal', 'Email / Password tidak terdaftar.');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}
