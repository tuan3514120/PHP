@extends('admin_layout')
@section('admin_content')

<div class="col-lg-12 grid-margin stretch-card">
<div class="card">
    <div class="card-body">
      <h4 class="card-title">Banner Slide</h4>
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
                Tên Slide
              </th>
              <th>
                Hình ảnh
              </th>
              <th>
                Mô tả 
              </th>
              <th>
                Tình trạng
              </th>
              <th>
                Tùy chọn
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($all_slide as $key =>$slide)
            <tr>
              <td>{{$slide->slider_name}}</td>             
              <td><img src="public/uploads/slider/{{$slide->slider_image}}"height="100" width="100"></td>
              <td>{{$slide->slider_desc}}</td>
              <td>
                <?php
                if($slide->slider_status==0){
            ?>
                <a href="{{URL::to('/unactive-slide/'.$slide->slider_id)}}">Ẩn</a>
            
                <?php
                }else{
            ?>
                <a href="{{URL::to('/active-slide/'.$slide->slider_id)}}">Hiện</a>
                <?php
            }  
            ?>
              </td>
              <td>
                <a onclick="return confirm('Bạn có chắc chắn muốn xóa?')" href="{{URL::to('/delete-slide/'.$slide->slider_id)}}" class="active styling-edit" ui-toggle-class="">
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