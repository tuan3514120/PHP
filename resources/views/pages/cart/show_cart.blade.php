@extends('layout')
@section('content')

<div class="pages-title section-padding">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="pages-title-text text-center">
					<h2>Giỏ hàng</h2>
					<ul class="text-left">
						<li><a href="index.html">Trang chủ </a></li>
						<li><span> // </span>Giỏ hàng</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<section class="pages cart-page section-padding">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="table-responsive padding60">
					<?php
						$content= Cart::content();
					?>
					<table class="wishlist-table text-center">
						@if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @elseif(session()->has('error'))
                     <div class="alert alert-danger">
                        {{ session()->get('error') }}
                    </div>
                @endif
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
								<td><a class="mdi mdi-close" href="{{URL::to('/delete-cart/'.$v_content->rowId)}}"></a></td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="row margin-top">
			<div class="col-sm-6">
				<div class="single-cart-form padding60">
					<div class="log-title">
						<h3><strong>Mã giảm giá</strong></h3>
					</div>
					<div class="cart-form-text custom-input">
						<p>Nhập mã giảm giá (Nếu có)!</p>
						<form action="{{URL::to('/check-coupon')}}" method="post">
							{{ csrf_field() }}
							<input type="text" name="coupon" placeholder="Nhập mã giảm giá của bạn tại đây!..." />
							<div class="submit-text coupon">
								<button type="submit" name= "check_coupon">Áp dụng mã giảm giá </button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="single-cart-form padding60">
					<div class="log-title">
						<h3><strong>Chi tiết thanh toán</strong></h3>
					</div>
					<div class="cart-form-text pay-details table-responsive">
						<table>
							<tbody>
								<tr>
									<th>Tổng tiền hàng</th>
									<td>{{Cart::subtotal(0).''.'VNĐ'}}</td>
								</tr>
								<tr>
									<th>Phí vận chuyển</th>
									<td></td>
								</tr>
								<tr>
									<th>Thuế</th>
									<td>{{Cart::tax(0).' '.'VNĐ'}}</td>
								</tr>
								<tr>
									<th>Voucher</th>
									
										
									</td>
								</tr>
							</tbody>
							<tfoot>
								<tr>
									<th class="tfoot-padd">Tổng thanh toán</th>
									<td class="tfoot-padd">{{Cart::total(0).' '.'VNĐ'}}</td>
								</tr>
							</tfoot>
							
						</table>
						<?php
                                        $customer_id=Session::get('customer_id');
                                        $shipping_id=Session::get('shipping_id');
                                        if($customer_id!=NULL && $shipping_id==NULL ){
                                            ?>
										  <a class="btn btn-default check_out" href="{{URL::to('/checkout')}}"> Thanh toán </a>
										  <?php
                                        }elseif($customer_id!=NULL && $shipping_id!=NULL){
                                            ?>
							 			<a class="btn btn-default check_out" href="{{URL::to('/payment')}}"> Thanh toán </a>
							 			<?php
                                        }else{
                                            ?>
										<a class="btn btn-default check_out" href="{{URL::to('/login-checkout')}}"> Thanh toán </a>
                                        <?php
                                        }
                                       ?>
						
						
					</div>
				</div>
			</div>
		</div>
	
	</div>
</section>
@endsection