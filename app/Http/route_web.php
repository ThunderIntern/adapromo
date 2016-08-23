<?php
Route::group(['namespace' => 'Web\\'], function(){
	// menu public
	//webinfo
	Route::get('/', 								['uses' => 'HomeController@home', 								'as' => 'home']);
	Route::get('about-us', 							['uses' => 'HomeController@about_us', 							'as' => 'aboutUs']);

	// promo
	Route::get('promo', 							['uses' => 'PromoController@promo', 							'as' => 'promo']);
	Route::get('promo/category/{category}', 		['uses' => 'PromoController@promo', 							'as' => 'promo.category']);
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
	Route::get('forgot_password', 					['uses' => 'AuthController@forgot_password',					'as' => 'forgot_password']);
	Route::post('forgot_password', 					['uses' => 'AuthController@email_forgot_password',				'as' => 'forgot_password']);
	Route::get('change_forgot_password/{id}', 		['uses' => 'AuthController@change_forgot_password',				'as' => 'change_forgot_password']);
	Route::post('change_forgot_password', 			['uses' => 'AuthController@change_forgot_password',				'as' => 'change_forgot_password']);

	//webinfo
	Route::get('/about-us', 						['uses' => 'WebController@about_us', 							'as' => 'aboutUs']);
	Route::get('/contact-us', 						['uses' => 'WebController@contact_us', 							'as' => 'contactUs']);
	Route::get('/faq', 								['uses' => 'WebController@faq', 								'as' => 'faq']);
	Route::get('/term-and-condition', 				['uses' => 'WebController@term_and_condition', 					'as' => 'termAndCondition']);

	//search
	Route::post('/search', 							['uses' => 'HomeController@search', 							'as' => 'search']);

	// menu private
	//promo
	Route::get('favorite/{id}', 					['uses' => 'PromoController@favorite', 							'as' => 'favorite']);
	Route::get('unfavorite/{id}', 					['uses' => 'PromoController@unfavorite', 						'as' => 'unfavorite']);

	//account
	Route::get('account', 							['uses' => 'UserController@account', 							'as' => 'account']);
	Route::post('account_setting', 					['uses' => 'UserController@account_setting', 					'as' => 'account_setting']);
	Route::post('change_password', 					['uses' => 'UserController@change_password', 					'as' => 'change_password']);
});