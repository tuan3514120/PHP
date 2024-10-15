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
            
           
        <div class="row margin-top">
            <div class="col-xs-12 col-sm-12">
                <div class="padding60">
                    <div class="log-title">
                        <h3><strong>Xem lại giỏ hàng</strong></h3>
                    </div>
                    <div class="table-responsive padding60">
                        <?php
                            $content= Cart::content();
                        ?>
                        <table class="wishlist-table text-center">
                            <thead>
                                <tr>
                                    <th>Tên sản phẩm</th>
                                    <th>Đơn giá</th>
                                    <th>Số lượng</th>
                                    <th>Tổng tiền</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($content as $v_content)
                                <tr>
                                    <td class="td-img text-left">
                                        <a href="#"><img src="{{URL::to('public/uploads/product/'.$v_content->options->image)}}" width="100" alt="Add Product" /></a>
                                        <div class="items-dsc">
                                            <h5><a href="#">{{($v_content->name)}}</a></h5>
                                            <p class="itemcolor">Color : <span>Blue</span></p>
                                            <p class="itemcolor">Size   : <span>SL</span></p>
                                        </div>
                                    </td>
                                    <td>{{number_format($v_content->price).''.'VNĐ'}}</td>
                                    <td>
                                        <form action="{{URL::to('/update-cart')}}" method="POST">
                                            <div class="plus-minus">
                                                {{ csrf_field() }}
                                                <input type="text" value="{{$v_content->qty}}" name="qtybutton" class="plus-minus-box">
                                                <input type="hidden" value="{{$v_content->rowId}}" name="rowId_cart" class="form-control">
                                                <input type="submit" value="Cập nhật" name="update_qty" class="btn btn-default btn-sm">				
                                            </div>
                                        </form>
                                    </td>
                                    <td>
                                        <strong>
                                        <?php
                                        $subtotal = $v_content->price * $v_content->qty;
                                        echo number_format($subtotal).''.'VNĐ';
                                        ?>	
                                        </strong>
                                    </td>
                                    <td><i class="mdi mdi-close" type="submit" href="{{URL::to('/delete-cart/'.$v_content->rowId)}}"></i></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12">
                <div class="padding60">
                    <div class="log-title">
                        <h3><strong>Phương thức thanh toán</strong></h3>
                    </div>
                            <form action="{{URL::to('/order-place')}}" method="POST">
                                {{csrf_field()}}
                            <div class="payment-options">
                            <span>
                                <label><input name="payment_option" value="1" type="checkbox">Thẻ ATM nội địa (Internet Banking)</label>
                            </span><BR>
                            <span>
                                <label><input name="payment_option" value="2" type="checkbox">Thanh toán khi nhận hàng</label>
                            </span><BR>
                            <span>
                                <label><input name="payment_option" value="3" type="checkbox">Thẻ ghi nợ</label>
                            </span><BR><BR>
                            <input type="submit" value="Đặt hàng" name="send_order_place" class="btn btn-primary btn-sm" />
                            </div>
                            

                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection