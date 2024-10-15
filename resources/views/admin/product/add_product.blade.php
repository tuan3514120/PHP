@extends('admin_layout')
@section('admin_content')

<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Thêm sản phẩm</h4>
        
        <?php
        $message= Session::get('message');
        if($message){
            echo '<span class="text-alert">'.$message.'</span>';
            Session::put('message',null);
        }
        ?>
          <form class="forms-sample" action="{{URL::to('/save-product')}}" method="post"enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="exampleInputName1">Tên sản phẩm</label>
            <input type="text" name="product_name" class="form-control" id="exampleInputName1" placeholder="Name">
          </div>
          <div class="form-group">
            <label for="exampleInputName1">Giá</label>
            <input type="text" name="product_price" class="form-control" id="exampleInputName1" placeholder="Price">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Mô tả sản phẩm</label>
            <input type="text"  name="product_desc" class="form-control"  placeholder="Desc">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Ảnh</label>
            <input type="file" name="product_image" class="form-control" id="exampleInputEmail1" placeholder="Ảnh...">
        </div>
            <div class="form-group">
                <label for="exampleSelectGender">Danh mục</label>
                  <select name="product_category" class="form-control" id="exampleSelectGender">
                    @foreach ($cate_product as $key => $cate ) 
                    <option value ="{{$cate->category_id}}">{{$cate->category_name}}</option>
                    @endforeach  
                  </select>
                </div> 
          <div class="form-group">
            <label for="exampleSelectGender">Thương hiệu</label>
              <select name="product_brand" class="form-control" id="exampleSelectGender">
                @foreach ($brand_product as $key => $brand )
                <option value ="{{$brand->brand_id}}">{{$brand->brand_name}}</option>   
                @endforeach
              </select>
            </div>  
            <div class="form-group">
                <label for="exampleSelectGender">Trạng thái</label>
                  <select name="product_status" class="form-control" id="exampleSelectGender">
                    <option value ="">--Chọn--</option>
                    <option value ="0">Hiển thị</option>
                    <option value ="1">Ẩn</option>
                  </select>
                </div> 
          <button type="submit" class="btn btn-primary me-2">Thêm</button>
        </form>
      </div>
    </div>
  </div>
  @endsection