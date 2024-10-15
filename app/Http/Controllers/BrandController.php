<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Brand;
use Illuminate\Support\Facades\Redirect;
session_start();

class BrandController extends Controller
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
    //
    public function add_brand(){
        $this->check();
        return view('admin.brand.add_brand');
    }
    public function all_brand(){
        $this->check();
        $all_brand=Brand::orderBy('brand_id','DESC')->get();
        $manager_brand = view('admin.brand.all_brand') -> with('all_brand',$all_brand);
        return view('admin_layout')-> with('admin.brand.all_brand',$manager_brand);
    }

    public function save_brand(Request $request){
        $this->check();
        $data= $request->all();
        $brand= new Brand();
        $brand->brand_name = $data['brand_product_name'];
        $brand->brand_desc = $data['brand_product_desc'];
        $brand->brand_status = $data['brand_product_status'];
        $brand->save();


      
        Session::put('message','Thêm thương hiệu sản phẩm thành công');
        return Redirect::to('all-brand');
    }
    public function unactive_brand($brand_id){
        $this->check();
        DB::table('tbl_brand')->where('brand_id',$brand_id)->update(['brand_status'=>1]);
        Session::put('message','Trạng thái: Đã ẩn');
        return Redirect::to('all-brand'); 
    }
    public function active_brand($brand_id){
        $this->check();
        DB::table('tbl_brand')->where('brand_id',$brand_id)->update(['brand_status'=>0]);
        Session::put('message','Trạng thái: Hiển thị');
        return Redirect::to('all-brand'); 

    }
    public function edit_brand($brand_id){
        $this->check();
        $edit_brand = DB::table('tbl_brand')->where('brand_id',$brand_id)->get();
        $manager_brand = view('admin.brand.edit_brand') -> with('edit_brand',$edit_brand);
        return view('admin_layout')-> with('admin.brand.edit_brand',$manager_brand);
    

    }
    public function update_brand(Request $request, $brand_id){
        $this->check();
        $data = array();
        $data['brand_name'] = $request ->brand_product_name;
        $data['brand_desc'] = $request ->brand_product_desc;
        DB::table('tbl_brand')->where ('brand_id',$brand_id) -> update($data);
        Session::put('message','Cập nhật thương hiệu thành công');
        return Redirect::to('all-brand');
    }
//
public function delete_brand($brand_id){
    $this->check();
    DB::table('tbl_brand')->where ('brand_id',$brand_id) -> delete();
    Session::put('message','Xóa thương hiệu thành công');
    return Redirect::to('all-brand');
}

///////////////
public function show_brand_index($brand_id){
    $cate_product = DB::table('tbl_category_product')
    -> where('category_status','0') 
    -> orderby('category_id','desc')
    ->get();

    $brand_product = DB::table('tbl_brand')
    -> where('brand_status','0')
    ->orderby('brand_id','desc')
    ->get();

    $brand_by_id = DB::table('tbl_product')
    ->join('tbl_brand','tbl_product.brand_id','=','tbl_brand.brand_id')
    ->where('tbl_product.brand_id',$brand_id)
    ->paginate(8);

    $brand_name = DB::table('tbl_brand')
    ->where('tbl_brand.brand_id',$brand_id)
    ->limit(1)
    ->get();
    return view('pages.brand.show_brand')
    ->with('category',$cate_product)
    ->with('brand',$brand_product)
    ->with('brand_by_id',$brand_by_id)
    ->with('brand_name',$brand_name);
}
}
