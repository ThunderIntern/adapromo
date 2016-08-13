<?php

Route::get('/', ['uses' => 'Web\\HomeController@home', 'as' => 'home']);
Route::get('/promo/detail/{id}', ['uses' => 'HomeController@promo_detail', 'as' => 'promo.detail']);
Route::get('/promo', ['uses' => 'HomeController@promo', 'as' => 'promo']);
Route::get('/aktivasi', ['uses' => 'HomeController@aktivasi', 'as' => 'aktivasi']);
Route::get('/login', ['uses' => 'Web\\AuthController@index', 'as' => 'login']);
Route::post('/login/process', ['uses' => 'Web\\AuthController@login', 'as' => 'login.procces']);
Route::get('/logout', ['uses' => 'Web\\AuthController@logout', 'as' => 'logout']);
Route::get('/aboutUs', ['uses' => 'HomeController@about_us', 'as' => 'aboutUs']);
Route::get('/sendemail', function () {

    $data = array(
        'name' => "Learning Laravel",
    );
    Mail::send('web/pages/email', $data, function ($message) {
        $message->to('beckzaveiro@gmail.com')->subject('Learning Laravel test email');
    });
    return "Your email has been sent successfully";

});