<?php

namespace app\Http\Controllers\Cms;

use app\Http\Controllers\BaseController;
use Request;



class DashboardController extends BaseController 
{
	/**
	 * [home description]
	 * @return [type] [description]
	 */
	
	// init
	protected $view_root	= 'cms.pages';
	protected $page_title	= 'Dashboard';
	protected $breadcrumb 	= [];

	function home()
	{
		$this->page_attributes->page_title = $this->page_title;

		$view_source 	= $this->view_root . '.dashboard.overview';
		$route_source 	= Request::route()->getName();

		return $this->generateView($view_source, $route_source);
	}
}