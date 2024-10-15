@extends('layout')
@section('content')

 <!-- pages-title-start -->
 <div class="pages-title section-padding">
    <div class="container">
        <div class="row">
            @foreach($post_detail as $key =>$pt)
            <div class="col-xs-12">
                <div class="pages-title-text text-center">
                    <h2>{{$pt->post_title}}</h2>
                    <ul class="text-left">
                        <li><a href="{{URL::to('/trang-chu')}}">Trang chủ </a></li>
                        <li><span> // </span><a href="{{URL::to('/blog')}}"> blog </a></li>
                        <li><span> // </span>{{$pt->post_title}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- pages-title-end -->
<!-- blog-section-start -->
<section class="pages blog single-blog-area section-padding-top">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-9">
                <div class="single-blog-page">
                    <div class="single-blog-img">
                        <img src="{{URL::to('public/uploads/post/'.$pt->post_image)}}" alt="" />
                    </div>
                    <div class="padding30">
                        <div class="blog-text">
                            <div class="post-title">
                                <h3>{{$pt->post_title}}</h3>
                                <ul class="clearfix">
                                    <li><i class="pe-7s-user"></i>Đăng bởi :<a href="#">Tuấn</a><span>|</span></li>
                                    <li><i class="pe-7s-comment"></i><a href="#">Jun 25, 2016</a><span>|</span></li>
                                </ul>
                            </div>
                            <p>{{$pt->post_desc}}.</p>
                            <div class="italic">
                                <p>“Bài viết độc quyền tại HTT Shop, vui lòng không copy dưới mọi hình thức!”</p>
                            </div>
                            <p></p>
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
    </div>
</section>
@endforeach
<!-- blog section end -->
<!-- related post section start -->


@endsection