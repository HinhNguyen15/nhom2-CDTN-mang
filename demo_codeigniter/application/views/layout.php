<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Home</title>
	<link rel="stylesheet" href="<?php echo base_url("vendor/twbs/bootstrap/dist/css/bootstrap.css");?>">
	<link rel="stylesheet" href="<?php echo base_url("assets/common.css");?>">
</head>
<body>
	<header id="header" class="" style="height: 80px; background-color: pink;color:white; font-weight: bold;text-align:center; font-size: 40px;">
		<div class="w3-panel w3-leftbar w3-light-grey">
  			<p class="w3-xlarge w3-serif">
  				<i>"Make it as simple as possible, but not simpler."</i></p>
  			<p>Albert Einstein</p>
		</div>
	</header>
	<div class="container">
		
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
  		<a class="navbar-brand" href="<?php echo site_url();?>/news/index">Trang chủ</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
         	<li class="nav-item active">
           	<a class="nav-link" href="<?php echo site_url();?>/home/index">Giới thiệu <span class="sr-only">(current)</span></a>
          </li>
         	<li class="nav-item">
            <a class="nav-link" href="<?php echo site_url();?>/news/index">Tin tức-Sự kiện</a>
         	</li>
         	<li class="nav-item">
            <a class="nav-link" href="<?php echo site_url();?>/news/detail">chi tiết bài viết</a>
         	</li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
    <?php $this->load->view($content)?>
  </div>
	<footer  style="height: 100px; background-color: white;color:white; font-weight: bold;text-align:center; font-size: 40px;">
    Copy right: By Linh Mimi.
		<!-- <ul class="pagination">
 		 	<li class="page-item"><a class="page-link" href="#">Previous</a></li>
  		<li class="page-item"><a class="page-link" href="#">1</a></li>
  		<li class="page-item"><a class="page-link" href="#">2</a></li>
  		<li class="page-item"><a class="page-link" href="#">3</a></li>
 			<li class="page-item"><a class="page-link" href="#">Next</a></li>
		</ul> -->
	</footer>
</body>
</html>