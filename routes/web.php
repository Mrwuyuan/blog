<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| WeiBo Routes
|--------------------------------------------------------------------------
|
|
*/

Route::get('/','StaticPagesController@home');
Route::get('/help','StaticPagesController@help');
Route::get('/about','StaticPagesController@about');




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

//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('/demoView', function () {
//    return view('demo');
//});
//
//Route::get('/user','UserController@index');
//
//
//Route::get('/demo','Demo@index');
//
//
//Route::redirect('/redirect', '/demo');
//Route::prefix('prefix')->group(function () {
//    Route::redirect('/redirect', '/demo');
//});

