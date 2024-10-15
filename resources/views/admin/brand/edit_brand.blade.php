@extends('admin_layout')
@section('admin_content')

<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        @foreach ($edit_brand as $key => $edit_value )
        <h4 class="card-title">Cập nhật thương hiệu</h4>
        
            <?php
            $message= Session::get('message');
            if($message){
                echo '<span class="text-alert">'.$message.'</span>';
                Session::put('message',null);
            }
            ?>
          <form class="forms-sample"action="{{URL::to('/update-brand/'.$edit_value->brand_id)}}" method="post">
            {{ csrf_field() }}
          <div class="form-group">
            <label for="exampleInputName1">Tên thương hiệu</label>
            <input type="text" value="{{$edit_value -> brand_name}}" name="brand_product_name" class="form-control" id="exampleInputName1">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Mô tả thương hiệu</label>
            <input style="resize: none" rows="8" type="text"  name="brand_product_desc" class="form-control" value="{{$edit_value -> brand_desc}}">
          </div>
            
          <button type="submit" class="btn btn-primary me-2">Thêm</button>
          
        </form>
      </div>
      @endforeach
    </div>
  </div>
  @endsection