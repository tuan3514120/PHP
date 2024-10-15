@extends('admin_layout')
@section('admin_content')

<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Sản phẩm</h4>
              <?php
              $message= Session::get('message');
              if($message){
                  echo '<span class="text-alert">'.$message.'</span>';
                  Session::put('message',null);
              }
              ?>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                        <th>Tên sản phẩm</th>
                        <th>Giá</th>
                        <th>Ảnh</th>
                        <th>Danh mục</th>
                        <th>Thương hiệu</th>
                        <th>Mô tả sản phẩm</th>
                        <th>Trạng thái</th>
                        <th>Quản lý</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($all_product as $key => $pro)
                    <tr>
                        <td>{{$pro->product_name}}</td>
                        <td>{{$pro->product_price}}</td>
                        <td><img src="public/uploads/product/{{$pro -> product_image}}" height="500" width="500"></td>
                        <td>{{$pro->category_name}}</td>
                        <td>{{$pro->brand_name}}</td>
                        <td>{{$pro->product_desc}}</td>
                        <td><span class="text-ellipsis">
                            <?php
                        if($pro -> product_status==0){
                        ?>
                            <a href="{{URL::to('/unactive-product/'.$pro -> product_id)}}">Ẩn</a>
                        
                            <?php
                            }else{
                        ?>
                           
                        
                            <a href="{{URL::to('/active-product/'.$pro -> product_id)}}">Hiện</a>
                            <?php
                        }
                             
                        ?>
                        </span></td>
                        
              <td>
                <a href="{{URL::to('/edit-product/'.$pro -> product_id)}}" class="active styling-edit" ui-toggle-class="">
                    <i class="fa fa-edit text-success text-active"></i>
                </a>
                <a onclick="return confirm('Bạn có chắc chắn muốn xóa?')" href="{{URL::to('/delete-product/'.$pro -> product_id)}}" class="active styling-edit" ui-toggle-class="">
                    <i class="fa fa-trash text-danger text"></i>
                </a>
              </td>
                    </tr>
                   @endforeach
                  </tbody>
                </table>
                {{$all_product->links()}}
                <br>
                 
                
              </div>
            </div>
          </div>
        </div>
@endsection