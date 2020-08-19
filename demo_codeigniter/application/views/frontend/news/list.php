<style type="text/css">
	h2 {
		color: #055699;
	}

</style>
<div class="container">
	<div class="container-fluid" style="background-color:; padding-top: 10px; ">
		<h2>Tin tức<hr></h2>
		
		<div class="row">
			<div class="col col-sm-7 col-md-8 col-lg-9" >
				<?php foreach ($news_list as $item) { ?>
				<div class="row">
				    <div class="col-5" style="padding-bottom: 10px;">
				    	<img src="<?php echo $item['anh']; ?>" style="height: 80%;width:100%; margin-bottom: 0px;object-fit: cover; margin-top:20px;">
					</div><hr>
				    <div class="col-7" style="padding-top: 10px;">
						<div class="content--contact">
							<a href="<?php echo site_url();?>index.php/news/detail/<?php echo $item['id']; ?>" title="<?php echo $item['tieude']; ?>"><h3><?php echo $item['tieude']; ?></h3></a>
							<!-- <p>
								<?php echo $item['noidung']; ?>
							</p> -->
						</div>
					</div>

				</div>
				<?php } ?>
				<ul class="pagination justify-content-center" style="padding-top: 10px; padding-bottom: 10px; ">
				    <!-- <li class="page-item"><a class="page-link" href="">Previous</a></li> -->
				    <li class="page-item"><a class="page-link" href="http://localhost/demo_codeigniter/index.php/news/list/1">1</a></li>
				    <li class="page-item"><a class="page-link" href="http://localhost/demo_codeigniter/index.php/news/list/2">2</a></li>
				    <li class="page-item"><a class="page-link" href="http://localhost/demo_codeigniter/index.php/news/list/3">3</a></li>
				    <!-- <li class="page-item"><a class="page-link" href="">Next</a></li> -->
			  	</ul>	
			</div>
			<div class="col col-sm-5 col-md-4 col-lg-3">
			<h2>Tin nóng</h2>
				<?php foreach ($news_list as $item) { ?>
				<div class="content--contact" style="padding-top: 10px;">
					<a href="<?php echo site_url();?>/news/detail/<?php echo $item['id']; ?>" title="<?php echo $item['tieude']; ?>"><h5><?php echo $item['tieude']; ?></h5></a><hr>
					
					<!-- <p>
						<?php echo $item['noidung']; ?>
					</p> -->
				</div>
				<?php } ?>
				
			</div>
        		
        </div>

	</div>
		
</div> 








<!-- <div class="row">
	<div class="col-xl-9 col-lg-8 col-md-8 col-sm-12 col-12 content">

		<h2>Kết quả tìm kiếm</h2>
		<?php foreach ($news as $item) { ?>
		<div class="content--contact">
			<img src="<?php echo $item['anh']; ?>" >
			<a href="<?php echo site_url();?>/news/detail/<?php echo $item['id']; ?>" title="<?php echo $item['tieude']; ?>"><h2>Tiêu đề: <?php echo $item['tieude']; ?></h2></a>
			<h2></h2>
			<p>
				<?php echo $item['noidung']; ?>
			</p>
		</div>
		<?php } ?>
		<ul class="pagination" style="text-align:center;">
 		 	<li class="page-item"><a class="page-link" href="#">Previous</a></li>
	  		<li class="page-item"><a class="page-link" href="<?php echo site_url();?>/News/pagination/1">1</a></li>
	  		<li class="page-item"><a class="page-link" href="<?php echo site_url();?>/News/pagination/2">2</a></li>
	  		<li class="page-item"><a class="page-link" href="<?php echo site_url();?>/News/pagination/3">3</a></li>
 			<li class="page-item"><a class="page-link" href="#">Next</a></li>
		</ul>
	</div>
	<div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 col-12 sidebar mt-30 mb-30">
		<div class="sidebar--image">
		</div>
		<div class="sidebar--content mt-10">
		</div>
	</div>
</div>  -->