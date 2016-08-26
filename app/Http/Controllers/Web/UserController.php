<?php

namespace app\Http\Controllers\Web;

use app\Http\Controllers\BaseController;
use Request, Redirect, Input, Mail;
use app\Models\Users;
use app\Models\Tags;
use app\Models\Favorite;
use app\Models\Products;

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
		//redirect bila blm login
		if(is_null(session('user'))){
			return Redirect::to(route('login'))->with('message-danger', 'Silahkan login terlebih dahulu.');
		}

		//favorites
		$detailAccount							= Users::where('email', session('username'))->get()['0']['attributes'];
		$this->page_attributes->detail  		= $detailAccount;
		$data_favorite							= Favorite::where('user_id', $detailAccount['_id'])->get();
		$favorites 								= [];
		foreach($data_favorite as $key => $f){
			$promo			= Products::find($f->product_id);
			$favorites		= array_prepend($favorites, $promo);
		}
		$this->page_attributes->favorites  		= $favorites;

		//my promo
		$my_promo								= Products::where('users', session('username'))->get();
		$this->page_attributes->my_promo  		= $my_promo;		
		
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