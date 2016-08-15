<?php

namespace app\Http\Controllers\Web;

use app\Http\Controllers\BaseController;
use app\Models\Products;
use app\Models\Users;
use app\Models\Favorite;
use Request, Input, URL, Redirect;


class HomeController extends BaseController 
{
	/**
	 * [home description]
	 * @return [type] [description]
	 */
	
	// init
	protected $view_root	= 'web.pages';
	protected $page_title	= 'Home';
	protected $breadcrumb 	= [];

	function home()
	{
		$datas                                  = Products::paginate(6);
        $this->page_datas->datas                = $datas;
		$this->page_attributes->page_title 		= $this->page_title;

		$view_source 	= $this->view_root . '.home';
		$route_source 	= Request::route()->getName();

		return $this->generateView($view_source, $route_source);
	}
	function promo()
	{
		$datas                                  = Products::paginate(12);
        $this->page_datas->datas                = $datas;
		$this->page_attributes->page_title 		= 'Promo';

		$view_source 	= $this->view_root . '.promo';
		$route_source 	= Request::route()->getName();

		return $this->generateView($view_source, $route_source);
	}
	function promo_detail($id)
	{
		//detail promo
		$datas                                  = Products::find($id);
        $this->page_datas->datas                = $datas;
        //related promo
        $related                                = Products::paginate(3);
        $this->page_datas->related              = $related;
		$this->page_attributes->page_title 		= $datas['title'];

		//cek favorite
		$this->page_datas->favorite         	= false;
		if(!is_null(session('username'))){
			$user_data 							= Users::where('email', session('username'))->get()['0']['attributes'];
			$favorite							= Favorite::where('product_id', $id)->where('user_id', $user_data['_id'])									->count();
			if($favorite>0){ $this->page_datas->favorite     = true; } 
			else { $this->page_datas->favorite     = false;	}
		}

		$view_source 	= $this->view_root . '.promo_detail';
		$route_source 	= Request::route()->getName();

		return $this->generateView($view_source, $route_source);
	}
	function favorite($id)
	{
		if(is_null(session('user'))){
			return Redirect::to('/login')->with('message-danger', 'Anda harus login terlebih dahulu untuk menandai promo sebagai favorite.');
		}else{
			$user_data 				= Users::where('email', session('username'))->get()['0']['attributes'];
			$promo 					= Products::find($id);
			$favorite 				= new Favorite();
			$favorite->product_id	= $id;
			$favorite->user_id		= $user_data['_id'];
			$favorite->tags 		= $promo['tags'];
			$favorite->save();
			return Redirect::to('/promo/detail/'.$id);
		}
	}
	function unfavorite($id)
	{
		$user_data 				= Users::where('email', session('username'))->get()['0']['attributes'];
		Favorite::where('product_id', $id)->where('user_id', $user_data['_id'])->delete();
		return Redirect::to('/promo/detail/'.$id);
	}
}