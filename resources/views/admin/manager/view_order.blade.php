@extends('admin_layout')
@section('admin_content')

<div class="col-lg-11 grid-margin stretch-card">
<div class="card">
    <div class="card-body">
      <h4 class="card-title">Chi tiết đơn hàng</h4>
      <div class="table-responsive pt-3">
        <table class="table table-dark">
          <thead>
            <tr>
                <th>
                    Tên sản phẩm
                  </th>
                  <th>
                   Số lượng
                  </th>
                  <th>
                   Đơn giá
                  </th>
                  <th>
                   Tổng tiền(Đã bao gồm VAT)
                  </th>
                  
                </tr>
              </thead>
              <tbody>
                
                <tr>
                    <td>{{$order_by_id->product_name}}</td>             
                    <td>{{$order_by_id->product_sales_quantity}}</td>
                    <td>{{$order_by_id->product_price.' '.'VNĐ'}}</td>
                    <td>{{$order_by_id->order_total.' '.'VNĐ'}}</td>

              
                
            </tr>
          </tbody>
        </table>
      </div>
    <br><br>
    <h4 class="card-title">Chi tiết khách hàng</h4>
      <div class="table-responsive pt-3">
        <table class="table table-dark">
          <thead>
            <tr>
                <th>
                    Tên khách hàng
                  </th>
                  <th>
                   Email
                  </th>
                  <th>
                   Số điện thoại
                  </th>
                  
                </tr>
              </thead>
              <tbody>
                
                <tr>
                    <td>{{$order_by_id->customer_name}}</td>             
                    <td>{{$order_by_id->customer_email}}</td>
                    <td></a>{{$order_by_id->customer_phone}}</td>
               
                
            </tr>
          </tbody>
        </table>
      </div>
    <br><br>
  
          <h4 class="card-title">Chi tiết vận chuyển</h4>
          <div class="table-responsive pt-3">
            <table class="table table-dark">
              <thead>
                <tr>
                  <th>
                    Tên người nhận
                  </th>
                  <th>
                    Địa chỉ
                  </th>
                  <th>
                   Số điện thoại
                  </th>
                  <th>
                    Ghi chú
                  </th>
                </tr>
              </thead>
              <tbody>
                
                <tr>
                    <td>{{$order_by_id->shipping_name}}</td>             
                    <td>{{$order_by_id->shipping_address}}</td>
                    <td>{{$order_by_id->shipping_phone}}</td> 
                    <td>{{$order_by_id->shipping_notes}}</a></td>
                    
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</div>
</div>
</div>
</div>
</div>
    
@endsection