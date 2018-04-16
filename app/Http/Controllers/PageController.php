<?php

namespace App\Http\Controllers;
use App\Slide;
use App\Product;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
        $slide = Slide::all();
        $new_product = Product::where('new',1)->paginate(4);
        $sanpham_khuyenmai = Product::where('promotion_price','<>',0)->paginate(8);
    	//return view('page.trangchu', ['slide'=>$slide]);
        return view('page.trangchu', compact('slide','new_product','sanpham_khuyenmai'));

    }

    public function getLoaiSP(){
    	return view('page.loai_sanpham');
    }

    public function getChitietSP(){
    	return view('page.chitiet_sanpham');
    }

    public function getContact(){
    	return view('page.lienhe');
    }

    public function getAbout(){
    	return view('page.gioithieu');
    }

}
