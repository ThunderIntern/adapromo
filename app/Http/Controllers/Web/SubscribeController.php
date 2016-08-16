<?php

namespace app\Http\Controllers\Web;

use app\Http\Controllers\BaseController;
use Request, Redirect, Input, Mail;
use app\Models\Subscribes;


class SubscribeController extends BaseController 
{
	/**
	 * [home description]
	 * @return [type] [description]
	 */
	
	// init
	protected $view_root	= 'web.pages';
	protected $page_title	= 'Subscribe';
	protected $breadcrumb 	= [];

	function subscribe() {
        $input                                  = Input::only('email');
        $subscribe                              = new Subscribes();
        $code_unsubscribe						= hash('md5', date("YmdHms"));
        //save data
        $subscribe->email 						= $input['email'];
        $subscribe->name 						= $input['email'];
        $subscribe->is_subscribe 				= true;
        $subscribe->code_unsubscribe 			= $code_unsubscribe;
        $subscribe->save();

	    Mail::send('web/email/email_subscribe', ['code_unsubscribe' => $code_unsubscribe], function ($message) {
	        $message->to(Input::get('email'))->subject('Berlangganan Adapromo.id');
	    });
	    return Redirect::to('/subscribe')->with('email', Input::get('email'));
	}

	function subscribe_success()
	{
		$this->page_attributes->page_title 		= $this->page_title;

		$view_source 	= $this->view_root . '.subscribe';
		$route_source 	= Request::route()->getName();

		return $this->generateView($view_source, $route_source);
	}

	function unsubscribe($code_unsubscribe) {
		//update db
        Subscribes::where('code_unsubscribe', $code_unsubscribe)->update(['is_subscribe' => false]);

        //kirim email unsubscribe
        $subscribe = Subscribes::where('code_unsubscribe', $code_unsubscribe)->get()['0']['attributes'];
        
        Mail::send('web/email/email_unsubscribe', ['email' => $subscribe['email']], function ($message) use ($subscribe){
	        $message->to($subscribe['email'])->subject('Berhenti Berlangganan Adapromo.id');
	    });

	    return Redirect::to('/unsubscribe');
	}
	function unsubscribe_newsletter(){
		$this->page_attributes->page_title 		= $this->page_title;

		$view_source 	= $this->view_root . '.unsubscribe';
		$route_source 	= Request::route()->getName();

		return $this->generateView($view_source, $route_source);
	}
}