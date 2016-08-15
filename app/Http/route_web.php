<?php

Route::get('/', ['uses' => 'Web\\HomeController@home', 'as' => 'home']);
Route::get('/promo', ['uses' => 'Web\\HomeController@promo', 'as' => 'promo']);
Route::get('/promo/detail/{id}', ['uses' => 'Web\\HomeController@promo_detail', 'as' => 'promo.detail']);
Route::get('/favorite/{id}', ['uses' => 'Web\\HomeController@favorite', 'as' => 'favorite']);
Route::get('/unfavorite/{id}', ['uses' => 'Web\\HomeController@unfavorite', 'as' => 'unfavorite']);

Route::get('/aktivasi', ['uses' => 'HomeController@aktivasi', 'as' => 'aktivasi']);
Route::get('/login', ['uses' => 'Web\\AuthController@index', 'as' => 'login']);
Route::post('/login/process', ['uses' => 'Web\\AuthController@login', 'as' => 'login.procces']);
Route::get('/logout', ['uses' => 'Web\\AuthController@logout', 'as' => 'logout']);
Route::get('/aboutUs', ['uses' => 'HomeController@about_us', 'as' => 'aboutUs']);
Route::post('/subscribe', ['uses' => 'Web\\SubscribeController@subscribe', 'as' => 'subscribe']);
Route::get('/subscribe', ['uses' => 'Web\\SubscribeController@subscribe_success', 'as' => 'subscribe']);
Route::get('/unsubscribe/', ['uses' => 'Web\\SubscribeController@unsubscribe_newsletter', 'as' => 'unsubscribe_newsletter']);
Route::get('/unsubscribe/{code_unsubscribe}', ['uses' => 'Web\\SubscribeController@unsubscribe', 'as' => 'unsubscribe']);
