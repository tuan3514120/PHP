@extends('admin_layout')
@section('admin_content')

<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        @foreach ($edit_category as $key => $edit_value )
        <h4 class="card-title">Sửa danh mục sản phẩm</h4>
        
            <?php
            $message= Session::get('message');
            if($message){
                echo '<span class="text-alert">'.$message.'</span>';
                Session::put('message',null);
            }
            ?>
          <form class="forms-sample"action="{{URL::to('/update-category/'.$edit_value->category_id)}}" method="post">
            {{ csrf_field() }}
          <div class="form-group">
            <label for="exampleInputName1">Tên danh mục</label>
            <input type="text" name="category_product_name" class="form-control" id="exampleInputName1" value="{{$edit_value -> category_name}}">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Mô tả danh mục</label>
            <input style="resize: none" rows="8" type="text"  name="category_product_desc" class="form-control" value="{{$edit_value -> category_desc}}">
          </div>
            
          <button type="submit" class="btn btn-primary me-2">Thêm</button>
          
        </form>
      </div>
      @endforeach
    </div>
  </div>
  @endsection