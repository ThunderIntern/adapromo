<?php

namespace app\Http\Controllers\Cms;

use app\Http\Controllers\BaseController;
use app\Models\Products;
use app\Models\Tags;
use app\Models\Users;
use app\Models\TopUpAds;
use Request, Input, URL, Redirect;

class PremiumPromoController extends BaseController
{
    // init
    protected $view_root    = 'cms.pages';
    protected $page_title   = 'Request Premium Promo';
    protected $breadcrumb   = [];

    public function index()
    {
        $datas                                  = Products::where('is_premium', null)
                                                    ->orWhere('is_premium', false)
                                                    ->where('bukti_pembayaran', '!=', null)
                                                    ->paginate(10);
        $this->page_datas->datas                = $datas;
        $this->page_datas->id                   = null;
        //page attributes
        $this->page_attributes->page_title      = $this->page_title;
        //generate view
        $view_source                            = $this->view_root . '.promo.premium.index';
        $route_source                           = Request::route()->getName();        
        return $this->generateView($view_source , $route_source);
    }
    public function accept($id){
        $promo                                  = Products::find($id);
        $promo->is_premium                      = true;
        $promo->save();
        $premium_promo                          = new TopUpAds();
        $premium_promo->product_id              = $promo->_id;
        $premium_promo->title                   = $promo->title;
        $premium_promo->transact_at             = date("Y-m-d H:i:s");
        $premium_promo->save();
        return Redirect::to(route('cms.promo.promo.index'))->with('msg', 'Promo berhasil ditambahkan sebagai Premium Promo.');
    }
    public function remove($id){
        $promo                                  = Products::find($id);
        $promo->is_premium                      = false;
        $promo->save();
        TopUpAds::where('product_id', $id)->delete();
        return Redirect::to(route('cms.promo.promo.index'))->with('msg', 'Premium Tag berhasil dihapus.');
    }
}
