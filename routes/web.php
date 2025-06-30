<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\TIController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuruController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [SesiController::class,'index'])->name('login');
Route::post('/', [SesiController::class,'login']);

Route::middleware(['auth'])->group(function(){
    Route::get('/ti',[TIController::class,'index']);
    Route::get('/admin',[AdminController::class,'index']);
    Route::get('/guru',[GuruController::class,'index']);
    Route::get('/logout',[SesiController::class,'logout']);
});