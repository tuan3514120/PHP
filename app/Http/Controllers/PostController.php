<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Post;
session_start();

class PostController extends Controller
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
    public function add_post(){
        $this->check();

        return view('admin.post.add_post');
    }
    public function all_post(){
        $this->check();     
        $all_post = Post::orderBy('post_id','desc')->paginate(5);
        return view('admin.post.all_post')->with(compact('all_post',$all_post));
    }

    public function save_post(Request $request){
        $this->check();
        $data = $request->all();
        $post = new Post();
        $post->post_title = $data['post_title'];
        $post->post_desc  = $data['post_desc'];
        $post->post_content = $data['post_content'];
        $post->post_status = $data['post_status'];

        $get_image= $request-> file('post_image');

        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image-> move('public/uploads/post',$new_image);
            $post->post_image=$new_image;
            $post->save();
            Session::put('message','Thêm bài viết thành công');
            return Redirect::to('all-post');
        }
        $post->post_image='';
        $post->save();
        Session::put('message','Ảnh trống!');
        return Redirect::to('all-post');
    }
       
    
    public function unactive_post($post_id){
        $this->check();
        DB::table('tbl_posts')->where('post_id',$post_id)->update(['post_status'=>1]);
        Session::put('message','Trạng thái: Đã ẩn');
        return Redirect::to('all-post'); 
    }
    public function active_post($post_id){
        $this->check();
        DB::table('tbl_posts')->where('post_id',$post_id)->update(['post_status'=>0]);
        Session::put('message','Trạng thái: Hiển thị');
        return Redirect::to('all-post'); 

    }
    public function edit_post($post_id){
        $this->check();
        $post=Post::find($post_id);
        return view('admin.post.edit_post')->with(compact('post'));
    

    }
    public function update_post(request $request,$post_id){
        $this->check();
        $data = $request->all();
        $post = Post::find($post_id);
        $post->post_title = $data['post_title'];
        $post->post_desc  = $data['post_desc'];
        $post->post_content = $data['post_content'];
        $get_image= $request-> file('post_image');

        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image-> move('public/uploads/post',$new_image);
            $post->post_image=$new_image;
            $post->save();
            Session::put('message','Thêm bài viết thành công');
            return Redirect::to('all-post');
        }
        $post->post_image='';
        $post->save();
        Session::put('message','Ảnh trống!');
        return Redirect::to('all-post');
    }
//
public function delete_post($post_id){
    $this->check();
    $post=Post::find($post_id);
    $post->delete();
    Session::put('message','Xóa bài viết thành công');
    return Redirect::to('all-post');
}   

    public function blog(){
        
        $all_post = DB::table('tbl_posts')->where('post_status',0)->orderby('post_id','desc')->paginate(9);
        $cate_product = DB::table('tbl_category_product')-> where('category_status','0') -> orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')-> where('brand_status','0')->orderby('brand_id','desc')->get();
        return view('pages.post.post') ->with('category',$cate_product)->with('brand',$brand_product)->with('all_post',$all_post);
    }
    public function detail($post_id){
        $detail_post = DB::table('tbl_posts') ->where('tbl_posts.post_id',$post_id)->get();
        $cate_product = DB::table('tbl_category_product')-> where('category_status','0') -> orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')-> where('brand_status','0')->orderby('brand_id','desc')->get();
        return view('pages.post.blog_detail') ->with('category',$cate_product)->with('brand',$brand_product)->with('post_detail',$detail_post);
    
    
        
}
}