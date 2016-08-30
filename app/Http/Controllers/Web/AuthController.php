<?php

namespace app\Http\Controllers\Web;

use app\Http\Controllers\BaseController;
use Request, Redirect, Input, Mail;
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
		session()->pull('user', 'default');
		session()->pull('username', 'default');
		return Redirect::to(route('home'));
	}
	function forgot_password()
	{
		$this->page_attributes->page_title 		= 'Lupa Password';

		$view_source 	= $this->view_root . '.forgot_password';
		$route_source 	= Request::route()->getName();

		return $this->generateView($view_source, $route_source);
	}
	function email_forgot_password(){
		$user 		= Users::where('email', Input::get('email'))->first();
		if(is_null($user['_id'])){
			return Redirect::to(route('forgot_password'))->with('message-danger', "Email anda belum terdaftar.");
		}else{
			Mail::send('web/email/email_forgot_password', ['id' => $user['_id']], function ($message){
		        $message->to(Input::get('email'))->subject('Forgot Password Adapromo.id');
		    });
		    return Redirect::to(route('forgot_password'))->with('message-success', "Permintaan pemulihan password telah dikirim ke email anda. Silahkan cek email anda.");
		}
	}
	function change_forgot_password($id = null){
		if(is_null(Input::get('id'))){
			$this->page_attributes->page_title 		= 'Pemulihan Password';
			$this->page_attributes->datas 			= Users::find($id);

			$view_source 	= $this->view_root . '.change_forgot_password';
			$route_source 	= Request::route()->getName();

			return $this->generateView($view_source, $route_source);
		}else{
			$user							= Users::find(Input::get('id'));
			$user->password 				= hash('md5', Input::get('password'));
			$user->save();
			return Redirect::to(route('login'))->with('message-success', "Password berhasil dirubah, silahkan login kembali untuk mengakses akun anda.");
		}
	}
}