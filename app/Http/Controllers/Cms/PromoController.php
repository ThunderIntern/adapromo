<?php

namespace app\Http\Controllers\Cms;

use app\Http\Controllers\BaseController;
use app\Models\Products;
use Request, Input, URL, Redirect;

class PromoController extends BaseController
{
    // init
    protected $view_root    = 'cms.pages';
    protected $page_title   = 'Promo';
    protected $breadcrumb   = [];

    public function index()
    {
        $datas                                  = Products::paginate(10);
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
        if($id != null){
            $this->page_attributes->page_title  = 'Edit '. $this->page_title;
        }else{
            $this->page_attributes->page_title  = $this->page_title . ' Baru';
        }
        $this->page_datas->id                   = $id;
        //generate view
        $view_source                            = $this->view_root . '.promo.promo.create';
        $route_source                           = Request::route()->getName();        
        return $this->generateView($view_source , $route_source);
    }

    public function store($id = null)
    {
        //get input
        $input                                  = Input::only('title','slug', 'description', 'images', 'tags', 'type', 'extra_fields', 'users');
        //create or edit
        $promo                                  = Products::findOrNew($id);
        //save data
        $promo->title                           = $input['title'];
        $promo->slug                            = $input['slug'];
        $promo->description                     = $input['description'];
        $promo->images                          = $input['images'];
        $promo->tags                            = $input['tags'];
        $promo->type                            = $input['type'];
        $promo->extra_fields                    = $input['extra_fields'];
        $promo->users                           = $input['users'];
        $promo->published_at                    = date('Y-m-d H:m:s');
        
        $promo->save();
        $this->page_attributes->msg             = 'Data telah disimpan';
        return Redirect::to('/cms/promo/promo')->with('msg', 'Data telah disimpan.');
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
            return Redirect::to('/cms/promo/promo')->with('msg', 'Password not valid.');
        }else{
            $promo->delete();
            return Redirect::to('/cms/promo/promo')->with('msg', 'Data telah dihapus.');
        }
    }
}
