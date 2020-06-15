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

Route::get('/students', 'StudentsController@index')->name('students.index');
Route::get('/students/create', 'StudentsController@create')->name('students.create');
Route::get('/students/{student}', 'StudentsController@show')->name('students.show');
Route::post('/students/store', 'StudentsController@store')->name('students.store');
Route::delete('/students/{student}', 'StudentsController@destroy');
Route::get('/students/{student}/edit', 'StudentsController@edit'); 
Route::patch('/students/{student}', 'StudentsController@update'); 
Route::get('/search', 'StudentsController@search'); 



Route::resource('mahasiswa', 'MahasiswaController');
// Route::resource('students', 'StudentsControlController');