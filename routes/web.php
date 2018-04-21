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
});

Auth::routes();

//Home Route
Route::get('/home', 'HomeController@index')->name('home');

//Profile Route
Route::get('/profile', function(){
  return view('pages/profile');
});

// Course Route
Route::get('/course', function(){
  return view('pages/course');
});
