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
  Route::get('kategori', 'kategoris@index');
  Route::post('kategoriAdd', 'kategoris@store');
  Route::patch('kategoriUpdate/{kategori}', 'kategoris@update');
  Route::delete('kategoriDelete/{kategori}', 'kategoris@destroy');
  Route::get('login', 'users@login');
  Route::get('logout', 'users@logout');
  Route::post('loginPost', 'users@loginPost');
  Route::get('register', 'users@register');
  Route::post('registerPost', 'users@registerPost');
  Route::get('dashboard',function(){return view('page/index');});
  Route::get('profile',function(){return view('page/user/profile');});
  Route::get('editProfile',function(){return view('page/user/editProfile');});
  Route::get('store',function(){return view('page/store/store');});
  Route::get('addStore',function(){return view('page/store/add');});
  Route::get('myCart',function(){return view('page/store/myCart');});
  Route::get('bayar',function(){return view('page/store/bayar');});
  Route::get('tankyou',function(){return view('page/store/tankyou');});
  Route::get('detil',function(){return view('page/store/detil');});
  Route::get('myProduct',function(){return view('page/store/myProduct');});
});
