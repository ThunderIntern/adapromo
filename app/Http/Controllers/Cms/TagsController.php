<?php

namespace app\Http\Controllers\Cms;

use app\Http\Controllers\BaseController;
use app\Models\Tags;
use Request, Input, URL, Redirect;

class TagsController extends BaseController
{
    // init
    protected $view_root    = 'cms.pages';
    protected $page_title   = 'Tags [Category Promo]';
    protected $breadcrumb   = [];

    public function index()
    {
        $datas                                  = Tags::paginate(10);
        $this->page_datas->datas                = $datas;
        $this->page_datas->id                   = null;
        //page attributes
        $this->page_attributes->page_title      = $this->page_title;
        //generate view
        $view_source                            = $this->view_root . '.tags.index';
        $route_source                           = Request::route()->getName();        
        return $this->generateView($view_source , $route_source);
    }

    public function create($id = null)
    {
        //get data
        $datas                                  = null;
        
        if($id != null){
            $datas                              = Tags::find($id);
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
        $view_source                            = $this->view_root . '.tags.create';
        $route_source                           = Request::route()->getName();        
        return $this->generateView($view_source , $route_source);
    }

    public function store($id = null)
    {
        //get input
        $input                                  = Input::only('tags', 'type');
        //create or edit
        $users                                  = Tags::findOrNew($id);
        //save data
        
        $users->tags                            = $input['tags'];
        $users->type                            = $input['type']; 
        $users->save();

        $this->page_attributes->msg             = 'Data telah disimpan';
        return Redirect::to(route('cms.tags.index'))->with('msg', 'Data telah disimpan.');
    }

    public function show($id)
    {
        //get data
        $datas                                  = Tags::find($id);
        $this->page_datas->datas                = $datas;
        $this->page_datas->id                   = $id;
        //page attributes
        $this->page_attributes->page_title      = 'Detail ' . $this->page_title;
        //generate view
        $view_source                            = $this->view_root . '.tags.show';
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
        $users                      = Tags::find($id);

        $password                   = Input::get('password');
        if(empty($password)){
            return Redirect::to(route('cms.tags.index'))->with('msg-danger', 'Password not valid.');
        }else{
            $users->delete();
            return Redirect::to(route('cms.tags.index'))->with('msg', 'Data telah dihapus.');
        }
    }
}
