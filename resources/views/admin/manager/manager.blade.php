@extends('admin_layout')
@section('admin_content')

<div class="col-lg-10 grid-margin stretch-card">
<div class="card">
    <div class="card-body">
  
      <h4 class="card-title">Xác nhận đơn hàng</h4>
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
                Tên khách hàng
              </th>
              <th>
                Trạng thái
              </th>
              <th>
               Giá trị đơn hàng
              </th>
              <th>
               Chi tiết
              </th>
              <th>
                Tùy chọn
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($all_order as $key => $order)
            <tr>
                <td>{{$order ->customer_name}}</td>             
                <td>{{$order->order_status}}</td>
                <td>{{$order->order_total.' '.'VNĐ'}}</td>
                <td><a href="{{URL::to('/view-order/'.$order ->order_id)}}">Xem chi tiết</a></td>
                <td><a href="{{URL::to('/delete-order/'.$order ->order_id)}}">Hủy</a></td>
                
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection