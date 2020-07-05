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
  Auth::guard('clients')->logout();
  return 'index';
})->name('my.index');
Route::group([
    'prefix' => '/admin',
    'as' => 'admin.',
    'middleware' => 'auth'
], function(){
    Route::get('/', 'DashboardController')->name('dashboard');
    Route::resource('/categories', 'CategoryController');
    Route::resource('/products', 'ProductController');
});
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/clients/signup', 'Auth\RegisterController@clientRegisterForm')->name('client-register-form');

Route::post('/clients/signup', 'Auth\RegisterController@clientRegister')->name('client-register');

Route::get('/clients/login', 'Auth\LoginController@clientLoginForm')->name('client-login');

Route::post('/clients/login', 'Auth\LoginController@clientLogin')->name('client-login');

Route::get('/clients/logout', 'Auth\LoginController@clientLogout')->name('client-logout');


