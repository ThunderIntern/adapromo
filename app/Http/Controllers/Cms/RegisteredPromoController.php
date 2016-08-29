<?php

namespace app\Http\Controllers\Cms;

use app\Http\Controllers\BaseController;
use app\Models\Products;
use app\Models\Tags;
use app\Models\Users;
use Request, Input, URL, Redirect;

class RegisteredPromoController extends BaseController
{
    // init
    protected $view_root    = 'cms.pages';
    protected $page_title   = 'Registered Promo';
    protected $breadcrumb   = [];

    public function index()
    {
        $datas                                  = Products::where('status', 'pending')->paginate(10);
        $this->page_datas->datas                = $datas;
        $this->page_datas->id                   = null;
        //page attributes
        $this->page_attributes->page_title      = $this->page_title;
        //generate view
        $view_source                            = $this->view_root . '.promo.registered.index';
        $route_source                           = Request::route()->getName();        
        return $this->generateView($view_source , $route_source);
    }
    public function aktivasi($id){
        $promo                                  = Products::find($id);
        $promo->status                          = 'aktif';
        $promo->save();
        return Redirect::to(route('cms.promo.registered.index'))->with('msg', 'Promo berhasil di aktifkan.');
    }
    public function destroy($id)
    {
        $promo                      = Products::find($id);

        $password                   = Input::get('password');
        if(empty($password)){
            return Redirect::to(route('cms.promo.registered.index'))->with('msg-danger', 'Password not valid.');
        }else{
            $promo->delete();
            return Redirect::to(route('cms.promo.registered.index'))->with('msg', 'Data telah dihapus.');
        }
    }
}
