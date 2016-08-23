<?php

namespace app\Http\Controllers\Web;

use app\Http\Controllers\BaseController;
use Request, Redirect, Input, Mail;
use app\Models\Users;
use app\Models\Tags;



class UserController extends BaseController 
{
	/**
	 * [home description]
	 * @return [type] [description]
	 */
	
	// init
	protected $view_root	= 'web.pages';
	protected $page_title	= 'Account';
	protected $breadcrumb 	= [];

	function account(){
		$detailAccount							= Users::where('email', session('username'))->get()['0']['attributes'];
		$this->page_attributes->detail  		= $detailAccount;
		$this->page_attributes->page_title 		= $this->page_title;
		$tags                                   = Tags::all();
        $this->page_datas->tags                 = $tags;

		$view_source 	= $this->view_root . '.account';
		$route_source 	= Request::route()->getName();

		return $this->generateView($view_source, $route_source);
	}
	function account_setting(){
		$input 				= Input::all();
		$user 				= Users::find($input['id']);
		$user->email 		= $input['email'];
		$user->name 		= $input['name'];
		$user->dob 		    = $input['dob'];
		$user->save();
		return Redirect::to(route('account'))->with('message-success', 'Perubahan Detail Akun berhasil disimpan.');
	}

	function change_password(){
		$input 				= Input::all();
		$user 				= Users::find($input['id']);
		if($user->password == hash('md5', $input['old'])){
			$user->password = hash('md5', $input['new']);
			$user->save();	
			return Redirect::to(route('account'))->with('message-success', 'Perubahan Password disimpan.');
		}
		else{
			return Redirect::to(route('account'))->with('message-danger', 'Perubahan Password gagal disimpan. Password lama tidak sesuai.');	
		}
	}
}