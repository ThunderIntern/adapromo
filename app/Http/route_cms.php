<?php


Route::group(['namespace' => 'Cms\\', 'prefix' => 'cms'], function(){
	Route::get('/',	['uses' => 'DashboardController@home', 'as' => 'cms.home']);

	Route::resource('/promo/promo', 'PromoController', ['names' => [
			'index' 	=> 'cms.promo.promo.index',
			'create'	=> 'cms.promo.promo.create', 
			'store' 	=> 'cms.promo.promo.store', 
			'show' 		=> 'cms.promo.promo.show', 
			'edit' 		=> 'cms.promo.promo.edit', 
			'update' 	=> 'cms.promo.promo.update', 
			'destroy' 	=> 'cms.promo.promo.destroy'
	]]);

	Route::resource('/website/faq', 'FaqController', ['names' => [
			'index' 	=> 'cms.website.faq.index',
			'create'	=> 'cms.website.faq.create', 
			'store' 	=> 'cms.website.faq.store', 
			'show' 		=> 'cms.website.faq.show', 
			'edit' 		=> 'cms.website.faq.edit', 
			'update' 	=> 'cms.website.faq.update', 
			'destroy' 	=> 'cms.website.faq.destroy'
	]]);

	Route::resource('/website/info', 'InfoController', ['names' => [
			'index' 	=> 'cms.website.info.index',
			'create'	=> 'cms.website.info.create', 
			'store' 	=> 'cms.website.info.store', 
			'show' 		=> 'cms.website.info.show', 
			'edit' 		=> 'cms.website.info.edit', 
			'update' 	=> 'cms.website.info.update', 
			'destroy' 	=> 'cms.website.info.destroy'
	]]);
});