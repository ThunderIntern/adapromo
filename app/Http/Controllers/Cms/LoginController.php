<?php

namespace app\Http\Controllers\Cms;

use app\Http\Controllers\BaseController;
use Request, Redirect, Input;
use app\Models\Users;



class LoginController extends BaseController 
{
	/**
	 * [home description]
	 * @return [type] [description]
	 */
	
	// init
	protected $view_root	= 'cms.pages';
	protected $page_title	= 'Login';
	protected $breadcrumb 	= [];

	function home()
	{
		$this->page_attributes->page_title = $this->page_title;

		$view_source 	= $this->view_root . '.login.login';
		$route_source 	= Request::route()->getName();

		return $this->generateView($view_source, $route_source);
	}
	function process(){
		$input 			= Input::all();

		$login_search 	= Users::where('email', $input['username'])
							->where('password', hash('md5', $input['password']))
							->where('role', 'admin')
							->count();
		if($login_search > 0){
			session(['admin' => 'true', 'username-admin' => $input['username']]);
			return Redirect::to(route('cms.home'));
		}
		else{
			return Redirect::to(route('cms.login'))->with('message-danger', "Login gagal, pastikan username dan password anda benar.");
		}
	}
	function logout(){
		session()->pull('admin', 'default');
		session()->pull('username-admin', 'default');
		return Redirect::to(route('cms.login'))->with('message-success', "Anda sudah logout.");
	}
}