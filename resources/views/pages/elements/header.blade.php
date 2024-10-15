 <!-- header section start -->
 <header class="header-one">
    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-sm-2">
                <div class="logo">
                    <a href="{{URL::to('/trang-chu')}}"><img src="{{asset('public/frontend/img/logo.png')}}" alt="HTT Shop" /></a>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="header-middel">
                    <div class="middel-top clearfix">
                        <div class="left floatleft">
                            <p><i class="mdi mdi-clock"></i> Mon-Fri : 08:30-21:30</p>
                        </div>
                        <div class="center floatleft">
                            <form action="{{URL::to('tim-kiem')}}" method="post">
                                {{csrf_field()}}
                                <button type="submit"name="search_items"><i class="mdi mdi-magnify"></i></button>
                                <input type="text" name="keywords_submit" placeholder="Tìm kiếm sản phẩm..." />
                            </form>
                        </div>
                        <div class="right floatleft">
                            <ul class="clearfix">
                                <li><a href="#"><i class="mdi mdi-account"></i></a>
                                    <ul>
                                        <?php
                                        $customer_id=Session::get('customer_id');
                                        
                                        if($customer_id!=NULL){
                                            ?>
                                         <li><a href="{{URL::to('/logout-checkout')}}">Đăng xuất</a></li>
                                        <?php
                                        }else{
                                            ?>
                                             <li><a href="{{URL::to('/login-checkout')}}">Đăng nhập</a></li>
                                             <li><a href="{{URL::to('/login-checkout')}}">Đăng ký</a></li>
                                             <li><a href="{{URL::to('/admin')}}">Admin</a></li>
                                             <?php
                                        }
                                       ?>
                                       
                                    </ul>
                                </li>
                                <li><a href="#"><i class="mdi mdi-settings"></i></a>
                                    <ul> 
                                        <?php
                                        $customer_id=Session::get('customer_id');
                                        $shipping_id=Session::get('shipping_id');
                                        if($customer_id!=NULL && $shipping_id==NULL ){
                                            ?>
                                          <li><a href="#">Tài khoản</a></li>
                                          <li><a href="#">Yêu thích</a></li>
                                          <li><a href="{{URL::to('/checkout')}}">Thanh toán</a></li>
                                        <?php
                                        }elseif($customer_id!=NULL && $shipping_id!=NULL){
                                            ?>
                                            <li><a href="{{URL::to('/payment')}}">Thanh toán</a></li>
                                        <?php
                                        }else{
                                            ?>
                                             <li><a href="#">Tài khoản</a></li>
                                             <li><a href="#">Danh sách yêu thích</a></li>
                                             <li><a href="{{URL::to('/login-checkout')}}">Thanh toán</a></li>
                                             <?php
                                        }
                                       ?>
                                       
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="mainmenu">
                        <nav>
                            <ul>
                                <li><a href="{{URL::to('/trang-chu')}}">Trang chủ</a></li>
                                <li><a href="#">Danh mục</a>
                                    <ul class="dropdown">
                                        @foreach ($category as $key =>$cate )
                                        <li><a href="{{URL::to('/danh-muc/'.$cate->category_id)}}">{{$cate->category_name}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li><a href="#">Thương hiệu</a>
                                    <ul class="dropdown">
                                        @foreach ($brand as $key =>$brand )
                                        <li><a href="{{URL::to('/thuong-hieu/'.$brand->brand_id)}}">{{$brand->brand_name}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li><a href="{{URL::to('/blog')}}">Blog</a></li>
                                <li><a href="{{URL::to('/team')}}">Giới thiệu</a></li>
                                <li><a href="{{URL::to('/mail')}}">Liên hệ</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- mobile menu start -->
                    <div class="mobile-menu-area">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul>
                                    <li><a href="{{URL::to('/trang-chu')}}">Trang chủ</a>
                                    </li>
                                    <li><a href="shop.html">Danh mục</a>
                                        <ul class="dropdown">
                                            <li><a href="#">Shirts & Top</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Thương hiệu</a>
                                        <ul>
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="blog.html">Blog</a>
                                        <ul>
                                            <li><a href="blog-style-1.html">Blog Style One</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="contact.html">Liên hệ</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="cart-itmes">
                    <a class="cart-itme-a" href="{{URL::to('/show-cart')}}">
                        <i class="mdi mdi-cart"></i>
                        <strong>...</strong>
                    </a>
                    
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header section end -->