<style type="text/css">
	.thumbnail {
  padding: 0 0 15px 0;
  border: none;
  border-radius: 5px;
  background: #fff;
  text-align: left;
	color: #2c2f36;
}

.thumbnail img {
  width: 100%;
  height: 100%;
  margin-bottom: 10px;
  border-radius: 5px 5px 0px 0px;
}

p{
	padding-left: 10px;
}
span {
	padding-left:  10px;
}
 a:hover, a:focus {
    color: #055699;
    text-decoration: none;
    transition: all 0.3s;
}
</style>

<div class="container">
	<div class="container-fluid" style=" padding-top: 10px; ">
		<h2>Tin tức</h2>
		<div class="row" style="margin-bottom: 10px;">
		    <div class="col-5">
		    	<img src="<?php echo $news[0]['anh']; ?>" alt=""
				style="height: 70%;width:100%; margin-bottom: 0px;object-fit: cover; margin-top:10px;">
				<h4><?php echo $news[0]['tieude']; ?></h4>
				<!-- <p>
					<?php echo $news[0]['noidung']; ?>
				</p> -->
		    </div>
		    <div class="col-4" ">
				<?php foreach ($news as $item) { ?>
				<div class="content--contact" style="padding-top: 10px;">
					<a href="<?php echo site_url();?>/news/detail/<?php echo $item['id']; ?>" title="<?php echo $item['tieude']; ?>"><h5><?php echo $item['tieude']; ?></h5></a><hr>
					
					<!-- <p>
						<?php echo $item['noidung']; ?>
					</p> -->
				</div>
				<?php } ?>
				
			</div>
		    <div class="col-3">
		    
		    <div class="content--contact" style="">
					<img src="<?php echo $item['anh']; ?>" alt=""
				style="height: 300px;width:100%; margin-bottom: 50px;object-fit: cover; margin-top:20px;">
				</div>
		      
		   
		    </div>
		</div>
	</div>



	<div class="container-fluid">
		<h2>Dự án nổi bật</h2>
		<div class="row  text-center" style="width:100%; ">
      		<?php foreach ($news as $item) { ?>
	      	<div class="col-sm-3">
		      <div class="thumbnail"  >
				<img src="<?php echo $item['anh']; ?>">
		        <div>
		        	<p style="color: #004e7f;"><?php echo $item['tieude']; ?></p>
		        	<!-- <span><b><?php echo $item['dientich']; ?></b></span> <br>
		        	<span><?php echo $item['diachi']; ?></span>  -->
		        </div>
		        
		    	</div>
		    </div>
		    <?php } ?>
		</div>
		<!-- <div class="row text-center">
		    <div class="col-sm-3">
		      <div class="thumbnail" >
		        <img src="<?php echo base_url();?>/public/image/sach2.jpg" alt=""
				width="400" height="300">
		        <p>Aaaaaaaaaaaaaaa</p>
		      </div>
		    </div>

		    <div class="col-sm-3">
		      <div class="thumbnail" >
		        <img src="<?php echo base_url();?>/public/image/sach2.jpg" alt=""
				width="400" height="300">
		        <p>bbbbbbbbbbbbbbbb</p>
		      </div>
		    </div>

		    <div class="col-sm-3">
		      <div class="thumbnail" >
		        <img src="<?php echo base_url();?>/public/image/sach2.jpg" alt=""
				width="400" height="300">
		        <p>ccccccccccccccccccccc</p>
		      </div>
		    </div>

		    <div class="col-sm-3">
		      <div class="thumbnail" >
		        <img src="<?php echo base_url();?>/public/image/sach2.jpg" alt=""
				width="400" height="300">
		        <p>ddddddddddddddddddd</p>
		      </div>
		    </div>
		</div> -->
	</div>


</div>





<!-- <div class="row">
	<div class="col-xl-9 col-lg-8 col-md-8 col-sm-12 col-12 content">	
		<img src="<?php echo base_url();?>/public/image/sach2.jpg" alt=""
		style="height: 300px;width:100%; margin-bottom: 50px;object-fit: cover; margin-top:20px;">
		<h1><?php echo $news[0]['tieude']; ?></h1>
		<p>
			<?php echo $news[0]['noidung']; ?>
		</p>


		<h2>Danh sách bài viết</h2>
		<?php foreach ($news as $item) { ?>
		<div class="content--contact">
			<a href="<?php echo site_url();?>/news/detail/<?php echo $item['id']; ?>" title="<?php echo $item['tieude']; ?>"><h2>Tiêu đề: <?php echo $item['tieude']; ?></h2></a>
			<h2></h2>
			<p>
				<?php echo $item['noidung']; ?>
			</p>
		</div>
		<?php } ?>
		
	</div>
	<div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 col-12 sidebar mt-30 mb-30">
		<div class="sidebar--image">
		</div>
		<div class="sidebar--content mt-10">
		</div>
	</div>
</div> -->

