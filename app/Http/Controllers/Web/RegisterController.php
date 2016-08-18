<?php

namespace app\Http\Controllers\Web;

use app\Http\Controllers\BaseController;
use Request, Redirect, Input, Mail;
use app\Models\Users;



class RegisterController extends BaseController 
{
	/**
	 * [home description]
	 * @return [type] [description]
	 */
	
	// init
	protected $view_root	= 'web.pages';
	protected $page_title	= 'Register';
	protected $breadcrumb 	= [];

	function register()
	{
		$input 							= Input::all();
		$new_user						= new Users();
		$new_user->name 				= $input['name'];
		$new_user->email 				= $input['email'];
		$new_user->password 			= hash('md5', $input['password']);
		$new_user->dob 					= $input['dob'];
		$new_user->role 				= 'user';
		$activation_token				= hash('md5', date("YmdHms"));
		$new_user->activation_token 	= $activation_token;
		$new_user->save();

		Mail::send('web/email/email_activation', ['activation_token' => $activation_token, 'name' => Input::get('name')], function ($message){
	        $message->to(Input::get('email'))->subject('Email Activation Adapromo.id');
	    });

		return Redirect::to(route('registered'));
	}
	function registered()
	{
		$this->page_attributes->page_title 		= $this->page_title;

		$view_source 	= $this->view_root . '.registered';
		$route_source 	= Request::route()->getName();

		return $this->generateView($view_source, $route_source);
	}
	function activation($activation_token)
	{
		Users::where('activation_token', $activation_token)->update(['activation_token' => '']);
		return Redirect::to(route('activation_email'));
	}
	function activation_email()
	{
		$this->page_attributes->page_title 		= 'Email Activation Successfully';

		$view_source 	= $this->view_root . '.activation';
		$route_source 	= Request::route()->getName();

		return $this->generateView($view_source, $route_source);
	}
}