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
    return view('resources');
    //return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/prediction', function () {
    return view('prediction');
});

Route::get('/resources', function () {
    return view('resources');
});

Route::get('/resources/helplines', function () {
    return view('helplines');
});

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/legacy', function () {
    return view('legacy');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
