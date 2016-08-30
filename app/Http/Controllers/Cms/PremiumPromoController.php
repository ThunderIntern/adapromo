<?php

namespace app\Http\Controllers\Cms;

use app\Http\Controllers\BaseController;
use app\Models\Products;
use app\Models\Tags;
use app\Models\Users;
use Request, Input, URL, Redirect;

class PremiumPromoController extends BaseController
{
    // init
    protected $view_root    = 'cms.pages';
    protected $page_title   = 'Premium Promo';
    protected $breadcrumb   = [];

    public function index()
    {
        $datas                                  = Products::where('is_premium', true)->paginate(10);
        $this->page_datas->datas                = $datas;
        $this->page_datas->id                   = null;
        //page attributes
        $this->page_attributes->page_title      = $this->page_title;
        //generate view
        $view_source                            = $this->view_root . '.promo.premium.index';
        $route_source                           = Request::route()->getName();        
        return $this->generateView($view_source , $route_source);
    }
    public function search(){
        $search_result                          = Products::where('is_premium', true)
                                                    ->where('title', 'like', '%'.Input::get('search').'%')
                                                    ->paginate();
        $this->page_datas->datas                = $search_result;
        $this->page_datas->id                   = null;
        //page attributes
        $this->page_attributes->page_title      = 'Search Result: '.Input::get('search');
        //generate view
        $view_source                            = $this->view_root . '.promo.premium.index';
        $route_source                           = Request::route()->getName();        
        return $this->generateView($view_source , $route_source);
    }
}
