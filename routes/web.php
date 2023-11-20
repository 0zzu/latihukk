<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\logincon;
use App\Http\Controllers\dashboardcon;
use App\Http\Controllers\RegisterCon;

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


Route::get('/', function () { 
    return view('index');
});

Route::get('/admin', 'AdminController@index')->middleware('admin');
Route::get('/login', [logincon::class, 'login'])->name('login');
Route::post('actionlogin', [logincon::class, 'actionlogin'])->name('actionlogin');
Route::get('/dashboard', [dashboardcon::class, 'dashboard'])->name('dashboard')->
middleware('auth');
Route::get('actionlogout', [logincon::class, 'actionlogout'])->name('actionlogout')->
middleware('auth');

Route::get('register', [RegisterCon::class, 'register'])->name('register');
Route::post('register/action', [RegisterCon::class, 'actionregister'])-> name('actionregister');
