@extends('admin_layout')
@section('admin_content')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container" style="border-radius: 20px">
<div class="row gutters" style="margin-top: 117.5px">
	<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
		<div class="card h-100">
			<div class="card-body">
				<div class="account-settings">
					<div class="user-profile">
						<div class="user-avatar">
							<img src="{{URL::to('public/uploads/personal/1.jpg')}}" alt="Maxwell Admin">
						</div>
						<h5 class="user-name">  
                            <?php
                            $email= Session::get('admin_name');
                            if($email){
                            echo $email;    
                            }
                        ?>
                        </h5>
						<h6 class="user-email">  
                            <?php
                            $email= Session::get('admin_email');
                            if($email){
                            echo $email;    
                            }
                        ?>
                        </h6>
					</div>
					<div class="about">
						<h5 class="mb-2 text-primary">Tiểu sử</h5>
						<p>
                        <?php
                            $email= Session::get('admin_detail');
                            if($email){
                            echo $email;    
                            }
                        ?>
                        </p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
		<div class="card h-100">
			<div class="card-body">
				<div class="row gutters">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<h6 class="mb-3 text-primary">Trang cá nhân</h6>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group">
							<label for="fullName">Họ và tên</label>
							<input type="text" class="form-control" id="fullName" placeholder="Enter full name" value="  
                            <?php
                            $email= Session::get('admin_name');
                            if($email){
                            echo $email;    
                            }
                            ?>" style="border-radius: 15px;">
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group">
							<label for="eMail">Email</label>
							<input type="text" class="form-control" id="eMail" placeholder="Enter email ID" value="  
                            <?php
                            $email= Session::get('admin_email');
                            if($email){
                            echo $email;    
                            }
                            ?>" style="border-radius: 15px">
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group">
							<label for="phone">Số điện thoại</label>
							<input type="text" class="form-control" id="phone" placeholder="Enter phone number" value="
                            <?php
                            $email= Session::get('admin_phone');
                            if($email){
                            echo $email;    
                            }
                            ?>"  style="border-radius: 15px">
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group">
							<label for="website">Thành phố</label>
							<input type="text" class="form-control" id="website" placeholder="Website url" value="
                            <?php
                            $email= Session::get('admin_city');
                            if($email){
                            echo $email;    
                            }
                            ?>" style="border-radius: 15px">
						</div>
					</div>
				</div>
                <br><br><br>
				<div class="row gutters">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<div class="text-right">
                            <a type="button" id="submit" name="submit" href="{{URL::to('/')}}" class="btn btn-success">Trang chủ</a>
							<a type="button" id="submit" name="submit" href="{{URL::to('/logout')}}" class="btn btn-primary">Đăng xuất</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

<style type="text/css">
.container{margin-top:20px;
color: #bcd0f7;
    background: #1A233A;

}
.account-settings .user-profile {
    margin: 0 0 1rem 0;
    padding-bottom: 1rem;
    text-align: center;
}
.account-settings .user-profile .user-avatar {
    margin: 0 0 1rem 0;
}
.account-settings .user-profile .user-avatar img {
    width: 90px;
    height: 90px;
    -webkit-border-radius: 100px;
    -moz-border-radius: 100px;
    border-radius: 100px;
}
.account-settings .user-profile h5.user-name {
    margin: 0 0 0.5rem 0;
}
.account-settings .user-profile h6.user-email {
    margin: 0;
    font-size: 0.8rem;
    font-weight: 400;
}
.account-settings .about {
    margin: 1rem 0 0 0;
    font-size: 0.8rem;
    text-align: center;
}
.card {
    background: #272E48;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    border: 0;
    margin-bottom: 1rem;
}
.form-control {
    border: 1px solid #596280;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    font-size: .825rem;
    background: #1A233A;
    color: #bcd0f7;
}

</style>

<script type="text/javascript">

</script>
</body>
</html>

@endsection
