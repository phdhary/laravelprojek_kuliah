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

Route::get('/', 'PagesController@index')->name('index');
Route::get('/features', 'PagesController@features')->name('features');
Route::get('/pricing', 'PagesController@pricing')->name('pricing');

Route::resource('mahasiswa', 'MahasiswaController');
