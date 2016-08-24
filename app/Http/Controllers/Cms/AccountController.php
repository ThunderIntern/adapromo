<?php

namespace app\Http\Controllers\Cms;

use app\Http\Controllers\BaseController;
use app\Models\WebConfig;
use app\Models\Users;
use Request, Input, URL, Redirect;

class AccountController extends BaseController
{
    // init
    protected $view_root    = 'cms.pages';
    protected $page_title   = 'Account Settings';
    protected $breadcrumb   = [];

    public function account()
    {
        $account_details                        = Users::where('email', session('username'))->get();
        $this->page_datas->account              = $account_details;
        //page attributes
        $this->page_attributes->page_title      = $this->page_title;
        //generate view
        $view_source                            = $this->view_root . '.account/account_settings';
        $route_source                           = Request::route()->getName();
        return $this->generateView($view_source , $route_source);
    }
    public function account_save(){
        $input                  = Input::all();
        $data                   = ['email' => $input['email'], 'name' => $input['name'], 'dob' => $input['dob'], 'role' => $input['role']];
        Users::where('email', session('username'))->update($data);
        session(['username' => $input['email']]);

        return Redirect::to(route('cms.account'))->with('msg', 'Perubahan berhasil disimpan.');
    }
    public function password()
    {
        //page attributes
        $this->page_attributes->page_title      = 'Change Password';
        //generate view
        $view_source                            = $this->view_root . '.account/change_password';
        $route_source                           = Request::route()->getName();
        return $this->generateView($view_source , $route_source);
    }
    public function password_save(){
        $input                  = Input::all();
        $account_details        = Users::where('email', session('username'))->get()['0']['attributes'];
        if(hash('md5', $input['old'])==$account_details['password']){
            if($input['password'] == $input['konf_password']){
                $data               = ['password' => hash('md5', $input['password'])];
                Users::where('email', session('username'))->update($data);
                return Redirect::to(route('cms.password'))->with('msg', 'Perubahan berhasil disimpan.');
            }
            else{
                return Redirect::to(route('cms.password'))->with('msg-danger', 'Perubahan gagal disimpan, <b>Konfirmasi Password</b> salah.');
            }
        }
        else{
            return Redirect::to(route('cms.password'))->with('msg-danger', 'Perubahan gagal disimpan, <b>Password Lama</b> salah.');
        }
    }
}
