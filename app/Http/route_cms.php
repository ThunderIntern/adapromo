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
});