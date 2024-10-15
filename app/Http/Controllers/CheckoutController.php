<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Gloudemans\Shoppingcart\Facades\Cart;
session_start();


class CheckoutController extends Controller
{
    public function check(){
        $admin_id= Session::get('admin_id');
        if($admin_id){
           return Redirect::to('dashboard');
        }
        else{
           return Redirect::to('admin') ->send();
        }
    }
    public function login_checkout(){
        $cate_product = DB::table('tbl_category_product')-> where('category_status','0') -> orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')-> where('brand_status','0')->orderby('brand_id','desc')->get();

        return view('pages.check.checkout_login')->with('category',$cate_product)->with('brand',$brand_product);
    }
    public function add_customer(Request $request){
            $data =array();
            $data['customer_name']=$request->customer_name;
            $data['customer_email']=$request->customer_email;
            $data['customer_password']= md5($request->customer_password);
            $data['customer_phone']=$request->customer_phone;

            $customer_id =DB::table('tbl_customers')->insertGetId($data);
            Session::put('customer_id',$customer_id);
            Session::put('customer_name',$request->customer_name);
            Session::put('message','Đăng ký thành công');
            return Redirect::to('/login-checkout');

        }
    public function checkout(){
        $cate_product = DB::table('tbl_category_product')-> where('category_status','0') -> orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')-> where('brand_status','0')->orderby('brand_id','desc')->get();

        return view('pages.check.checkout')->with('category',$cate_product)->with('brand',$brand_product);
    }
    public function save_checkout(Request $request){
            $data =array();
            $data['shipping_name']=$request->shipping_name;
            $data['shipping_email']=$request->shipping_email;
            $data['shipping_phone']=$request->shipping_phone;
            $data['shipping_notes']=$request->shipping_notes;    
            $data['shipping_address']=$request->shipping_address;

            $shipping_id =DB::table('tbl_shipping')->insertGetId($data);
            Session::put('shipping_id',$shipping_id);
            return Redirect::to('/payment');
    }
    public function payment(){
        $cate_product = DB::table('tbl_category_product')-> where('category_status','0') -> orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')-> where('brand_status','0')->orderby('brand_id','desc')->get();
        return view('pages.check.payment')->with('category',$cate_product)->with('brand',$brand_product);

    }
    public function logout_checkout(){
        Session::flush();
        return redirect::to('/login-checkout');
    }
    public function login_customer(Request $request){
    	$email = $request->email_acc;
    	$password = md5($request->password_acc);
    	$result = DB::table('tbl_customers')->where('customer_email',$email)->where('customer_password',$password)->first();
    	
    	if($result){
    		Session::put('customer_id',$result->customer_id);
    		return Redirect::to('/checkout');
    	}else{
    		return Redirect::to('/login-checkout');
    	}
}
    public function order_place(Request $request){
        //phuong thuc thanh toan
        $data =array();
        $data['payment_method']=$request->payment_option;
        $data['payment_status']='Đang chờ xác nhận';
        $payment_id=DB::table('tbl_payment')->insertGetId($data);
        //them don hang
        $order_data =array();
        $order_data['customer_id']=Session::get('customer_id');
        $order_data['shipping_id']=Session::get('shipping_id');
        $order_data['payment_id']=$payment_id;
        $order_data['order_total']=Cart::total();
        $order_data['order_status']='Đang chờ xác nhận';
        $order_id =DB::table('tbl_order')->insertGetId($order_data);
        //them chi tiet don hang
        $content =Cart::content();
        foreach($content as $v_content){
        $order_details_data['order_id']= $order_id;
        $order_details_data['product_id']= $v_content->id;
        $order_details_data['product_name']=$v_content->name;
        $order_details_data['product_price']=$v_content->price;
        $order_details_data['product_sales_quantity']=$v_content->qty;
        DB::table('tbl_order_details')->insert($order_details_data);
        }
        if($data['payment_method']==1){
            echo'Thanh toán bằng thẻ ATM thành công';
        }elseif($data['payment_method']==2){
            
            $cate_product = DB::table('tbl_category_product')-> where('category_status','0') -> orderby('category_id','desc')->get();
            $brand_product = DB::table('tbl_brand')-> where('brand_status','0')->orderby('brand_id','desc')->get();
           
            return view('pages.check.money')->with('category',$cate_product)->with('brand',$brand_product);
        }else{
            echo'Thanh toán bằng thẻ ghi nợ thành công';
        }

    }
    public function manager_order(){
        $this->check();     
        $all_order = DB::table('tbl_order')
        ->join('tbl_customers','tbl_order.customer_id','=','tbl_customers.customer_id')
        ->select('tbl_order.*','tbl_customers.customer_name')
        ->orderby('tbl_order.order_id','desc')->get();
        $manager_order = view('admin.manager.manager') -> with('all_order',$all_order);
        return view('admin_layout')-> with('admin.manager.manager',$manager_order);
    }
    public function view_order($orderId){
        $this->check();     
        $order_by_id = DB::table('tbl_order')
        ->join('tbl_customers','tbl_order.customer_id','=','tbl_customers.customer_id')
        ->join('tbl_shipping','tbl_order.shipping_id','=','tbl_shipping.shipping_id')
        ->join('tbl_order_details','tbl_order.order_id','=','tbl_order_details.order_id')
        ->select('tbl_order.*','tbl_customers.*','tbl_shipping.*','tbl_order_details.*')->first();

        $manager_order_by_id  = view('admin.manager.view_order')->with('order_by_id',$order_by_id);
        return view('admin_layout')->with('admin.manager.view_order', $manager_order_by_id);
        
    }
    
}

