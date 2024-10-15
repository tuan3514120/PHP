@extends('layout')
@section('content')

<div class="pages-title section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="pages-title-text text-center">
                    <h2>About</h2>
                    <ul class="text-left">
                        <li><a href="{{URL::to('/trang-chu')}}">Trang chủ </a></li>
                        <li><span> // </span>About</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- pages-title-end -->
<!-- about-us-section-start -->
<div class="pages about-us section-padding">
    <div class="container">
        <div class="row">
            <div class="main-padding section-padding-top clearfix">
                <div class="col-sm-12 col-md-5">
                    <div class="about-img">
                        <img src="{{asset('public/frontend/img/logo1.png')}}" alt="" />
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="about-text">
                        <div class="about-author">
                            <h3>HTT Cosmetics – Save The Best For You <br /></h3>
                        </div>
                        <p><h4>Chỉ là một câu chuyện nhỏ để các bạn hiểu được mình sẽ tìm được gì tại shop...</h4>
                            <br>
                            <h4>Tại sao HTT cosmetics lại chỉ muốn là một cửa hàng nhỏ chứ không phải một drugstores?</h4>
                            <br>
                            <b>“Save The Best For You”</b> – Slogan cũng như định hướng hoạt động của HTT. Chúng mình làm việc với mục tiêu và định hướng là mang đến những sản phẩm tốt nhất đến tay mỗi người. Nên có thể tại TNV bạn không thể tìm thấy đa dạng sản phẩm như ở một drugstores, bởi vì những gì “tốt nhất”, TNV đã “chọn lọc” sẵn cho các bạn rồi :).
                            <br><br><br>
                            <h4>Làm thế nào để thực hiện điều đó?</h4>
                            <br>
                            Sản phẩm của HTT không nhất thiết phải là sản phẩm có công dụng tốt nhất mà phải phù hợp 3 tiêu chí của bọn mình: Chất lượng, Giá thành và Phù hợp.
                            <br>
                            Để làm được điều này mỗi một mặt hàng được đặt trên kệ của HTT đều đã qua chọn lọc cẩn thận về:
                            <br>
                            <b>Nguồn gốc, chất lượng:</b> Việc xem qua hầu hết những review khen hay chê, đặc biệt là việc testing sản phẩm trước khi đăng bán cũng như việc chọn nguồn hàng chất lượng có vẻ đơn giản nhưng lại tốn nhiều thời gian và cũng là công việc “khó khăn” nhất đối với chúng mình.
                            <br>
                            <b>Chi phí, Giá thành:</b> Sản phẩm tốt không hẳn phải đắt nhất, mà đối với HTT đó là sản phẩm đạt chất lượng tốt nhất so với khoảng giá hiện tại. Việc check giá cả tất cả những sản phẩm cùng loại để chọn ra cái gì phù hợp cái gì không cũng là điều làm chúng mình đau đầu trước khi rinh em ý về trên kệ hàng.
                            <br>
                            <b>Phù hợp với từng người:</b> Nếu đã mua hàng tại HTT lâu thì chắc bạn không lạ gì về việc có những sản phẩm HTT không nhập bán nữa mặc dù có nhiều người hỏi. Chúng mình luôn để ý đến những review của người dùng là chính các bạn để điều chỉnh về hàng hóa. Hàng HTT không nhập lại không có nghĩa là sản phẩm đó HTT không thể nhập được hoặc không có ai mua. Mà đo đơn giản là những sản phẩm không còn đạt được đủ tiêu chí của bọn mình là tốt về cả chất lượng với khoảng giá đó, hoặc không cho kết quả sử dụng tốt với mọi người.
                            </p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about-us section end -->
<!-- team-member section start -->
<section class="pages team-member section-padding-bottom">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-title text-center">
                    <h3>Người sáng lập</h3>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="single-member">
                    <div class="member-img">
                        <a href="#"><img src="{{asset('public/frontend/img/1.jpg')}}" alt="Team Member" /></a>
                    </div>
                    <div class="share-member">
                        <div class="member-title">
                            <h4>Nguyễn Văn Quốc Tuấn</h4>
                        </div>
                        <div class="member-btn">	
                            <a href="#"><i class="mdi mdi-facebook"></i></a>
                            <a href="#"><i class="mdi mdi-twitter"></i></a>
                            <a href="#"><i class="mdi mdi-google-plus"></i></a>
                            <a href="#"><i class="mdi mdi-dribbble"></i></a>
                            <a href="#"><i class="mdi mdi-rss"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single member end -->
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="single-member">
                    <div class="member-img">
                        <a href="#"><img src="{{asset('public/frontend/img/2.jpg')}}" alt="Team Member" /></a>
                    </div>
                    <div class="share-member">
                        <div class="member-title">
                            <h4>Trần Trọng Hiếu</h4>
                        </div>
                        <div class="member-btn">	
                            <a href="#"><i class="mdi mdi-facebook"></i></a>
                            <a href="#"><i class="mdi mdi-twitter"></i></a>
                            <a href="#"><i class="mdi mdi-google-plus"></i></a>
                            <a href="#"><i class="mdi mdi-dribbble"></i></a>
                            <a href="#"><i class="mdi mdi-rss"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single member end -->
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="single-member">
                    <div class="member-img">
                        <a href="#"><img src="{{asset('public/frontend/img/3.jpg')}}" alt="Team Member" /></a>
                    </div>
                    <div class="share-member">
                        <div class="member-title">
                            <h4>Phạm Vĩnh Thái</h4>
                        </div>
                        <div class="member-btn">	
                            <a href="#"><i class="mdi mdi-facebook"></i></a>
                            <a href="#"><i class="mdi mdi-twitter"></i></a>
                            <a href="#"><i class="mdi mdi-google-plus"></i></a>
                            <a href="#"><i class="mdi mdi-dribbble"></i></a>
                            <a href="#"><i class="mdi mdi-rss"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single member end -->
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="single-member">
                    <div class="member-img">
                        <a href="#"><img src="{{asset('public/frontend/img/7.png')}}" alt="Team Member" /></a>
                    </div>
                    <div class="share-member">
                        <div class="member-title">
                            <h4>VKU</h4>
                        </div>
                        <div class="member-btn">	
                            <a href="#"><i class="mdi mdi-facebook"></i></a>
                            <a href="#"><i class="mdi mdi-twitter"></i></a>
                            <a href="#"><i class="mdi mdi-google-plus"></i></a>
                            <a href="#"><i class="mdi mdi-dribbble"></i></a>
                            <a href="#"><i class="mdi mdi-rss"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single member end -->
        </div>
    </div>
</section>
@endsection