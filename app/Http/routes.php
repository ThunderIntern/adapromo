<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@home');
Route::get('/promo/detail/{id}', 'HomeController@promo_detail');
Route::get('/promo', 'HomeController@promo');
Route::get('/aktivasi', 'HomeController@aktivasi');
Route::get('/signin', 'HomeController@signin');