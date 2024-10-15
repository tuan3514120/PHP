<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Quản lý</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('public/backend/vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{asset('public/backend/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('public/backend/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('public/backend/vendors/typicons/typicons.css')}}">
  <link rel="stylesheet" href="{{asset('public/backend/vendors/simple-line-icons/css/simple-line-icons.css')}}">
  <link rel="stylesheet" href="{{asset('public/backend/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  
  <link href="{{asset('public/backend/css/font-awesome.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />



  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{asset('public/backend/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
  <link rel="stylesheet" href="{{asset('public/backend/js/select.dataTables.min.css')}}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('public/backend/css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('public/backend/images/logo.png')}}" />
</head>
<body>
  <div class="container-scroller"> 
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
        <div>
          <a class="navbar-brand brand-logo" href="index.html">
            <img src="{{asset('public/backend/images/logo.png')}}" alt="logo" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="index.html">
            <img src="{{asset('public/backend/images/logo.png')}}" alt="logo" />
          </a>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top"> 
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
            <h1 class="welcome-text">Xin chào, <span class="text-black fw-bold">
                <?php
                $name= Session::get('admin_name');
                if($name){
                    echo $name;    
                }
                ?>
                </span></h1>
            
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item d-none d-lg-block">
            <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
              <span class="input-group-addon input-group-prepend border-right">
                <span class="icon-calendar input-group-text calendar-icon"></span>
              </span>
              <input type="text" class="form-control1">
            </div>
          </li>
          <li class="nav-item">
            <form class="search-form" action="#">
              <i class="icon-search"></i>
              <input type="search" class="form-control" placeholder="Search Here" title="Search here">
            </form>
          </li>
          <li class="nav-item dropdown d-none d-lg-block user-dropdown">
            <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="img-xs rounded-circle" src="{{URL::to('public/uploads/personal/1.jpg')}}" alt="Profile image"> </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
               
                <p class="mb-1 mt-3 font-weight-semibold">
                    <?php
                    $name= Session::get('admin_name');
                    if($name){
                    echo $name;    
                }
                ?>
                </p>
                <p class="fw-light text-muted mb-0">
                    <?php
                    $email= Session::get('admin_email');
                    if($email){
                    echo $email;    
                    }
                ?>
                </p>
              </div>
              <a class="dropdown-item"href="{{URL::to('/dashboard')}}"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> Tài khoản của tôi <span class="badge badge-pill badge-danger">!</span></a>
              <a class="dropdown-item" href="{{URL::to('/logout')}}"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Đăng xuất</a></a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{URL::to('/dashboard')}}">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Tổng quan</span>
            </a>
          </li>
          <li class="nav-item nav-category">Quản lý website</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-floor-plan"></i>
              <span class="menu-title">Quản lý đơn hàng</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="{{URL::to('/revenue')}}">Thống kê</a></li>
                <li class="nav-item"><a class="nav-link" href="{{URL::to('/manager-order')}}">Xác nhận đơn hàng</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="menu-icon mdi mdi-chart-line"></i>
              <span class="menu-title">Quản lý Voucher</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{URL::to('/insert-coupon')}}">Tạo mã giảm giá</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{URL::to('/list-coupon')}}">Mã giảm giá</a></li>
              </ul>
            </div>
          </li>
          
          
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-folder-multiple-image"></i>
              <span class="menu-title">Quản lý slide</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{URL::to('/add-slider')}}">Thêm Slide</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{URL::to('/manage-slider')}}"> Slide </a></li>
              </ul>
            </div>
            
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#blog" aria-expanded="false" aria-controls="blog">
                <i class="menu-icon mdi mdi-account-circle-outline"></i>
                <span class="menu-title">Quản lý Blog</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="blog">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{URL::to('/add-post')}}">Thêm bài viết</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{URL::to('/all-post')}}"> Bài viết </a></li>
                </ul>
              </div>
           
            
          <li class="nav-item nav-category">Quản lý thành phần</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="menu-icon mdi mdi-card-text-outline"></i>
              <span class="menu-title">Quản lý danh mục</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="{{URL::to('/add-category')}}">Thêm danh mục sản phẩm</a></li>
                <li class="nav-item"><a class="nav-link" href="{{URL::to('/all-category')}}">Danh mục sản phẩm</a></li>
             </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Quản lý thương hiệu</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="{{URL::to('/add-brand')}}">Thêm thương hiệu sản phẩm</a></li>
				        <li class="nav-item"><a class="nav-link" href="{{URL::to('/all-brand')}}">Thương hiệu sản phẩm</a></li>
              </ul>
            </div>
          </li>

         
          
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
              <i class="menu-icon mdi mdi-layers-outline"></i>
              <span class="menu-title">Quản lý sản phẩm</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="icons">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="{{URL::to('/add-product')}}">Thêm sản phẩm</a></li>
				        <li class="nav-item"><a class="nav-link" href="{{URL::to('/all-product')}}">Sản phẩm</a></li>
              </ul>
            </div>
          </li>

         
        </ul>
      </nav>
      @yield('admin_content')             
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. All rights reserved By NguyenVanQuocTuan.</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{asset('public/backend/vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{asset('public/backend/vendors/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('public/backend/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{asset('public/backend/vendors/progressbar.js/progressbar.min.js')}}"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{asset('public/backend/js/off-canvas.js')}}"></script>
  <script src="{{asset('public/backend/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('public/backend/js/template.js')}}"></script>
  <script src="{{asset('public/backend/js/settings.js')}}"></script>
  <script src="{{asset('public/backend/js/todolist.js')}}"></script>
  <script src="{{asset('public/backend/ckeditor/ckeditor.js')}}"></script>
  <script>
    CKEDITOR.replace('ckeditor');
    CKEDITOR.replace('ckeditor1');

  </script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('public/backend/js/dashboard.js')}}"></script>
  <script src="{{asset('public/backend/js/Chart.roundedBarCharts.js')}}"></script>
  
  <!-- End custom js for this page-->
</body>

</html>

