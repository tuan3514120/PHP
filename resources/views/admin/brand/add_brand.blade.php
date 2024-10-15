@extends('admin_layout')
@section('admin_content')

<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Thêm thương hiệu sản phẩm</h4>
        
        <?php
        $message= Session::get('message');
        if($message){
            echo '<span class="text-alert">'.$message.'</span>';
            Session::put('message',null);
        }
        ?>
          <form class="forms-sample" action="{{URL::to('/save-brand')}}" method="post">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="exampleInputName1">Tên danh mục</label>
            <input type="text" name="brand_product_name" class="form-control" id="exampleInputName1" placeholder="Name">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Mô tả thương hiệu</label>
            <input type="text"  name="brand_product_desc" class="form-control"  placeholder="Desc">
          </div>
          <div class="form-group">
            <label for="exampleSelectGender">Trạng thái</label>
              <select name="brand_product_status" class="form-control" id="exampleSelectGender">
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