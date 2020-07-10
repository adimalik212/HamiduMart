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
  Route::patch('lapakUpdate/{lapak}', 'stores@lapakUpdate');
  
  Route::get('login', 'users@login');
  Route::get('logout', 'users@logout');
  Route::post('loginPost', 'users@loginPost');
  Route::get('register', 'users@register');
  Route::post('registerPost', 'users@registerPost');
  
  Route::get('dashboard',function(){
    $lapak = App\lapak::where('user_id', session('id'))->first();
    $kateg = App\kategori::all();
    $store = App\store::all();
    $user = App\user::all();
    $bayar = App\bayar::all();
    $pilih = App\pilih::where('pembeli', session('id'))->get();
    return view('page/index', compact('lapak','kateg','store','user','pilih','bayar'));
  });
  Route::get('store','stores@index');
  Route::get('myProduct','stores@product');
  Route::get('addStore','stores@addStore');
  Route::post('addStorePost','stores@store');
  Route::get('detilStore/{store}','stores@show');
  Route::get('editStore/{store}','stores@editStore');
  Route::patch('editStorePost/{store}','stores@update');
  Route::delete('deleteStore/{store}','stores@destroy');
  
  Route::get('profile', 'lapaks@index');
  Route::get('editProfile/{lapak}', 'lapaks@edit');
  Route::patch('editProfile/{lapak}', 'lapaks@update');

  Route::post('addKomen','komentars@store');
  Route::patch('updateKomen/{komentar}','komentars@update');
  
  Route::get('myCart', 'pilihs@index');
  Route::post('pilih', 'pilihs@store');
  Route::get('bayar', 'pilihs@show');
  Route::patch('pilih/{pilih}', 'pilihs@update');
  Route::delete('pilih/{pilih}', 'pilihs@destroy');
  
  Route::post('bayar', 'bayars@store');
  Route::get('transaksi', 'bayars@index');

  Route::get('tankyou',function(){
    $lapak = App\lapak::where('user_id', session('id'))->first();
    return view('page/store/tankyou', compact('lapak'));});
});
