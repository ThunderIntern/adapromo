<?php

namespace app\Http\Controllers\Cms;

use app\Http\Controllers\BaseController;
use app\Models\WebConfig;
use Request, Input, URL, Redirect;

class FaqController extends BaseController
{
    // init
    protected $view_root    = 'cms.pages';
    protected $page_title   = 'FAQ';
    protected $breadcrumb   = [];

    public function index()
    {
        $datas                                  = WebConfig::where('type', 'faq')->paginate(10);
        $this->page_datas->datas                = $datas;
        $this->page_datas->id                   = null;
        //page attributes
        $this->page_attributes->page_title      = $this->page_title;
        //generate view
        $view_source                            = $this->view_root . '.website.faq.index';
        $route_source                           = Request::route()->getName();        
        return $this->generateView($view_source , $route_source);
    }

    public function create($id = null)
    {
        //get data
        $datas                                  = null;
        
        if($id != null){
            $datas                              = WebConfig::find($id);
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
        $view_source                            = $this->view_root . '.website.faq.create';
        $route_source                           = Request::route()->getName();        
        return $this->generateView($view_source , $route_source);
    }

    public function store($id = null)
    {
        //get input
        $input                                  = Input::only('pertanyaan', 'jawaban');
        //create or edit
        $faq                                    = WebConfig::findOrNew($id);
        //save data
        $faq->content                           = ['pertanyaan' => $input['pertanyaan'],
                                                    'jawaban' => $input['jawaban']
                                                  ];
        $faq->type                              = 'faq';
        $faq->save();
        $this->page_attributes->msg             = 'Data telah disimpan';
        return Redirect::to('/cms/website/faq')->with('msg', 'Data telah disimpan.');
    }

    public function show($id)
    {
        //get data
        $datas                                  = WebConfig::find($id);
        $this->page_datas->datas                = $datas;
        $this->page_datas->id                   = $id;
        //page attributes
        $this->page_attributes->page_title      = 'Detail ' . $this->page_title;
        //generate view
        $view_source                            = $this->view_root . '.website.faq.show';
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
        $faq                        = WebConfig::find($id);

        $password                   = Input::get('password');
        if(empty($password)){
            return Redirect::to('/cms/website/faq/')->with('msg', 'Password not valid.');
        }else{
            $faq->delete();
            return Redirect::to('/cms/website/faq/')->with('msg', 'Data telah dihapus.');
        }
    }
}
