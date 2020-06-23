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
  Route::get('profile',function(){return view('page/user/profile');});
  Route::get('editProfile',function(){return view('page/user/store');});
  Route::get('store',function(){return view('page/store/store');});
  Route::get('myCart',function(){return view('page/store/myCart');});
  Route::get('bayar',function(){return view('page/store/bayar');});
  Route::get('tankyou',function(){return view('page/store/tankyou');});
});
