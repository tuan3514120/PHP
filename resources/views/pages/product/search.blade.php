@extends('layout')
@section('content')


<<!-- collection section start -->

<!-- collection section end -->
<!-- featured-products section start -->
<section class="single-products section-padding extra-padding-bottom"> 
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-title text-center">
                    <h2>Kết quả tìm kiếm</h2>
                </div>
            </div>
        </div>
        <div class="wrapper">
            <ul class="load-list load-list-one">
                <li>
                    <div class="row text-center">
                        @foreach ($search_product as $key =>$product )

                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="single-product">
                                    <div class="product-img">
                                    <div class="pro-type">
                                        <span>new</span>
                                    </div>
                                    <a href="#"><img src="{{URL::to('public/uploads/product/'.$product->product_image)}}" alt="Product Title" /></a>
                                    
                                </div>
                                <div class="product-dsc">
                                    <p><a href="#">{{$product->product_name}}</a></p>
                                    <span>{{number_format($product->product_price).''.'VNĐ'}}</span>
                                    <p><a href="{{URL::to('/chi-tiet/'.$product->product_id)}}">Xem chi tiết</a></p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- single product end -->
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- featured-products section end -->


@endsection