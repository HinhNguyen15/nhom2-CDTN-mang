<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Home</title>
	<link rel="stylesheet" href="<?php echo base_url("vendor/twbs/bootstrap/dist/css/bootstrap.css");?>">
	<link rel="stylesheet" href="<?php echo base_url();?>/public/css/mycss.css">
 	<!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>
<body>

<header id="header" style=" padding-top: 20px; ">
		<div  style="float: left; padding-left: 20px;">
  			<img src="https://staticfile.batdongsan.com.vn/images/Logo/ic_logo_2.svg">
		</div>

		<div style="float: right; padding-right: 20px;">
			<?php if($this->session->Userdata("taikhoan")):?>
				<p>Xin chào - <?php echo $this->session->Userdata("taikhoan"); ?> |
				<a href="<?php echo site_url();?>/Login/logout" title="Đăng xuất">Đăng xuất</a> |
				<a href="">Đăng tin</a>
				</p>
			<?php endif;?>
		</div>

	</header>
	<div class="container-fluid" style="background-color: #00AB9F; margin-top:80px;">	
		<nav class="navbar navbar-expand-lg navbar-light bg-light"  style="background-color: #00AB9F!important;">
	  		<a class="navbar-brand" href="<?php echo site_url();?>/news/index">Trang chủ</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
	      <div class="collapse navbar-collapse" id="navbarSupportedContent">
	        <ul class="navbar-nav mr-auto">
	         	<li class="nav-item active">
	           	<a class="nav-link" href="<?php echo site_url();?>/news/list">Nhà đất bán<span class="sr-only">(current)</span></a>
	          </li>
	         	<li class="nav-item">
	            <a class="nav-link" href="<?php echo site_url();?>/news/list">Nhà đất cho thuê</a>
	         	</li>
	         	<li class="nav-item">
	            <a class="nav-link" href="<?php echo site_url();?>/news/index">Dự án</a>
	         	</li>
	         	<li class="nav-item">
	            <a class="nav-link" href="<?php echo site_url();?>/news/index">Tin tức</a>
	         	</li>
	        </ul>
	        <form class="form-inline my-2 my-lg-0" action="<?php echo site_url();?>/News/search" method="get">
	          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name ="search">
	          <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search</button>
	        </form>
	      </div>
	    </nav>
  	</div>


<div class="container-fluid row" style="padding-top: 20px; padding-bottom: 20px;">

	<form action="<?php echo site_url(); ?>/Login/login_f" method="post" style="margin: 0 auto;" class ="col-lg-6">
	<h2 style="text-align: center;">Đăng Nhập</h2>
	  <div class="form-group">
	    <label for="email">Tai khoản:</label>
	    <input type="text" name="taikhoan" class="form-control" placeholder="Enter email" id="email">
	  </div>
	  <div class="form-group">
	    <label for="pwd">Mật khẩu:</label>
	    <input type="password" name="matkhau" class="form-control" placeholder="Enter password" id="pwd">
	  </div>
	  <div class="form-group form-check">
	    <label class="form-check-label">
	      <input class="form-check-input" type="checkbox"> Remember me
	    </label>
	  </div>
	  <button type="submit" class="btn btn-primary">Log in</button>
	</form>
</div>
	</script>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

<footer class="container-fluid bg-4 text-center">
		<div class="row" style="background: #024073; color: rgb(255, 255, 255); padding-top: 10px;" >
		    <div class="col-5" >
		    	<img src="https://staticfile.batdongsan.com.vn/images/logo-footer-no1.svg" alt=""><br>
				<span>Công ty cổ phần bất động sản HNUE<br>
				136 Xuân Thủy, Cầu Giấy, Hà Nội<br>
				Hotline: 0123456789</span>
		    </div>
		    <div class="col-2" style="text-align: left;">
		    	<h5>Hướng dẫn</h5><hr>
		    	<span>
		    		<a href="">Báo giá & hỗ trợ</a><br>
		    		<a href="">Câu hỏi thường gặp</a><br>
		    		<a href="">Về chúng tôi</a><br>
		    		<a href="">Tin nội bộ</a><br>
		    		<a href="">Liên hệ</a><br>
		    		<a href="">Sitemap</a></span>
		    </div>
		    <div class="col-2" style="text-align: left;">
		    	<h5>Quy định</h5><hr>
		    	<span>
		    		<a href="">Quy định đăng tin</a> <br>
					<a href="">Quy chế hoạt động</a><br>
					<a href="">Điều khoản thỏa thuận</a><br>
					<a href="">Chính sách bảo mật</a><br>
					<a href="">Giải quyết khiếu nại</a>
		    	</span>
		    </div>
		    <div class="col-2" style="text-align: left;">
		    	<h5>Tổng đài hỗ trợ</h5><hr>
		    	<span>
		    		 <a href="">Tổng đài CSKH: 1900 1881</a><br>
					 <a href="">hotro@batdongsan.com.vn</a> <br>
					 <a href="">cskh@batdongsan.com.vn</a> 
		    	</span>
		    </div>
		</div>
  		<p>Bootstrap Theme Made By <a href="https://www.w3schools.com">www.bds.com</a></p> 
	</footer>



</body>

</html>
