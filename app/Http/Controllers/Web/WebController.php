<?php

namespace app\Http\Controllers\Web;

use app\Http\Controllers\BaseController;
use app\Models\WebConfig;
use app\Models\Products;
use app\Models\Tags;
use Request, Input, URL, Redirect;


class WebController extends BaseController 
{
	/**
	 * [home description]
	 * @return [type] [description]
	 */
	
	// init
	protected $view_root	= 'web.pages';
	protected $page_title	= 'Web Info';
	protected $breadcrumb 	= [];

	function about_us()
	{
		$datas                                  = WebConfig::where('content.name', 'aboutus')->get()['0']['attributes'];
        $this->page_datas->datas                = $datas;
        $tags                                   = Tags::all();
        $this->page_datas->tags                 = $tags;
        $related                                = Products::paginate(3);
        $this->page_datas->related              = $related;

		$this->page_attributes->page_title 		= 'About Us';

		$view_source 	= $this->view_root . '.info';
		$route_source 	= Request::route()->getName();

		return $this->generateView($view_source, $route_source);
	}
	function contact_us()
	{
		$datas                                  = WebConfig::where('content.name', 'contactus')->get()['0']['attributes'];
        $this->page_datas->datas                = $datas;
        $tags                                   = Tags::all();
        $this->page_datas->tags                 = $tags;
        $related                                = Products::paginate(3);
        $this->page_datas->related              = $related;

		$this->page_attributes->page_title 		= 'Contact Us';

		$view_source 	= $this->view_root . '.info';
		$route_source 	= Request::route()->getName();

		return $this->generateView($view_source, $route_source);
	}
	function term_and_condition()
	{
		$datas                                  = WebConfig::where('content.name', 'termandcondition')->get()['0']['attributes'];
        $this->page_datas->datas                = $datas;
        $tags                                   = Tags::all();
        $this->page_datas->tags                 = $tags;
        $related                                = Products::paginate(3);
        $this->page_datas->related              = $related;

		$this->page_attributes->page_title 		= 'Term And Condition';

		$view_source 	= $this->view_root . '.info';
		$route_source 	= Request::route()->getName();

		return $this->generateView($view_source, $route_source);
	}
	function faq()
	{
		$datas                                  = WebConfig::where('type', 'faq')->get();
        $this->page_datas->datas                = $datas;
        $tags                                   = Tags::all();
        $this->page_datas->tags                 = $tags;
        $related                                = Products::paginate(3);
        $this->page_datas->related              = $related;

		$this->page_attributes->page_title 		= 'Frequently Ask Questions';

		$view_source 	= $this->view_root . '.faq';
		$route_source 	= Request::route()->getName();

		return $this->generateView($view_source, $route_source);
	}
}