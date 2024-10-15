<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin Login </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('public/backend/vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{asset('public/backend/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('public/backend/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('public/backend/vendors/typicons/typicons.css')}}">
  <link rel="stylesheet" href="{{asset('public/backend/vendors/simple-line-icons/css/simple-line-icons.css')}}">
  <link rel="stylesheet" href="{{asset('public/backend/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('public/backend/css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('public/backend/images/logo.png')}}" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                <div class="brand-logo">
                    <img src="{{asset('public/backend/images/logo.png')}}" alt="logo">
                  </div>
              <h4>Đăng nhập để tiếp tục!</h4>
              <br>
              <?php
	            $message= Session::get('message');
	            if($message){
		        echo '<span class="text-alert">'.$message.'</span>';
		        Session::put('message',null);
	            }
	          ?>
                <form action="{{URL::to('/admin-dashboard')}}" method="POST">
                    {{ csrf_field() }}
                <div class="form-group">                 
                  <input type="text" class="form-control form-control-lg"name="admin_email" id="exampleInputEmail1" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg"name="admin_password" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="mt-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit" value="Đăng nhập" name="login">Đăng nhập</button>
                </div>
                </form>
                <div class="my-2 d-flex justify-content-between align-items-center">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" class="form-check-input">
                        Nhớ mật khẩu
                      </label>
                    </div>
                    <a href="#" class="auth-link text-black">Quên mật khẩu?</a>
                  </div>
                  <div class="text-center mt-4 fw-light">
                    Không có tài khoản? <a href="" class="text-primary">Đăng ký</a>
                  </div>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{asset('public/backend/vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{asset('public/backend/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{asset('public/backend/js/off-canvas.js')}}"></script>
  <script src="{{asset('public/backend/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('public/backend/js/template.js')}}"></script>
  <script src="{{asset('public/backend/js/settings.js')}}"></script>
  <script src="{{asset('public/backend/js/todolist.js')}}"></script>
  <!-- endinject -->
</body>

</html>
