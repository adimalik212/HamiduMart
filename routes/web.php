<?php

use Illuminate\Support\Facades\Route;

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
    // return view('welcome');
    return view('page/splash');
});
route::group([], function () {
  Route::get('intro',function(){return view('page/intro');});
  Route::get('login',function(){return view('page/login');});
  Route::get('register',function(){return view('page/register');});
  Route::get('dashboard',function(){return view('page/index');});
});
