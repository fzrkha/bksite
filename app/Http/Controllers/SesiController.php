<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    function index(){
        return view('home');
    }

    function login(Request $request){
        $request->validate([
            'username' => 'required',
            'password'=> 'required'
        ],
        [
            'username.required' => 'Username wajib diisi!',
            'password.required' => 'Password wajib diisi!'
        ]);

        $ceklogin = [
            'username' => $request->username,
            'password' => $request->password
        ];

        if(Auth::attempt($ceklogin)){
            echo "Berhasil verifikasi!";
            exit();
        }else{
            return redirect('/')->withErrors('Username atau password salah.')->withInput();
        }
    }
}
