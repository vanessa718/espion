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
    return view('/main_page');
});

// Auth::routes();

Route::get('/main_page', 'MissionController@mission_details');



//create in the terminal php artisan make:auth 
Route::get('/', function () {
    return view('/home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/home', 'TargetsController@view_target')->name('target');


