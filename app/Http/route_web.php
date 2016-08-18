<?php

Route::group(['namespace' => 'Web\\'], function(){
	// menu public
	Route::get('/', 								['uses' => 'HomeController@home', 								'as' => 'home']);

	// promo
	Route::get('promo', 							['uses' => 'PromoController@promo', 							'as' => 'promo']);
	Route::get('promo/detail/{id}', 				['uses' => 'PromoController@promo_detail', 						'as' => 'promo.detail']);
	
	//subscribe
	Route::post('subscribe', 						['uses' => 'SubscribeController@subscribe', 					'as' => 'subscribe']);
	Route::get('subscribe', 						['uses' => 'SubscribeController@subscribe_success', 			'as' => 'subscribe']);
	Route::get('unsubscribe', 						['uses' => 'SubscribeController@unsubscribe_newsletter', 		'as' => 'unsubscribe_newsletter']);
	Route::get('unsubscribe/{code_unsubscribe}', 	['uses' => 'SubscribeController@unsubscribe', 					'as' => 'unsubscribe']);

	//registrasi
	Route::get('registered', 						['uses' => 'RegisterController@registered', 					'as' => 'registered']);
	Route::post('register', 						['uses' => 'RegisterController@register', 						'as' => 'register']);
	Route::get('activation', 						['uses' => 'RegisterController@activation_email', 				'as' => 'activation_email']);
	Route::get('activation/{activation_token}', 	['uses' => 'RegisterController@activation', 					'as' => 'activation']);

	//authentication
	Route::get('login', 							['uses' => 'AuthController@index', 								'as' => 'login']);
	Route::post('login/process', 					['uses' => 'AuthController@login', 								'as' => 'login.procces']);
	Route::get('logout', 							['uses' => 'AuthController@logout', 							'as' => 'logout']);

	//webinfo
	Route::get('about-us', 							['uses' => 'HomeController@about_us', 							'as' => 'aboutUs']);

	// menu private
	//promo
	Route::get('favorite/{id}', 					['uses' => 'Web\\PromoController@favorite', 					'as' => 'favorite']);
	Route::get('unfavorite/{id}', 					['uses' => 'Web\\PromoController@unfavorite', 					'as' => 'unfavorite']);
});
