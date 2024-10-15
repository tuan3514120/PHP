@extends('admin_layout')
@section('admin_content')

<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Thêm mã giảm giá</h4>
        
        <?php
        $message= Session::get('message');
        if($message){
            echo '<span class="text-alert">'.$message.'</span>';
            Session::put('message',null);
        }
        ?>
          <form class="forms-sample" action="{{URL::to('/insert-voucher')}}" method="post">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="exampleInputName1">Tên mã giảm giá</label>
            <input type="text" name="coupon_name" class="form-control" id="exampleInputName1" placeholder="Name">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Mã giảm giá</label>
            <input type="text"  name="coupon_code" class="form-control" id="exampleInputEmail3" placeholder="Code">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Số lượng</label>
            <input type="text"  name="coupon_qty" class="form-control" id="exampleInputEmail3" placeholder="Number">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Phân loại</label>
            <select name="coupon_list" class="form-control" id="exampleSelectGender">
              <option value ="">--Chọn--</option>
              <option value ="2">Đơn giá</option>
              <option value ="1">%</option>
            </select>        
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Nhập số % hoặc số tiền giảm</label>
            <input type="text"  name="coupon_number" class="form-control" id="exampleInputEmail3" placeholder="Price">
          </div>
          <button type="submit" name="add_coupon" class="btn btn-primary me-2">Thêm</button>
        </form>
      </div>
    </div>
  </div>
  @endsection