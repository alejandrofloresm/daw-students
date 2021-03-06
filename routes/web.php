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

Route::get('/', function () {
    return view('welcome');
})->name('homepage');

// Responde a la petición http://students.test/students
Route::get('/students', 'StudentsController@index')->name('students.index');
Route::get('/students/create', 'StudentsController@create')->name('students.create');
Route::post('/students', 'StudentsController@store')->name('students.store');

