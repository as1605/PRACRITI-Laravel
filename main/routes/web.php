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

Route::view('/about', 'about');
//Route::get('/about', function () {
//    return view('about');
//});
Route::view('/prediction', 'prediction');

//Route::get('/prediction', function () {
//    return view('prediction');
//});
Route::view('/resources', 'resources');
//Route::get('/resources', function () {
//    return view('resources');
//});
Route::view('/resources/helplines', 'helplines');
//Route::get('/resources/helplines', function () {
//    return view('helplines');
//});

//Route::get('/internal', function () {
//    if (strpos(Request::ip(), "10.") === 0) {
//        return view('internal.internal');
//    }
//    return redirect('/');
//});

//Route::get('/internal/notices', function () {
//    if (strpos(Request::ip(), "10.") === 0) {
//        return view('internal.notices');
//    }
//    return redirect('/');
//});

//Route::get('/internal/reporting', function () {
//    if (strpos(Request::ip(), "10.") === 0) {
//        return view('internal.reporting');
//    }
//    return redirect('/');
//});

//Route::get('/legacy', function () {
//    return view('legacy');
//});

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/test', function() {
//	return view('link');
//});

Route::group(['middleware'=>['OAuthMiddleware']], function(){
	Route::view('/internal', 'internal.internal');
	Route::view('/internal/notices', 'internal.notices');
	Route::view('/internal/reporting', 'internal.reporting');
 //   Route::get('/internal', function () {
 //           return view('internal.internal');
 //   });

 //   Route::get('/internal/notices', function () {
 //           return view('internal.notices');
 //   });

 //   Route::get('/internal/reporting', function () {
 //           return view('internal.reporting');
 //   });

});

Route::view('/oauth/link', 'link');

//Route::get('/oauth/auth', 'OAuthController@auth');

Route::get('/oauth/redirect', 'OAuthController@redirect');

Route::get('/oauth/logout', 'OAuthController@logout');
