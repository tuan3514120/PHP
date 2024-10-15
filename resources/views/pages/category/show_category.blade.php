@extends('layout')
@section('content')


<<!-- collection section start -->

<!-- collection section end -->
<!-- featured-products section start -->
<div class="pages-title section-padding">
    <div class="container">
        <div class="row">
            @foreach($category_name as $key =>$name)
            <div class="col-xs-12">
                <div class="pages-title-text text-center">
                    <h2>{{$name->category_name}}</h2>
                    <ul class="text-left">
                        <li><a href="{{URL::to('/trang-chu')}}">Trang chủ </a></li>
                        <li><span> // </span>{{$name->category_name}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="single-products section-padding extra-padding-bottom">
    
        
    
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
               
                <div class="section-title text-center">
                    <h2></h2>
                </div>
                @endforeach
            </div>
        </div>
        <div class="wrapper">
            <ul class="load-list load-list-one">
                <li>
                    <div class="row text-center">
                        @foreach ($category_by_id as $key =>$product )

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
                        {{$category_by_id->links()}}

                        <!-- single product end -->
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- featured-products section end -->


@endsection