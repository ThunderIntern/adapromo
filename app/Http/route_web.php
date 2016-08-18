<?php
//promo
Route::get('/', ['uses' => 'Web\\HomeController@home', 'as' => 'home']);
Route::get('/promo', ['uses' => 'Web\\PromoController@promo', 'as' => 'promo']);
Route::get('/promo/detail/{id}', ['uses' => 'Web\\PromoController@promo_detail', 'as' => 'promo.detail']);
Route::get('/favorite/{id}', ['uses' => 'Web\\PromoController@favorite', 'as' => 'favorite']);
Route::get('/unfavorite/{id}', ['uses' => 'Web\\PromoController@unfavorite', 'as' => 'unfavorite']);

//registrasi
Route::post('/register', ['uses' => 'Web\\RegisterController@register', 'as' => 'register']);
Route::get('/registered', ['uses' => 'Web\\RegisterController@registered', 'as' => 'registered']);
Route::get('/activation/', ['uses' => 'Web\\RegisterController@activation_email', 'as' => 'activation_email']);
Route::get('/activation/{activation_token}', ['uses' => 'Web\\RegisterController@activation', 'as' => 'activation']);

//authentication
Route::get('/login', ['uses' => 'Web\\AuthController@index', 'as' => 'login']);
Route::post('/login/process', ['uses' => 'Web\\AuthController@login', 'as' => 'login.procces']);
Route::get('/logout', ['uses' => 'Web\\AuthController@logout', 'as' => 'logout']);

//subscribe
Route::post('/subscribe', ['uses' => 'Web\\SubscribeController@subscribe', 'as' => 'subscribe']);
Route::get('/subscribe', ['uses' => 'Web\\SubscribeController@subscribe_success', 'as' => 'subscribe']);
Route::get('/unsubscribe/', ['uses' => 'Web\\SubscribeController@unsubscribe_newsletter', 'as' => 'unsubscribe_newsletter']);
Route::get('/unsubscribe/{code_unsubscribe}', ['uses' => 'Web\\SubscribeController@unsubscribe', 'as' => 'unsubscribe']);

//webinfo
Route::get('/aboutUs', ['uses' => 'HomeController@about_us', 'as' => 'aboutUs']);