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

Route::get('/', 'ProfController@index');
Route::resource('/profs', 'ProfController');
Route::post('/profs', 'ProfController@index')->name('profs.index');
Route::get('/admin', 'AdminsController@index')->name('admins.index');
Route::post('/add/prof', 'ProfController@store')->name('profs.store');
Route::get('/add/prof', 'ProfController@store')->name('profs.store');

