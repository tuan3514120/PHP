@extends('admin_layout')
@section('admin_content')

<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        @foreach ($edit_product as $key => $pro )
        <h4 class="card-title">Cập nhật sản phẩm</h4>
        
        <?php
        $message= Session::get('message');
        if($message){
            echo '<span class="text-alert">'.$message.'</span>';
            Session::put('message',null);
        }
        ?>
          <form class="forms-sample"action="{{URL::to('/update-product/'.$pro->product_id)}}" method="post">
            {{ csrf_field() }}
          <div class="form-group">
            <label for="exampleInputName1">Tên thương hiệu</label>
            <input type="text" value="{{$pro->product_name}}" name="product_name" class="form-control" id="exampleInputName1">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Giá</label>
            <input style="resize: none" rows="8" type="text"  name="product_price" class="form-control" id="exampleInputEmail3" value="{{$pro->product_price}}">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Mô tả thương hiệu</label>
            <input style="resize: none" rows="8" type="text"  name="product_desc" class="form-control" value="{{$pro ->product_desc}}">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Ảnh</label>
            <input type="file" name="product_image" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục sản phẩm"value="{{$pro->product_image}}">
            <img src="{{URL::to('public/uploads/product/'.$pro->product_image)}}" height="100" width="100">
        </div>
        <div class="form-group">
          <label for="exampleSelectGender">Danh mục</label>
            <select name="product_category" class="form-control" id="exampleSelectGender">
              @foreach ($cate_product as $key => $cate ) 
                                @if($cate->category_id == $pro->category_id)
                                <option selected value ="{{$cate->category_id}}">{{$cate->category_name}}</option>
                                @else
                                <option value ="{{$cate->category_id}}">{{$cate->category_name}}</option>
                                @endif
                                @endforeach  
            </select>
          </div> 
    <div class="form-group">
      <label for="exampleSelectGender">Thương hiệu</label>
        <select name="product_brand" class="form-control" id="exampleSelectGender">
          @foreach ($brand_product as $key => $brand )
          @if($brand->brand_id == $pro->brand_id)
          <option selected value ="{{$brand->brand_id}}">{{$brand->brand_name}}</option> 
          @else
          <option value ="{{$brand->brand_id}}">{{$brand->brand_name}}</option> 
          @endif  
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
      @endforeach
    </div>
  </div>
  @endsection