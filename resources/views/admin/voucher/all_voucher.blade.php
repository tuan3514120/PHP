@extends('admin_layout')
@section('admin_content')

<div class="col-lg-12 grid-margin stretch-card">
<div class="card">
    <div class="card-body">
      <h4 class="card-title">Mã giảm giá</h4>
      <div class="table-responsive pt-3">
        <?php
        $message= Session::get('message');
        if($message){
            echo '<span class="text-alert">'.$message.'</span>';
            Session::put('message',null);
        }
        ?>
        <table class="table table-dark">
          <thead>
            <tr>
              <th>
                Tên mã giảm giá
              </th>
              <th>
                Mã giảm giá
              </th>
              <th>
                Số lượng
              </th>
              <th>
                Phân loại
              </th>
              
              <th>
               Tùy chọn
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($coupon as $key => $voucher)
            <tr>
            <td>{{$voucher->coupon_name}}</td>             
            <td>{{$voucher->coupon_code}}</td>
            <td>{{$voucher->coupon_qty}}</td>
            <td>
              <?php
              if($voucher->coupon_list==1){
           ?>
              Giảm {{$voucher->coupon_number}} (%)                 
               <?php
               }else{
           ?>
              Giảm {{$voucher->coupon_number}}(VNĐ)
               <?php
           }  
               ?>
            </td>
            
              <td>
                <a onclick="return confirm('Bạn có chắc chắn muốn xóa?')" href="{{URL::to('/delete-coupon/'.$voucher->coupon_id)}}" class="active styling-edit" ui-toggle-class="">
                    <i class="fa fa-trash text-danger text"></i>
                </a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection