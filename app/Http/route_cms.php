<?php
Route::group(['namespace' => 'Cms\\', 'prefix' => 'cms'], function(){
	Route::get('/',						['uses' => 'DashboardController@home', 				'as' => 'cms.home']);
	//profile
	Route::get('account',				['uses' => 'AccountController@account',				'as' => 'cms.account']);
	Route::post('account',				['uses' => 'AccountController@account_save', 		'as' => 'cms.account.save']);
	Route::get('change-password',		['uses' => 'AccountController@password',			'as' => 'cms.password']);
	Route::post('change-password',		['uses' => 'AccountController@password_save', 		'as' => 'cms.password.save']);

	Route::get('login',					['uses' => 'LoginController@home', 					'as' => 'cms.login']);
	Route::post('login',				['uses' => 'LoginController@process', 				'as' => 'cms.login.process']);
	Route::get('logout',				['uses' => 'LoginController@logout', 				'as' => 'cms.logout']);

	//promo
	Route::resource('promo/promo', 'PromoController', ['names' => [
			'index' 	=> 'cms.promo.promo.index',
			'create'	=> 'cms.promo.promo.create', 
			'store' 	=> 'cms.promo.promo.store', 
			'show' 		=> 'cms.promo.promo.show', 
			'edit' 		=> 'cms.promo.promo.edit', 
			'update' 	=> 'cms.promo.promo.update', 
			'destroy' 	=> 'cms.promo.promo.destroy'
	]]);

	//registered promo
	Route::get('promo/registered',					['uses' => 'RegisteredPromoController@index', 		'as' => 'cms.promo.registered.index']);
	Route::get('promo/aktivasi/{id}',				['uses' => 'RegisteredPromoController@aktivasi', 	'as' => 'cms.promo.registered.aktivasi']);
	Route::delete('promo/registered/delete/{id}',	['uses' => 'RegisteredPromoController@destroy', 	'as' => 'cms.promo.registered.destroy']);

	//request premium promo
	Route::get('promo/request_premium',				['uses' => 'RequestPremiumPromoController@index', 	'as' => 'cms.promo.request_premium.index']);
	Route::get('promo/request_premium/accept/{id}',	['uses' => 'RequestPremiumPromoController@accept',	'as' => 'cms.promo.request_premium.accept']);
	Route::get('promo/request_premium/remove/{id}',	['uses' => 'RequestPremiumPromoController@remove',	'as' => 'cms.promo.request_premium.remove']);

	//premium promo
	Route::get('promo/premium',						['uses' => 'PremiumPromoController@index', 			'as' => 'cms.promo.premium.index']);

	//search promo
	Route::post('promo/promo/search',				['uses' => 'PromoController@search',				'as' => 'cms.promo.promo.search']);
	Route::post('promo/registered/search',			['uses' => 'RegisteredPromoController@search',		'as' => 'cms.promo.registered.search']);
	Route::post('promo/request_premium/search',		['uses' => 'RequestPremiumPromoController@search',	'as' => 'cms.promo.request_premium.search']);
	Route::post('promo/premium/search',				['uses' => 'PremiumPromoController@search',			'as' => 'cms.promo.premium.search']);

	//faq
	Route::resource('website/faq', 'FaqController', ['names' => [
			'index' 	=> 'cms.website.faq.index',
			'create'	=> 'cms.website.faq.create', 
			'store' 	=> 'cms.website.faq.store', 
			'show' 		=> 'cms.website.faq.show', 
			'edit' 		=> 'cms.website.faq.edit', 
			'update' 	=> 'cms.website.faq.update', 
			'destroy' 	=> 'cms.website.faq.destroy'
	]]);

	//search faq
	Route::post('website/faq/search',				['uses' => 'FaqController@search',					'as' => 'cms.website.faq.search']);

	//web info
	Route::resource('website/info', 'InfoController', ['names' => [
			'index' 	=> 'cms.website.info.index',
			'create'	=> 'cms.website.info.create', 
			'store' 	=> 'cms.website.info.store', 
			'show' 		=> 'cms.website.info.show', 
			'edit' 		=> 'cms.website.info.edit', 
			'update' 	=> 'cms.website.info.update', 
			'destroy' 	=> 'cms.website.info.destroy'
	]]);

	//users
	Route::resource('users', 'UsersController', ['names' => [
			'index' 	=> 'cms.users.index',
			'create'	=> 'cms.users.create', 
			'store' 	=> 'cms.users.store', 
			'show' 		=> 'cms.users.show', 
			'edit' 		=> 'cms.users.edit', 
			'update' 	=> 'cms.users.update', 
			'destroy' 	=> 'cms.users.destroy'
	]]);

	//search users
	Route::post('users/search',						['uses' => 'UsersController@search',				'as' => 'cms.users.search']);

	//tags
	Route::resource('tags', 'TagsController', ['names' => [
			'index' 	=> 'cms.tags.index',
			'create'	=> 'cms.tags.create', 
			'store' 	=> 'cms.tags.store', 
			'show' 		=> 'cms.tags.show', 
			'edit' 		=> 'cms.tags.edit', 
			'update' 	=> 'cms.tags.update', 
			'destroy' 	=> 'cms.tags.destroy'
	]]);

	//search tags
	Route::post('tags/search',						['uses' => 'TagsController@search',					'as' => 'cms.tags.search']);
});