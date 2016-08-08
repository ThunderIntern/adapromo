<?php

Route::get('/', 	['uses' => 'Web\\HomeController@home',					'as' => 'home']);
Route::get('/promo/detail/{id}', 'HomeController@promo_detail');
Route::get('/promo', 'HomeController@promo');
Route::get('/aktivasi', 'HomeController@aktivasi');
Route::get('/signin', 'HomeController@signin');
Route::get('/aboutUs', 'HomeController@about_us');