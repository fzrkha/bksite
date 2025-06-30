<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TIController extends Controller
{
    function index(){
        echo "Hello";
        echo "<h1>".Auth::user()->nama."</h1>";
        echo "<br><a href='logout'>Keluar</a>";
    }
}
