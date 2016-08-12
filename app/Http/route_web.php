<?php

Route::get('/', ['uses' => 'Web\\HomeController@home', 'as' => 'home']);
Route::get('/promo/detail/{id}', ['uses' => 'HomeController@promo_detail', 'as' => 'promo.detail']);
Route::get('/promo', ['uses' => 'HomeController@promo', 'as' => 'promo']);
Route::get('/aktivasi', ['uses' => 'HomeController@aktivasi', 'as' => 'aktivasi']);
Route::get('/login', ['uses' => 'Web\\AuthController@index', 'as' => 'login']);
Route::post('/login/process', ['uses' => 'Web\\AuthController@login', 'as' => 'login.procces']);
Route::get('/logout', ['uses' => 'Web\\AuthController@logout', 'as' => 'logout']);
Route::get('/aboutUs', ['uses' => 'HomeController@about_us', 'as' => 'aboutUs']);