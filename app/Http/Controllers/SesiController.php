<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

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
            // echo "Berhasil verifikasi!";
            // exit();

            $user = Auth::user();
            if($user->level=='bagianti'){
                return redirect('/ti');
            }elseif($user->level=='administrasi'){
                return redirect('/admin');
            }elseif($user->level=='gurubk'){
                return redirect('/guru');
            }
        }else{
            return redirect('/')->withErrors('Username atau password salah.')->withInput();
        }
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->flush();
        return redirect('/');
    }
}
