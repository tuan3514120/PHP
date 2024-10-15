@extends('layout')
@section('content')

<div class="pages-title section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="pages-title-text text-center">
                    <h2>Đăng nhập</h2>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- pages-title-end -->
<!-- login content section start -->
<section class="pages login-page section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="main-input padding60">
                    <div class="log-title">
                        <h3><strong>Dành Cho Khách Hàng Đã Có Tài Khoản</strong></h3>
                    </div>
                    <?php
        $message= Session::get('message');
        if($message){
            echo '<span class="text-alert">'.$message.'</span>';
            Session::put('message',null);
        }
        ?>
                    <div class="login-text">
                        
                        <div class="custom-input">
                            <p>Nếu bạn đã có tài khoản? Vui lòng đăng nhập!</p>
                            <form action="{{URL::to('/login-customer')}}" method="post">
                                {{csrf_field () }}
                                <input type="text" name="email_acc" placeholder="Email" />
                                <input type="password" name="password_acc" placeholder="Password" />
                                <a class="forget" href="#">Quên mật khẩu?</a><br><br>
                                <button type="submit" class ="btn btn-default">Đăng nhập</button>
                             </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="main-input padding60 new-customer">
                    <div class="log-title">
                        <h3><strong>Dành Cho Khách Hàng Mới</strong></h3>
                    </div>
                    <div class="custom-input">
                        <form action="{{URL::to('/add-customer')}}" method="post">
                            {{csrf_field() }}
                            <input type="text" name="customer_name" placeholder="Nhập tên...." />
                            <input type="email" name="customer_email" placeholder="Nhập Email.." />         
                            <input type="password" name="customer_password" placeholder="Nhập mật khẩu" />
                            <input type="text" name="customer_phone" placeholder="Nhập số điện thoại.." />
                            <label class="first-child">
                                <input type="radio" name="rememberme" value="forever">
                                Luôn luôn nhận thông báo mới nhất từ chúng tôi!
                            </label>
                            <br><br>
                            <button type="submit" class ="btn btn-default">
                               Đăng kí</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection