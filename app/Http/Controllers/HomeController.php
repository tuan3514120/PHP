<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Slider;
use Illuminate\Support\Facades\Mail;
session_start();

class HomeController extends Controller
{
    public function index(){
        $slider = Slider::orderBy('slider_id','DESC')->take(2)->get();
        $cate_product = DB::table('tbl_category_product')-> where('category_status','0') -> orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')-> where('brand_status','0')->orderby('brand_id','desc')->get();
        $all_product = DB::table('tbl_product')-> where('product_status','0')->orderby('product_id','desc')->limit(8)->get();
        return view('pages.home')->with('category',$cate_product)->with('brand',$brand_product)->with('all_product',$all_product)->with('slider',$slider);
    }
    public function search(Request $request){
        $keyword = $request->keywords_submit;
        $cate_product = DB::table('tbl_category_product')-> where('category_status','0') -> orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')-> where('brand_status','0')->orderby('brand_id','desc')->get();
        $search_product = DB::table('tbl_product')-> where('product_name','like','%' .$keyword.'%')->get();

        return view('pages.product.search')->with('category',$cate_product)->with('brand',$brand_product)->with('search_product',$search_product);
    }
    public function send_mail(){
        $to_name="HTT Shop";
        $to_email="nvqtuan.20it6@vku.udn.vn";
        $data=array("name"=>"HTT Shop","body"=>"Vui lòng xác nhận đơn hàng");
        Mail::send('admin.manager.send_mail',$data,function($message)use($to_name,$to_email){
            $message->to($to_email)->subject('Vui lòng xác nhận đơn hàng');
            $message->from($to_email,$to_name);
        });
    }
    public function team(){
        $cate_product = DB::table('tbl_category_product')-> where('category_status','0') -> orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')-> where('brand_status','0')->orderby('brand_id','desc')->get();
        return view('pages.elements.about')->with('category',$cate_product)->with('brand',$brand_product);
    }
}
