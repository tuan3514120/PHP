@extends('layout')
@section('content')

<div class="pages-title section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="pages-title-text text-center">
                    <h2>Thanh toán thành công</h2>
                    <ul class="text-left">
                        <li><a href="index.html">Trang chủ </a></li>
                        <li><span> // </span>Thanh toán thành công</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- pages-title-end -->
<!-- order-complete content section start -->
<section class="pages checkout order-complete section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <div class="complete-title">
                    <p>Xin chào
                        <?php
                            $shipping_name= Session::get('shipping_name');
                            if($shipping_name){
                            echo $shipping_name;    
                        }
                        ?>, 
                        Cảm ơn Anh/chị đã đặt hàng tại HTT Shop!.</p>
                </div>
                <div class="order-no clearfix">
                    <ul>
                       
                        <li>Mã đơn hàng<span> 
                            <?php
                            $name= Session::get('shipping_id');
                            if($name){
                            echo $name;    
                        }
                        ?>
                        </span></li>
                        <li>Trạng thái<span>Đang chờ xác nhận</span></li>
                        <li>Tổng cộng<span>
                            <?php
                            $order_total= Session::get('order_total');
                            if($order_total){
                            echo $order_total;    
                        }
                        ?>
                        </span></li>
                        <li>Phương thức thanh toán<span>Thanh toán khi nhận hàng</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
           
            <div class="col-xs-12 col-sm-12">
                <div class="order-address bill padding60">
                    <div class="log-title">
                        <h3><strong>Chi tiết hóa đơn</strong></h3>
                    </div>
                    <p>
                        <?php
                            $shipping_name= Session::get('shipping_name');
                            if($shipping_name){
                            echo $shipping_name;    
                        }
                        ?>
                    </p>
                    <p>
                        <?php
                        $shipping_phone= Session::get('shipping_phone');
                        if($shipping_phone){
                        echo $shipping_phone;    
                    }
                    ?>
                    </p>
                    <p>
                        <?php
                        $shipping_address= Session::get('shipping_address');
                        if($shipping_address){
                        echo $shipping_address;    
                    }
                    ?> 
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection