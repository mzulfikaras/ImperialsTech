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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','User\UserController@home')->name('user.home');
Route::get('/contact','User\UserController@getContact')->name('user.contact');
Route::post('/contact/send', 'User\UserController@createContact')->name('contact.store');

// Authentication Routes...
Route::get('/admin/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/admin/login', 'Auth\LoginController@login')->name('store.login');
Route::post('/admin/logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
// Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('register', 'Auth\RegisterController@register')->name('store.register');

Route::prefix('admin')->middleware('auth')->group( function(){
    Route::get('/dashboard','Admin\DashboardController@index')->name('dashboard.index');
    Route::get('/produk', 'Admin\ProdukController@index')->name('produk.index');
    Route::get('/produk/create','Admin\ProdukController@create')->name('produk.create');
    Route::post('/produk/store','Admin\ProdukController@store')->name('produk.store');
    Route::get('/produk/{produk}/edit','Admin\ProdukController@edit')->name('produk.edit');
    Route::put('/produk/{produk}','Admin\ProdukController@update')->name('produk.update');
    Route::delete('/produk/{produk}','Admin\ProdukController@destroy')->name('produk.destroy');
    Route::get('/contact','Admin\ContactController@index')->name('contact.index');
    Route::delete('/contact/{contact}','Admin\ContactController@destroy')->name('contact.destroy');
    Route::get('/client','Admin\ClientController@index')->name('client.index');
    Route::get('/client/create','Admin\ClientController@create')->name('client.create');
    Route::post('/client/store','Admin\ClientController@store')->name('client.store');
    Route::get('/client/{client}/edit','Admin\ClientController@edit')->name('client.edit');
    Route::put('/client/{client}','Admin\ClientController@update')->name('client.update');
    Route::delete('/client/{client}','Admin\ClientController@destroy')->name('client.destroy');
    Route::get('/report','Admin\ReportController@index')->name('report.index');
    Route::get('/report/create', 'Admin\ReportController@create')->name('report.create');
    Route::post('/report/store','Admin\ReportController@store')->name('report.store');
    Route::get('/report/{report}/edit','Admin\ReportController@edit')->name('report.edit');
    Route::put('/report/{report}','Admin\ReportController@update')->name('report.update');
    Route::delete('/report/{report}','Admin\ReportController@destroy')->name('report.destroy');
    Route::get('/{report}/report','Admin\ReportController@printReport')->name('report.print');
    Route::get('/testimoni','Admin\TestimoniController@index')->name('testi.index');
    Route::get('/testimoni/create','Admin\TestimoniController@create')->name('testi.create');
    Route::post('/testimoni/store','Admin\TestimoniController@store')->name('testi.store');
    Route::get('/testimoni/{testi}/edit','Admin\TestimoniController@edit')->name('testi.edit');
    Route::put('/testimoni/{testi}','Admin\TestimoniController@update')->name('testi.update');
    Route::delete('/testimoni/{testi}','Admin\TestimoniController@destroy')->name('testi.destroy');
});
