<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;

use app\Http\Controllers\Controller;

use Input;
use DB;
use Redirect;
use Session;
use View;

class HomeController extends Controller
{
    public function home(){
        return View::make('web.page.home_page');
    }
    public function promo(){
        return View::make('web.page.promo');
    }
    public function promo_detail($id){
        return View::make('web.page.promo_detail');
    }
    public function aktivasi(){
        return View::make('web.page.aktivasi');
    }
    public function signin(){
        return View::make('web.page.sign_in_sign_up');
    }
}