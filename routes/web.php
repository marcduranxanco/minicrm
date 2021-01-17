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

Auth::routes([
    'register' => false // Dissable Registration Route
  ]);

Route::get('/', function () {
    return view('home');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', 'Auth\LoginController@logout');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('companies','CompanyController');
    Route::resource('employees','EmployeeController');
});
