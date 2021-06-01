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

Route::view('/','resources');
Route::view('/about', 'about');
Route::view('/prediction', 'prediction');
Route::view('/resources', 'resources');
Route::view('/resources/helplines', 'helplines');


Route::group(['middleware'=>['OAuthMiddleware']], function(){
	Route::view('/internal', 'internal.internal');
	Route::view('/internal/notices', 'internal.notices');
	Route::view('/internal/reporting', 'internal.reporting');
});

Route::view('/oauth/link', 'link');
Route::get('/oauth/redirect', 'OAuthController@redirect');
Route::get('/oauth/logout', 'OAuthController@logout');
