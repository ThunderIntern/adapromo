<?php

namespace app\Http\Controllers\Cms;

use app\Http\Controllers\BaseController;
use app\Models\Products;
use app\Models\Tags;
use app\Models\Users;
use Request, Input, URL, Redirect;

class PromoController extends BaseController
{
    // init
    protected $view_root    = 'cms.pages';
    protected $page_title   = 'Promo';
    protected $breadcrumb   = [];

    public function index()
    {
        $datas                                  = Products::where('status', 'aktif')->paginate(10);
        $this->page_datas->datas                = $datas;
        $this->page_datas->id                   = null;
        //page attributes
        $this->page_attributes->page_title      = $this->page_title;
        //generate view
        $view_source                            = $this->view_root . '.promo.promo.index';
        $route_source                           = Request::route()->getName();        
        return $this->generateView($view_source , $route_source);
    }

    public function create($id = null)
    {
        //get data
        $datas                                  = null;
        
        if($id != null){
            $datas                              = Products::find($id);
        }
        //set data
        $this->page_datas->datas                = $datas;
        //page attributes
        if($id != null){ $this->page_attributes->page_title  = 'Edit '. $this->page_title; }
        else{ $this->page_attributes->page_title  = $this->page_title . ' Baru'; }

        $tags                                   = Tags::all();
        $this->page_datas->tags                 = $tags;
        $users                                  = Users::where('role', 'user')->get();
        $this->page_datas->users                = $users;
        $this->page_datas->id                   = $id;
        
        //generate view
        $view_source                            = $this->view_root . '.promo.promo.create';
        $route_source                           = Request::route()->getName();        
        return $this->generateView($view_source , $route_source);
    }

    public function store($id = null)
    {
        //get input
        $input                                  = Input::all();
        //create or edit
        $promo                                  = Products::findOrNew($id);

        //hitung biaya
        $start = explode('/', $input['start_date']);
        $end   = explode('/', $input['end_date']);
        $awal  = $start[2].'-'.$start[0].'-'.$start[1];
        $akhir = $end[2].'-'.$end[0].'-'.$end[1];
        $start = strtotime($awal);
        $end   = strtotime($akhir);
        $selisih = ($end-$start)/(60*60*24);

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
        if(is_null($id)){
            $promo->extra_fields                = ['start_date' => $input['start_date'], 
                                                  'end_date' => $input['end_date'],
                                                  'favorites' => 0,
                                                  'price' => $selisih*10000];    
        }else{
            $promo->extra_fields                = ['start_date' => $input['start_date'], 
                                                  'end_date' => $input['end_date'],
                                                  'favorites' => $input['favorites'],
                                                  'price' => $selisih*10000];    
        }
        $promo->users                           = $input['users'];
        $promo->status                          = 'aktif';
        $promo->kode_pembayaran                 = date('mdHis');
        $promo->published_at                    = date('Y-m-d H:i:s');
        
        $promo->save();
        $this->page_attributes->msg             = 'Data telah disimpan';
        return Redirect::to(route('cms.promo.promo.index'))->with('msg', 'Data telah disimpan.');
    }

    public function show($id)
    {
        //get data
        $datas                                  = Products::find($id);
        $this->page_datas->datas                = $datas;
        $this->page_datas->id                   = $id;
        //page attributes
        $this->page_attributes->page_title      = 'Detail ' . $this->page_title;
        //generate view
        $view_source                            = $this->view_root . '.promo.promo.show';
        $route_source                           = Request::route()->getName();        
        return $this->generateView($view_source , $route_source);
    }

    public function edit($id)
    {
        return $this->create($id);
    }

    public function update($id = null)
    {
        return $this->store($id);
    }

    public function destroy($id)
    {
        $promo                      = Products::find($id);

        $password                   = Input::get('password');
        if(empty($password)){
            return Redirect::to(route('cms.promo.promo.index'))->with('msg-danger', 'Password not valid.');
        }else{
            $promo->delete();
            return Redirect::to(route('cms.promo.promo.index'))->with('msg', 'Data telah dihapus.');
        }
    }
    public function search(){
        $search_result                          = Products::where('status', 'aktif')
                                                    ->where('title', 'like', '%'.Input::get('search').'%')
                                                    ->paginate();
        $this->page_datas->datas                = $search_result;
        $this->page_datas->id                   = null;
        //page attributes
        $this->page_attributes->page_title      = 'Search Result: '.Input::get('search');
        //generate view
        $view_source                            = $this->view_root . '.promo.promo.index';
        $route_source                           = Request::route()->getName();        
        return $this->generateView($view_source , $route_source);
    }
}
