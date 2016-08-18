<?php

namespace app\Http\Controllers\Web;

use app\Http\Controllers\BaseController;
use Request, Redirect, Input;
use app\Models\Users;



class AuthController extends BaseController 
{
	/**
	 * [home description]
	 * @return [type] [description]
	 */
	
	// init
	protected $view_root	= 'web.pages';
	protected $page_title	= 'Login Page';
	protected $breadcrumb 	= [];

	function index()
	{
		$this->page_attributes->page_title 		= $this->page_title;

		$view_source 	= $this->view_root . '.sign_in_sign_up';
		$route_source 	= Request::route()->getName();

		return $this->generateView($view_source, $route_source);
	}
	function login(){
		$input 			= Input::all();

		$login_search 	= Users::where('email', $input['username'])
							->where('password', hash('md5', $input['password']))
							->where('role', 'user')
							->count();
		if($login_search > 0){
			$data_user = Users::where('email', $input['username'])
						->where('password', hash('md5', $input['password']))
						->where('role', 'user')
						->get()['0']['attributes'];
			if($data_user['activation_token'] != ""){
				return Redirect::to(route('login'))
					->with('message-danger', "Anda belum melakukan aktivasi email, silahkan melakukan aktivasi email terlebih dahulu.");
			}
			else{
				session(['user' => 'true', 'username' => $input['username']]);
				return Redirect::to(route('home'));
			}
		}
		else{
			return Redirect::to(route('login'))->with('message-danger', "Login gagal, pastikan username dan password anda benar.");
		}
	}
	function logout(){
		session()->flush();
		return Redirect::to(route('home'));
	}
}