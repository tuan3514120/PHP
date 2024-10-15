@extends('layout')
@section('content')


<div class="pages-title section-padding">
    <div class="container">
        <div class="row">
            @foreach ($product_detail as $key =>$value )
            <div class="col-xs-12">
                <div class="pages-title-text text-center">
                    <h2>{{$value->product_name}}</h2>
                    <ul class="text-left">
                        <li><a href="{{URL::to('/trang-chu')}}">Trang chủ </a></li>
                        <li><span> // </span><a href="">Shop </a></li>
                        <li><span> // </span>{{$value->product_name}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="product-details pages section-padding-top">
    <div class="container">
      
        <div class="row">
            <div class="single-list-view">
                <div class="col-xs-12 col-sm-5 col-md-4">
                    <div class="quick-image">
                        <div class="single-quick-image text-center">
                            <div class="list-img">
                                <div class="product-img tab-content">
                                    <div class="simpleLens-container tab-pane active fade in" id="sin-2">
                                        <div class="pro-type sell">
                                            <span>sell</span>
                                        </div>
                                        <a class="simpleLens-image" data-lens-image="img/products/z2.jpg" href="#"><img src="{{URL::to('public/uploads/product/'.$value->product_image)}}" alt="" ></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                <form action="{{URL::to('/save-cart')}}" method="POST">
                    {{csrf_field()}}
                <div class="col-xs-12 col-sm-7 col-md-8">
                    <div class="quick-right">
                        <div class="list-text">
                            <h3> {{$value->product_name}}</h3>
                            <span>Mã sản phẩm: {{$value ->product_id}}</span>   
                            <h5><del>$79.30</del> {{number_format($value->product_price).'VNĐ'}}</h5>
                            <p>{{$value->product_desc}}</p>
                            <div class="all-choose">
                                <div class="s-shoose">
                                    <h5>Thương hiệu</h5>
                                    <div class="color-select clearfix">
                                        {{$value->brand_name}}
                                    </div>
                                </div>
                                <div class="s-shoose">
                                    <h5> Danh mục </h5>
                                    {{$value->category_name}}
                                </div>
                                <div class="s-shoose">
                                    <h5>Số lượng</h5>
                                        <div class="plus-minus">
                                            <input type="number" value="1" min="1" name="qty" class="plus-minus-box">
                                            <input name="productid_hidden" type="hidden" value="{{$value->product_id}}"/>
                                        </div>
                                </div>
                            </div>
                            <div class="list-btn">

                                <button type="submit" class="btn btn-fefault cart">
                                    <i class="fa fa-shopping-cart"></i>
                                    Thêm vào giỏ hàng
                                </button>
                            </form>
                        </div>
                        <div class="share-tag clearfix">
                            <ul class="blog-share floatleft">
                                <li><h5>share </h5></li>
                                <li><a href="#"><i class="mdi mdi-facebook"></i></a></li>
                                <li><a href="#"><i class="mdi mdi-twitter"></i></a></li>
                                <li><a href="#"><i class="mdi mdi-linkedin"></i></a></li>
                                <li><a href="#"><i class="mdi mdi-vimeo"></i></a></li>
                                <li><a href="#"><i class="mdi mdi-dribbble"></i></a></li>
                                <li><a href="#"><i class="mdi mdi-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
        <!-- single-product item end -->
        <!-- reviews area start -->
       @endforeach
    </div>
</div>
<!-- product-details section end -->
<!-- related-products section start -->
<section class="single-products section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-title text-center">
                    <h2>Sản phẩm liên quan</h2>
                </div>
            </div>
        </div>
        <div class="row text-center">
            @foreach ($recomend as $key =>$relate )
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="single-product">
                    <div class="product-img">
                        <div class="pro-type">
                            <span>new</span>
                        </div>
                        <a href="#"><img src="{{URL::to('public/uploads/product/'.$relate->product_image)}}" alt="Product Title" /></a>
                        <div class="actions-btn">
                            <a href="#"><i class="mdi mdi-cart"></i></a>
                            <a href="#" data-toggle="modal" data-target="#quick-view"><i class="mdi mdi-eye"></i></a>
                            <a href="#"><i class="mdi mdi-heart"></i></a>
                        </div>
                    </div>
                    <div class="product-dsc">
                        <p><a href="#">{{$relate->product_name}}</a></p>
                        <span>{{number_format($relate->product_price).''.'VNĐ'}}</span>
                        <p><a href="{{URL::to('/chi-tiet/'.$relate->product_id)}}">Xem chi tiết</a></p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection