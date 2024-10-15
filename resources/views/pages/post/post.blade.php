@extends('layout')
@section('content')
<div class="pages-title section-padding">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="pages-title-text text-center">
							<h2>Blog</h2>
							<ul class="text-left">
								<li><a href="{{URL::to('/trang-chu')}}">Trang chủ  </a></li>
								<li><span> // </span>Blog</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
<section class="latest-blog section-padding">
    <div class="container">
        <ul class="blog-row clearfix">
            <li>
                <div class="row">
                    @foreach ($all_post as $key =>$p)
                    <div class="col-sm-4">
                        <div class="l-blog-text">
                            <div class="banner"><a href="{{URL::to('/detail/'.$p->post_id)}}"><img src="{{URL::to('public/uploads/post/'.$p->post_image)}}" alt="" /></a></div>
                            <div class="s-blog-text">
                                <h4><a href="{{URL::to('/detail/'.$p->post_id)}}">{{$p->post_title}}</a></h4>
                                <span>Đăng bởi : <a href="#">Tuấn</a></span>
                                <p>{{$p->post_content}}</p>
                            </div>
                            <div class="date-read clearfix">
                                <a href="#"><i class="mdi mdi-clock"></i> 2/10/2021</a>
                                <a href="{{URL::to('/detail/'.$p->post_id)}}">đọc thêm</a>
                            </div>
                        </div>
                       
                    </div> 
                    @endforeach
                </div>
            </li>
        </ul>
        {{$all_post->links()}}
    </div>
</section>

@endsection