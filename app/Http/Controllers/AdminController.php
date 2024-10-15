<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();


class AdminController extends Controller
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
    public function index(){
        return view('admin_login'); 
    }
    public function show_dashboard(){
        $this ->check();
       
        return view('admin.dashboard');
    }
    public function dashboard(Request $request){
        $admin_email = $request->admin_email;
        $admin_password = md5($request->admin_password);
        $admin_phone =$request->admin_phone;
        $result = DB::table('tbl_admin')-> where ('admin_email', $admin_email)->where('admin_password',$admin_password)->first();
        if($result){
            Session::put('admin_name',$result->admin_name);
            Session::put('admin_email',$result->admin_email);
            Session::put('admin_id',$result->admin_id);
            Session::put('admin_phone',$result->admin_phone);
            Session::put('admin_city',$result->admin_city);
            Session::put('admin_detail',$result->admin_detail);
            Session::put('admin_image',$result->admin_image);

            return Redirect::to('/dashboard');
        } else {
            Session::put('message','Tài khoản hoặc mật khẩu không đúng');
            return Redirect::to('/admin');
        }
    }
    public function logout(Request $request){
        $this ->check();
        Session::put('admin_name',null);
        Session::put('admin_id',null);
        return Redirect::to('/admin');
    }
    public function revenue(){
        $order=DB::table('tbl_order')->count();
        $cou=DB::table('tbl_coupon')->count();
        $blog=DB::table('tbl_posts')->count();
        $product=DB::table('tbl_product')->count();
        return view('admin.manager.revenue')
        ->with('product',$product)
        ->with('order',$order)
        ->with('blog',$blog)
        ->with('coupon',$cou);
    }
}
