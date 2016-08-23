<?php

namespace app\Http\Controllers\Web;

use app\Http\Controllers\BaseController;
use app\Models\Products;
use app\Models\Users;
use app\Models\Favorite;
use app\Models\Tags;
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
        $tags                                   = Tags::all();
        $this->page_datas->tags                 = $tags;
		$this->page_attributes->page_title 		= $this->page_title;

		$view_source 	= $this->view_root . '.home';
		$route_source 	= Request::route()->getName();

		return $this->generateView($view_source, $route_source);
	}
	function search()
	{
		$input 							= Input::all();
		//cek tanggal sesuai / tidak
		if(strpos($input['date'], '_')) $date = false;
		else $date = true;


		if($input['name']=="" && ($date==false)){
			if($input['sort']=='Terbaru'){
				$datas                      = Products::where('tags', $input['category'])
												->orderBy('published_at', 'desc')
												->paginate(12);
	        	$this->page_datas->datas    = $datas;
	        }else{
	        	$datas                      = Products::where('tags', $input['category'])
	        									->orderBy('extra_fields.favorites', 'desc')
	        									->paginate(12);
	        	$this->page_datas->datas    = $datas;
	        }
		}else if($input['name']=="" && ($date==true)){
			if($input['sort']=='Terbaru'){
				$datas                      = Products::where('tags', $input['category'])
												->where('extra_fields.start_date', '<=', $input['date'])
												->where('extra_fields.end_date', '>=', $input['date'])
												->orderBy('published_at', 'desc')
												->paginate(12);
	        	$this->page_datas->datas    = $datas;
	        }else{
	        	$datas                      = Products::where('tags', $input['category'])
	        									->where('extra_fields.start_date', '<=', $input['date'])
												->where('extra_fields.end_date', '>=', $input['date'])
	        									->orderBy('extra_fields.favorites', 'desc')
	        									->paginate(12);
	        	$this->page_datas->datas    = $datas;
	        }
		}else if($input['name']!="" && ($date==false)){
			if($input['sort']=='Terbaru'){
				$datas                      = Products::where('tags', $input['category'])
												->where('title', 'like', '%'.$input['name'].'%')
												->orderBy('published_at', 'desc')
												->paginate(12);
	        	$this->page_datas->datas    = $datas;
	        }else{
	        	$datas                      = Products::where('tags', $input['category'])
	        									->where('title', 'like', '%'.$input['name'].'%')
	        									->orderBy('extra_fields.favorites', 'desc')
	        									->paginate(12);
	        	$this->page_datas->datas    = $datas;
	        }
		}else{
			if($input['sort']=='Terbaru'){
				$datas                      = Products::where('tags', $input['category'])
												->where('extra_fields.start_date', '<=', $input['date'])
												->where('extra_fields.end_date', '>=', $input['date'])
												->where('title', 'like', '%'.$input['name'].'%')
												->orderBy('published_at', 'desc')
												->paginate(12);
	        	$this->page_datas->datas    = $datas;
	        }else{
	        	$datas                      = Products::where('tags', $input['category'])
	        									->where('extra_fields.start_date', '<=', $input['date'])
												->where('extra_fields.end_date', '>=', $input['date'])
												->where('title', 'like', '%'.$input['name'].'%')
	        									->orderBy('extra_fields.favorites', 'desc')
	        									->paginate(12);
	        	$this->page_datas->datas    = $datas;
	        }
		}

		$tags                                   = Tags::all();
        $this->page_datas->tags                 = $tags;
		$this->page_attributes->page_title 		= 'Search Result';

		$view_source 	= $this->view_root . '.promo';
		$route_source 	= Request::route()->getName();

		return $this->generateView($view_source, $route_source);
	}
}