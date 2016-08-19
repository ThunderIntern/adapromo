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
		$datas                                  = Products::paginate(12);
        $this->page_datas->datas                = $datas;
		$this->page_attributes->page_title 		= $this->page_title;

		$view_source 	= $this->view_root . '.home';
		$route_source 	= Request::route()->getName();

		return $this->generateView($view_source, $route_source);
	}
	function search()
	{
		$input 									= Input::all();
		if((is_null($input['location']) && is_null($input['category']) && is_null($input['date'])) || ($input['location'] == '' && $input['category'] == '' && $input['date'] == '')){
			$datas                              = Products::where('title', 'like', '%'.$input['name'].'%')->paginate(12);
			//dd($datas);
	        $this->page_datas->datas            = $datas;
    	}
		$this->page_attributes->page_title 		= 'Search Result';

		$view_source 	= $this->view_root . '.promo';
		$route_source 	= Request::route()->getName();

		return $this->generateView($view_source, $route_source);
	}
}