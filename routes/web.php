<?php

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
Auth::routes();
// Example Routes
Route::view('/', 'landing');

Route::middleware('auth')->group(function () {
  Route::match(['get', 'post'], '/dashboard', function(){return view('dashboard');});
});

Route::middleware(['auth', 'seller'])->group(function () {
  Route::view('/create-order', 'create_order');
  Route::resource('new_order','OrderController');
});

Route::middleware('auth')->group(function () {
  Route::get('/view-orders', 'OrderController@show');
  Route::get('/view-orders/{id}', 'OrderController@edit');
  Route::resource('new_order','OrderController');
});
