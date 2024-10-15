<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coupon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
session_start();
class CouponController extends Controller
{
    public function insert_coupon(){
        return view('admin.voucher.insert_voucher');
    }
    public function insert_voucher(Request $request){
        $data=$request->all();
        $coupon= new Coupon();
        $coupon->coupon_name = $data['coupon_name'];
        $coupon->coupon_code = $data['coupon_code'];
        $coupon->coupon_qty = $data['coupon_qty'];
        $coupon->coupon_list = $data['coupon_list'];
        $coupon->coupon_number = $data['coupon_number'];
        $coupon->save();
        Session::put('message','Thêm mã giảm giá thành công');
        return Redirect::to('list-coupon');

    }
    public function list_coupon(){
        $coupon = Coupon::orderBy('coupon_id','DESC')->get();
        return view('admin.voucher.all_voucher')->with(compact('coupon'));
    }
    public function delete_coupon($coupon_id){
        $coupon = Coupon::find($coupon_id);
        $coupon->delete();
        Session::put('message','Xóa thành công');
        return Redirect::to('list-coupon');

    }
}
