<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();


class CategoryController extends Controller
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
        public function add_category(){
            $this->check();
            return view('admin.category.add_category');
        }
        public function all_category(){
            $this->check();
            $all_category = DB::table('tbl_category_product')->get();
            $manager_category = view('admin.category.all_category') -> with('all_category',$all_category);
            return view('admin_layout')-> with('admin.category.all_category',$manager_category);
        }

        public function save_category(Request $request){
            $this->check();
            $data = array();
            $data['category_name'] = $request ->category_product_name;
            $data['category_desc'] = $request ->category_product_desc;
            $data['category_status'] = $request ->category_product_status;
            DB::table('tbl_category_product')->insert($data);
            Session::put('message','Thêm danh mục sản phẩm thành công');
            return Redirect::to('all-category');
        }
        public function unactive_category($category_id){
            $this->check();
            DB::table('tbl_category_product')->where('category_id',$category_id)->update(['category_status'=>1]);
            Session::put('message','Trạng thái: Đã ẩn');
            return Redirect::to('all-category'); 
        }
        public function active_category($category_id){
            $this->check();
            DB::table('tbl_category_product')->where('category_id',$category_id)->update(['category_status'=>0]);
            Session::put('message','Trạng thái: Hiển thị');
            return Redirect::to('all-category'); 

        }
        public function edit_category($category_id){
            $this->check();
            $edit_category = DB::table('tbl_category_product')->where('category_id',$category_id)->get();
            $manager_category = view('admin.category.edit_category') -> with('edit_category',$edit_category);
            return view('admin_layout')-> with('admin.category.edit_category',$manager_category);
        

        }
        public function update_category(Request $request, $category_id){
            $this->check();
            $data = array();
            $data['category_name'] = $request ->category_product_name;
            $data['category_desc'] = $request ->category_product_desc;
            DB::table('tbl_category_product')->where ('category_id',$category_id) -> update($data);
            Session::put('message','Cập nhật danh mục thành công');
            return Redirect::to('all-category');
        }
    //
    public function delete_category($category_id){
        $this->check();
        DB::table('tbl_category_product')->where ('category_id',$category_id) -> delete();
        Session::put('message','Xóa danh mục thành công');
        return Redirect::to('all-category');
    }
    /////////////////////////////
    public function show_category_index($category_id){
        $cate_product = DB::table('tbl_category_product')-> where('category_status','0') -> orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')-> where('brand_status','0')->orderby('brand_id','desc')->get();

        $category_by_id = DB::table('tbl_product')
        ->join('tbl_category_product','tbl_product.category_id','=','tbl_category_product.category_id')
        ->where('tbl_product.category_id',$category_id)
        ->paginate(8);

        $category_name = DB::table('tbl_category_product')
        ->where('tbl_category_product.category_id',$category_id)
        ->limit(1)
        ->get();

        return view('pages.category.show_category')
        ->with('category',$cate_product)
        ->with('brand',$brand_product)
        ->with('category_by_id',$category_by_id)
        ->with('category_name',$category_name);
    }
   
}
