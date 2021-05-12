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
});

//test route
Route::get('/test', function () {
    $contents = asset('storage/text.txt');

    return $contents;
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

Route::get('/internal', function () {
    if (strpos(Request::ip(), "10.") === 0) {
        return view('internal.internal');
    }
    return redirect('/');
});

Route::get('/internal/notices', function () {
    if (strpos(Request::ip(), "10.") === 0) {
        return view('internal.notices');
    }
    return redirect('/');
});

Route::get('/internal/reporting', function () {
    if (strpos(Request::ip(), "10.") === 0) {
        return view('internal.reporting');
    }
    return redirect('/');
});

//Route::get('/legacy', function () {
//    return view('legacy');
//});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');