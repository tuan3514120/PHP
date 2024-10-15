<!doctype html>
<html class="no-js" lang="">
    <head>
	<meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>HTT Shop</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/frontend/img/logo.png')}}">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
		<!-- google fonts -->
		<link href='https://fonts.googleapis.com/css?family=Lato:400,900,700,300' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
		<!-- all css here -->
		<!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="{{asset('public/frontend/css/bootstrap.min.css')}}">
		<!-- animate css -->
        <link rel="stylesheet" href="{{asset('public/frontend/css/animate.css')}}">
		<!-- pe-icon-7-stroke -->
		<link rel="stylesheet" href="{{asset('public/frontend/css/materialdesignicons.min.css')}}">
		<!-- pe-icon-7-stroke -->
		<link rel="stylesheet" href="{{asset('public/frontend/css/jquery.simpleLens.css')}}">
		<!-- jquery-ui.min css -->
        <link rel="stylesheet" href="{{asset('public/frontend/css/jquery-ui.min.css')}}">
		<!-- meanmenu css -->
        <link rel="stylesheet" href="{{asset('public/frontend/css/meanmenu.min.css')}}">
		<!-- nivo.slider css -->
        <link rel="stylesheet" href="{{asset('public/frontend/css/nivo-slider.css')}}">
		<!-- owl.carousel css -->
        <link rel="stylesheet" href="{{asset('public/frontend/css/owl.carousel.css')}}">
		<!-- style css -->
		<link rel="stylesheet" href="{{asset('public/frontend/style.css')}}">
		<!-- responsive css -->
        <link rel="stylesheet" href="{{asset('public/frontend/css/responsive.css')}}">
		<!-- modernizr js -->
		<link rel="stylesheet" href="{{asset('public/frontend/css/sweetalert.css')}}">

        <script src="{{asset('public/frontend/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        @include('pages.elements.header')
        
		
        @yield('content')
		
        
					
        <!-- service section start -->
		<section class="service-area section-padding">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="section-title text-center">
							<h2>Dịch vụ của chúng tôi</h2>
						</div>
					</div>
				</div>
				<div class="row text-center">
					<div class="col-sm-4">
						<div class="service-text">
							<i class="mdi mdi-truck"></i>
							<h4>Vận chuyển tận nhà</h4>
							<p>Nhanh gọn và lẹ, chúng tôi cam kết khách hàng sẽ nhận được hàng chỉ sau 1 - 3 ngày <br /></p>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="service-text">
							<i class="mdi mdi-lock"></i>
							<h4>Bảo mật thanh toán</h4>
							<p>Bạn sẽ không bị lộ bất kỳ thông tin cá nhân <br /> hay thông tin riêng tư nào.</p>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="service-text">
							<i class="mdi mdi-rotate-left"></i>
							<h4>30 ngày đổi trả hàng</h4>
							<p>Nếu bạn không hài lòng với sản phẩm của chúng tôi <br /> Chúng tôi sẽ hỗ trợ đổi trả cho bạn</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- service section end -->
      	@include('pages.elements.detail')
        <!-- footer section start -->
		@include('pages.elements.footer')
        

		<div id="fb-root"></div>
		<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v12.0" nonce="h8demeEu"></script>
		<!-- all js here -->
		<!-- jquery latest version -->
        <script src="{{asset('public/frontend/js/vendor/jquery-1.12.3.min.js')}}"></script>
		<!-- bootstrap js -->
        <script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
		<!-- owl.carousel js -->
        <script src="{{asset('public/frontend/js/owl.carousel.min.js')}}"></script>
		<!-- meanmenu js -->
        <script src="{{asset('public/frontend/js/jquery.meanmenu.js')}}"></script>
		<!-- countdown JS -->
        <script src="{{asset('public/frontend/js/countdown.js')}}"></script>
		<!-- nivo.slider JS -->
        <script src="{{asset('public/frontend/js/jquery.nivo.slider.pack.js')}}"></script>
		<!-- simpleLens JS -->
        <script src="{{asset('public/frontend/js/jquery.simpleLens.min.js')}}"></script>
		<!-- jquery-ui js -->
        <script src="{{asset('public/frontend/js/jquery-ui.min.js')}}"></script>
		<!-- load-more js -->
        <script src="{{asset('public/frontend/js/load-more.js')}}"></script>
		<!-- plugins js -->
        <script src="{{asset('public/frontend/js/plugins.js')}}"></script>
		<!-- main js -->
        <script src="{{asset('public/frontend/js/main.js')}}"></script>

		

	</body>
	</html>