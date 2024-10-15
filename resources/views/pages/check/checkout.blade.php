@extends('layout')
@section('content')

<div class="pages-title section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="pages-title-text text-center">
                    <h2>Thanh toán</h2>
                    <ul class="text-left">
                        <li><a href="{{URL::to('/')}}">Trang chủ </a></li>
                        <li><span> // </span>Thanh toán</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- pages-title-end -->
<!-- Checkout content section start -->
<section class="pages checkout section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-13">
                <div class="main-input single-cart-form padding60">
                    <div class="log-title">
                        <h3><strong>Thông tin người nhận</strong></h3>
                    </div>
                    <div class="custom-input">
                        <form action="{{URL::to('/save-checkout')}}" method="post">
                            {{csrf_field() }}
                            <input type="text" name="shipping_email" placeholder="Email...." />
                            <input type="text" name="shipping_name" placeholder="Tên người nhận..." />          
                            <input type="text" name="shipping_phone" placeholder="Số điện thoại...." />
                            <input type="text" name="shipping_address" placeholder="Địa chỉ người nhận...." />
                            <div class="custom-mess">
                                <textarea rows="2" placeholder="Ghi chú..." name="shipping_notes"></textarea>
                            </div>
                            <br>
                            <input type="submit" name="send_order" class="btn btn-primary btn-sm" />
                        </form>
                    </div>
                </div>
            </div>
           
       
    </div>
</section>
@endsection