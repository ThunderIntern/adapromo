<?php


Route::group(['namespace' => 'Cms\\', 'prefix' => 'cms'], function(){
	Route::get('/',			['uses' => 'DashboardController@home',	'as' => 'cms.home']);
});