<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Coupon;
session_start();


class CartController extends Controller
{
    public function save_cart(Request $request){
        $productID = $request->productid_hidden;
        $quantity = $request-> qty;
        $product_info = DB::table('tbl_product')->where('product_id',$productID)->first();

        $data['id']=$product_info->product_id;
        $data['qty']=$quantity;
        $data['name']=$product_info->product_name;
        $data['price']=$product_info->product_price;
        $data['weight']=$product_info->product_price;;
        $data['options']['image']=$product_info->product_image;

        Cart::add($data);
        Cart::setGlobalTax(5);
        return Redirect::to('/show-cart');
        
    }
    public function show_cart(){
        $cate_product = DB::table('tbl_category_product')-> where('category_status','0') -> orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')-> where('brand_status','0')->orderby('brand_id','desc')->get();
        return view('pages.cart.show_cart')->with('category',$cate_product)->with('brand',$brand_product);
    }
    public function delete_cart($rowId){
        Cart::update($rowId,0);
        return Redirect::to('/show-cart');
    }
    public function update_cart(Request $request){
        $rowId = $request->rowId_cart;
        $qty = $request->qtybutton;
        Cart::update($rowId,$qty);
        return Redirect::to('/show-cart');

    }
    public function check_coupon(Request $request){
        $data = $request->all();
        $coupon = Coupon::where('coupon_code',$data['coupon'])->first();
        if($coupon){
            $count_coupon = $coupon->count();
            if($count_coupon>0){
                $coupon_session = Session::get('coupon');
                    if($coupon_session==true){
                        $is_available=0;
                        if($is_available==0){
                            $cou[]=array(
                                'coupon_code'=>$coupon->coupon_code,
                                'coupon_list'=>$coupon->coupon_list,
                                'coupon_number'=>$coupon->coupon_number,
                            );
                            Session::put('coupon',$cou);
                        }
                    }else{
                        $cou[] = array(
                            'coupon_code'=>$coupon->coupon_code,
                            'coupon_list'=>$coupon->coupon_list,
                            'coupon_number'=>$coupon->coupon_number,
                        );
                        Session::put('coupon',$cou);
                    }
                    Session::save();
                    return Redirect()->back()->with('message','Áp dụng mã giảm giá thành công!');
            } 
        }else{
            return Redirect()->back()->with('error','Mã giảm giá không hợp lệ');
        }
    }
}
