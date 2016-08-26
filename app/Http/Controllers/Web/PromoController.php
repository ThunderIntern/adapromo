<?php

namespace app\Http\Controllers\Web;

use app\Http\Controllers\BaseController;
use app\Models\Products;
use app\Models\Users;
use app\Models\Favorite;
use app\Models\Tags;
use Input, URL, Redirect, Request;
use Illuminate\Http\Request as Request1;


class PromoController extends BaseController 
{
	/**
	 * [home description]
	 * @return [type] [description]
	 */
	
	// init
	protected $view_root	= 'web.pages';
	protected $page_title	= 'Promo';
	protected $breadcrumb 	= [];

	function promo($category=null)
	{
		if(is_null($category)){
			$datas                              = Products::where('status', 'aktif')->paginate(12);
	        $this->page_datas->datas            = $datas;
	        $this->page_attributes->page_title 	= 'Semua Promo';
    	}
    	else{
    		$datas                              = Products::where('tags', $category)
    												->where('status', 'aktif')
    												->paginate(12);
	        $this->page_datas->datas            = $datas;	
	        $this->page_attributes->page_title 	= $category;
    	}
        $tags                                   = Tags::all();
        $this->page_datas->tags                 = $tags;
		
		$view_source 	= $this->view_root . '.promo';
		$route_source 	= Request::route()->getName();

		return $this->generateView($view_source, $route_source);
	}
	function promo_detail($id)
	{
		//detail promo
		$datas                                  = Products::find($id);
        $this->page_datas->datas                = $datas;
        $tags                                   = Tags::all();
        $this->page_datas->tags                 = $tags;
        //related promo
        $related                                = Products::paginate(3);
        $this->page_datas->related              = $related;
		$this->page_attributes->page_title 		= $datas['title'];

		//cek favorite
		$this->page_datas->favorite         	= false;
		if(!is_null(session('username'))){
			$user_data 							= Users::where('email', session('username'))->get()['0']['attributes'];
			$favorite							= Favorite::where('product_id', $id)->where('user_id', $user_data['_id'])									->count();
			if($favorite>0){ $this->page_datas->favorite     = true; } 
			else { $this->page_datas->favorite     = false;	}
		}

		$view_source 	= $this->view_root . '.promo_detail';
		$route_source 	= Request::route()->getName();

		return $this->generateView($view_source, $route_source);
	}
	function favorite($id)
	{
		//add +1 favorite in product collection
		$promo 						= Products::find($id);
		$add_favorites				= $promo['extra_fields']['favorites']+1;
		Products::where('_id', $id)->update(['extra_fields.favorites' => $add_favorites]);

		if(is_null(session('user'))){
			return Redirect::to(route('login'))->with('message-danger', 'Anda harus login terlebih dahulu untuk menandai promo sebagai favorite.');
		}else{
			$user_data 				= Users::where('email', session('username'))->get()['0']['attributes'];
			$promo 					= Products::find($id);
			$favorite 				= new Favorite();
			$favorite->product_id	= $id;
			$favorite->user_id		= $user_data['_id'];
			$favorite->tags 		= $promo['tags'];
			$favorite->save();
			return Redirect::to(route('promo.detail', ['id' => $id]));
		}
	}
	function unfavorite($id)
	{
		$promo 						= Products::find($id);
		$add_favorites				= $promo['extra_fields']['favorites']-1;
		Products::where('_id', $id)->update(['extra_fields.favorites' => $add_favorites]);

		$user_data 				= Users::where('email', session('username'))->get()['0']['attributes'];
		Favorite::where('product_id', $id)->where('user_id', $user_data['_id'])->delete();
		return Redirect::to(route('promo.detail', ['id' => $id]));
	}
	function register_promo(){
		if(is_null(Input::get('title'))){
			$tags                                   = Tags::all();
	        $this->page_datas->tags                 = $tags;
			$related                                = Products::paginate(3);
			$this->page_datas->related              = $related;
			$this->page_attributes->page_title 		= 'Register New Promo';

			$view_source 	= $this->view_root . '.register_promo';
			$route_source 	= Request::route()->getName();

			return $this->generateView($view_source, $route_source);
		}else{
			//get input
	        $input                                  = Input::all();
	        //create or edit
	        $promo                                  = new Products();
	        //save data
	        if(is_null(Input::get('images2'))) $input['images2'] = "";
	        if(is_null(Input::get('images3'))) $input['images3'] = "";

	        $promo->title                           = $input['title'];
	        $promo->slug                            = $input['slug'];
	        $promo->description                     = $input['description'];
	        $promo->images                          = ['image1' => $input['images1'],
	                                                    'image2' => $input['images2'],
	                                                    'image3' => $input['images3']];
	        $promo->tags                            = $input['tags'];
	        $promo->type                            = $input['type'];
            $promo->extra_fields                	= ['start_date' => $input['start_date'], 
                                                  	'end_date' => $input['end_date'],
                                                  	'favorites' => 0];    
	        $promo->users                           = session('username');
	        $promo->status                          = 'pending';
	        $promo->kode_pembayaran                 = $input['kode'];
	        $promo->published_at                    = date('Y-m-d H:m:s');
	        
	        $promo->save();
	        $this->page_attributes->msg             = 'Data telah disimpan';
	        return Redirect::to(route('promo.register'))->with('message-success', "Promo anda berhasil disimpan. Silahkan lakukan pembayaran dan upload bukti transfer melalui menu 'My Promo'");
		}
	}
	function konfirmasi($id, Request1 $request)
	{
		if(is_null(Input::get('id'))){
			$datas                              	= Products::find($id);
	        $this->page_datas->datas            	= $datas;
	        $this->page_attributes->page_title 		= 'Konfirmasi Pembayaran';
	        $tags                                   = Tags::all();
	        $this->page_datas->tags                 = $tags;
	        $related                                = Products::paginate(3);
			$this->page_datas->related              = $related;
			
			$view_source 	= $this->view_root . '.konfirmasi_pembayaran';
			$route_source 	= Request::route()->getName();

			return $this->generateView($view_source, $route_source);
		}
		else{
			$input 			= Input::all();
			$product 		= Products::find($id);
			if($request->hasFile('file')){
	            $file           = $request->file('file');
	            $fileName       = $product->id;
	            $fileExt        = $file->getClientOriginalExtension();
	            $folderUpload   = base_path() . '/public/bukti_pembayaran/';
	            $request->file('file')->move($folderUpload, $fileName.'.'.$fileExt);
	            $product->bukti_pembayaran = $fileName.'.'.$fileExt;
	            $product->save();
	        }
	        return Redirect::to(route('account'))->with('message-success', 'Bukti Pembayaran berhasil diupload.');   
		}
	}
}