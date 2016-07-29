<?php

namespace app\Http\Controllers\Web;

use app\Http\Controllers\BaseController;
use Request;



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
		$this->page_attributes->page_title 		= $this->page_title;

		$view_source 	= $this->view_root . '.home';
		$route_source 	= Request::route()->getName();

		return $this->generateView($view_source, $route_source);
	}
}