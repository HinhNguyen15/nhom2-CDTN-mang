<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Home</title>
	<link rel="stylesheet" href="<?php echo base_url("vendor/twbs/bootstrap/dist/css/bootstrap.css");?>">
	<link rel="stylesheet" href="<?php echo base_url();?>/public/css/mycss.css">
	
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
	      <div class="collapse navbar-collapse mainmenu" id="navbarSupportedContent">
	        <ul class="navbar-nav mr-auto">
	         	<li class="nav-item active">
	           	<a class="nav-link active" href="<?php echo site_url();?>/TTin_rao/index">Nhà đất bán<span class="sr-only">(current)</span></a>
	          </li>
	         	<li class="nav-item">
	            <a class="nav-link" href="<?php echo site_url();?>/TTin_rao/list">Nhà đất cho thuê</a>
	         	</li>
	         	<li class="nav-item">
	            <a class="nav-link" href="<?php echo site_url();?>/Duan/list">Dự án</a>
	         	</li>
	         	<li class="nav-item">
	            <a class="nav-link" href="<?php echo site_url();?>/news/list">Tin tức</a>
	         	</li>
	        </ul>
	        <form class="form-inline my-2 my-lg-0" action="<?php echo site_url();?>/News/search" method="get">
	          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name ="search">
	          <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search</button>
	        </form>
	      </div>
	    </nav>
  	</div>
  	 <div class="container">
        	<div class="row">
        		<content>
        		<!-- class="col col-sm-7 col-md-8 col-lg-9" -->
        			<section>
        				<?php $this->load->view($content); ?>
        			</section>
        		</content>
        		<!-- <aside class="col col-sm-5 col-md-4 col-lg-3">
        			sidebar
        		</aside> -->
        	</div>

		</div>
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
		    		<a href="">Quy định đăng tin</a><br>
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