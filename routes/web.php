<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/moh',[\App\Http\Controllers\MohController::class,'index'])->name('moh')->middleware('moh');
Route::get('/admin',[\App\Http\Controllers\AdminController::class,'index'])->name('admin')->middleware('admin');
Route::get('/user',[\App\Http\Controllers\UserController::class,'index'])->name('user')->middleware('user');
