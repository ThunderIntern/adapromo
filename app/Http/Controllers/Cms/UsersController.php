<?php

namespace app\Http\Controllers\Cms;

use app\Http\Controllers\BaseController;
use app\Models\Users;
use Request, Input, URL, Redirect;

class UsersController extends BaseController
{
    // init
    protected $view_root    = 'cms.pages';
    protected $page_title   = 'Data User';
    protected $breadcrumb   = [];

    public function index()
    {
        $datas                                  = Users::paginate(10);
        $this->page_datas->datas                = $datas;
        $this->page_datas->id                   = null;
        //page attributes
        $this->page_attributes->page_title      = $this->page_title;
        //generate view
        $view_source                            = $this->view_root . '.users.index';
        $route_source                           = Request::route()->getName();        
        return $this->generateView($view_source , $route_source);
    }

    public function create($id = null)
    {
        //get data
        $datas                                  = null;
        
        if($id != null){
            $datas                              = Users::find($id);
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
        $view_source                            = $this->view_root . '.users.create';
        $route_source                           = Request::route()->getName();        
        return $this->generateView($view_source , $route_source);
    }

    public function store($id = null)
    {
        //get input
        $input                                  = Input::only('name', 'email', 'dob', 'role', 'password', 'password2');
        //create or edit
        $users                                  = Users::findOrNew($id);
        //save data
        if(is_null($id)){
            if($input['password']==$input['password2']){
                $users->password                = hash('md5', $input['password']);
            }
            else{
                return Redirect::to(route('cms.users.create'))->with('msg', 'Konfirmasi Password Salah.');        
            }
        }
        
        $users->name                            = $input['name'];
        $users->email                           = $input['email']; 
        $users->dob                             = $input['dob']; 
        $users->role                            = $input['role']; 

        $users->save();
        $this->page_attributes->msg             = 'Data telah disimpan';
        return Redirect::to(route('cms.users.index'))->with('msg', 'Data telah disimpan.');
    }

    public function show($id)
    {
        //get data
        $datas                                  = Users::find($id);
        $this->page_datas->datas                = $datas;
        $this->page_datas->id                   = $id;
        //page attributes
        $this->page_attributes->page_title      = 'Detail ' . $this->page_title;
        //generate view
        $view_source                            = $this->view_root . '.users.show';
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
        $users                      = Users::find($id);

        $password                   = Input::get('password');
        if(empty($password)){
            return Redirect::to(route('cms.users.index'))->with('msg', 'Password not valid.');
        }else{
            $users->delete();
            return Redirect::to(route('cms.users.index'))->with('msg', 'Data telah dihapus.');
        }
    }
}
