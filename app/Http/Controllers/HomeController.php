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
        $promo = array(
           array('title' => 'Promo Ekstra Diskon Pembelian ASUS, ACER & Gigabyte', 
                 'isi' => 'Welcome To The Online Best Model Winner Contest At Look Of the Year. Syarat dan Ketentuan Berlaku.'),
           array('title' => 'Promo Ekstra Diskon Pembelian ASUS, ACER & Gigabyte', 
                 'isi' => 'Welcome To The Online Best Model Winner Contest At Look Of the Year. Syarat dan Ketentuan Berlaku.'),
           array('title' => 'Promo Ekstra Diskon Pembelian ASUS, ACER & Gigabyte', 
                 'isi' => 'Welcome To The Online Best Model Winner Contest At Look Of the Year. Syarat dan Ketentuan Berlaku.'),
           array('title' => 'Promo Ekstra Diskon Pembelian ASUS, ACER & Gigabyte', 
                 'isi' => 'Welcome To The Online Best Model Winner Contest At Look Of the Year. Syarat dan Ketentuan Berlaku.'),
           array('title' => 'Promo Ekstra Diskon Pembelian ASUS, ACER & Gigabyte', 
                 'isi' => 'Welcome To The Online Best Model Winner Contest At Look Of the Year. Syarat dan Ketentuan Berlaku.')
           );
       $promo = json_encode($promo);
        return View::make('web.page.promo')->with('promo',$promo);
    }
    public function promo_detail($id){
        $data = array(
            array('title' => 'Promo Ekstra Diskon Pembelian ASUS, ACER & Gigabyte', 
                  'isi' => 'Welcome To The Online Best Model Winner Contest At Look Of the Year. Welcome To The Online Best   Model Winner Contest At Look Of the Year. Welcome To The Online Best Model Winner Contest At Look Of the Year. Syarat dan Ketentuan Berlaku.')
            );
        $data = json_encode($data);
        $related = array(
            array('title' => 'Promo Ekstra Diskon Pembelian ASUS, ACER & Gigabyte', 
                  'isi' => 'Welcome To The Online Best Model Winner Contest At Look Of the Year. Syarat dan Ketentuan Berlaku.'),
            array('title' => 'Promo Ekstra Diskon Pembelian ASUS, ACER & Gigabyte', 
                  'isi' => 'Welcome To The Online Best Model Winner Contest At Look Of the Year. Syarat dan Ketentuan Berlaku.'),
            array('title' => 'Promo Ekstra Diskon Pembelian ASUS, ACER & Gigabyte', 
                  'isi' => 'Welcome To The Online Best Model Winner Contest At Look Of the Year. Syarat dan Ketentuan Berlaku.')
            );
        $related = json_encode($related);
        return View::make('web.page.promo_detail')->with(['data' => $data, 'related' => $related]);
    }
    public function aktivasi(){
        return View::make('web.page.aktivasi');
    }
    public function signin(Request $request){
        return View::make('web.page.sign_in_sign_up');
    }
    public function about_us(){
        $data = array(
            array('title' => 'About Us', 
                  'isi' => 'AdaPromo.id dibuat sebagai media promosi bagi para pelaku usaha yang ingin mempromosikan produk atau jasanya melalui sebuah website yang bisa dilihat oleh kalangan luas.')
            );
        $data = json_encode($data);
        $related = array(
            array('title' => 'Promo Ekstra Diskon Pembelian ASUS, ACER & Gigabyte', 
                  'isi' => 'Welcome To The Online Best Model Winner Contest At Look Of the Year. Syarat dan Ketentuan Berlaku.'),
            array('title' => 'Promo Ekstra Diskon Pembelian ASUS, ACER & Gigabyte', 
                  'isi' => 'Welcome To The Online Best Model Winner Contest At Look Of the Year. Syarat dan Ketentuan Berlaku.'),
            array('title' => 'Promo Ekstra Diskon Pembelian ASUS, ACER & Gigabyte', 
                  'isi' => 'Welcome To The Online Best Model Winner Contest At Look Of the Year. Syarat dan Ketentuan Berlaku.')
            );
        $related = json_encode($related);
        return View::make('web.page.info')->with(['data' => $data, 'related' => $related]);
    }
}