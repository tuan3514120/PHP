@extends('admin_layout')
@section('admin_content')

<div class="col-lg-12 grid-margin stretch-card">
<div class="card">
    <div class="card-body">
      <h4 class="card-title">Danh mục sản phẩm</h4>
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
                Tên danh mục
              </th>
              <th>
                Trạng thái
              </th>
              <th>
                Ngày thêm
              </th>
              <th>
                Tùy chọn
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($all_category as $key => $cate_pro)
            <tr>
                <td>{{$cate_pro -> category_name}}</td>             
              <td>
                <?php
            if($cate_pro -> category_status==0){
            ?>
                <a href="{{URL::to('/unactive-category/'.$cate_pro -> category_id)}}">Ẩn</a> 
                <?php
                }else{
            ?>
                <a href="{{URL::to('/active-category/'.$cate_pro -> category_id)}}">Hiện</a>
                <?php
            }     
            ?>
              </td>
              <td> {{ $cate_pro -> created_at}}
              </td>
               
            
              <td>
                <a href="{{URL::to('/edit-category/'.$cate_pro -> category_id)}}" class="active styling-edit" ui-toggle-class="">
                    <i class="fa fa-edit text-success text-active"></i>
                </a>
                <a onclick="return confirm('Bạn có chắc chắn muốn xóa?')" href="{{URL::to('/delete-category/'.$cate_pro -> category_id)}}" class="active styling-edit" ui-toggle-class="">
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