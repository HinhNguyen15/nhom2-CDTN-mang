
<style type="text/css">
	.thumbnail {
  /*padding: 0 0 15px 0;*/
  	border: none;
  	border-radius: 5px;
  	background: #fff;
  	text-align: left;
	color: #2c2f36;
	margin-bottom: 10px;

}

.thumbnail img {
  width: 100%;
  height: 100%;
  margin-bottom: 10px;
  border-radius: 5px 5px 0px 0px;
}
.thumbnail div{
	height: 160px;
}
p{
	padding-left: 10px;
	font-size: 14px;
}
span {
	padding-left:  10px;
	text-align: bottom;
}
 a:hover, a:focus {
    color: #055699;
    text-decoration: none;
    transition: all 0.3s;
}
</style>



<div class="container" style="background: #f1f1f1;">
	<div class="container-fluid" style="padding-top: 10px; padding-bottom: 10px;">
		<h2>Nhà đất cho thuê</h2><hr>
      	<div class="row  text-center" style="width:100%; ">
      		<?php foreach ($news_list as $item) { ?>
	      	<div class="col-3">
		      <div class="thumbnail"  >
				<img src="<?php echo $item['Anh']; ?>">
		        <div>
		        	<p style="color: #004e7f;"><?php echo $item['Tieude']; ?></p>
		        	<span><b><?php echo $item['Dientich']; ?></b></span> <br>
		        	<span><?php echo $item['Diachi']; ?></span> 
		        </div>
		        
		    	</div>

		    </div>
		    <?php } ?>
		</div>
	</div>
		<ul class="pagination justify-content-center" style="padding-top: 10px; padding-bottom: 10px; ">
			    <!-- <li class="page-item"><a class="page-link" href="javascript:void(0);">Previous</a></li> -->
			<li class="page-item"><a class="page-link" href="http://localhost/demo_codeigniter/index.php/TTin_rao/list/1">1</a></li>
			<li class="page-item"><a class="page-link" href="http://localhost/demo_codeigniter/index.php/TTin_rao/list/2">2</a></li>
			    <!-- <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>-->
		</ul>

</div>


<!--  <div class="container">
	<div class="container-fluid" style="background-color:; padding-top: 10px; ">
		<h2>Tin rao dành cho bạn</h2>
		<?php foreach ($news as $item) { ?>
		<div class="row">
		    <div class="col-3" style="padding-bottom: 10px;">
		    	<img src="<?php echo $item['Anh']; ?>" style="height: 80%;width:100%; margin-bottom: 0px;object-fit: cover; margin-top:20px;">
			</div>
		    <div class="col-5" style="padding-top: 10px;">
				<div class="content--contact">
					<a href="<?php echo site_url();?>/TTin_rao/detail/<?php echo $item['id']; ?>" title="<?php echo $item['Tieude']; ?>"><h2>Tiêu đề: <?php echo $item['Tieude']; ?></h2></a>
					
				</div>
			</div>
			<div class="col-4" style="background: #f1f1f1">
				<div>
					<div class="col-5" style="padding-bottom: 0px; float: left;">
				    	<img src="<?php echo $item['Anh']; ?>" style="height: 100%;width:100%;object-fit: cover; margin-top:0px;" >
					</div>
				    <div class="col-7" style="float: left;" >
						<div class="content--contact">
							<a href="<?php echo site_url();?>/TTin_rao/detail/<?php echo $item['id']; ?>" title="<?php echo $item['Tieude']; ?>"><h6><?php echo $item['Tieude']; ?></h6></a>
							
						</div>
					</div>
				</div>

				<div>
				
				   
						<div class="content--contact">
							<a href="<?php echo site_url();?>/TTin_rao/detail/<?php echo $item['id']; ?>" title="<?php echo $item['Tieude']; ?>"><h6><?php echo $item['Tieude']; ?></h6></a>
							
						</div>
					
				</div>
				
			</div>
		</div>
		<?php } ?>
	</div>


</div> --> 




<!-- 
<?php
	$news = array_shift($news_list);
?>
<img src="<?php echo $news["Anh"] ?>">
<h1><?php echo $news["Tieude"] ?></h1>
<p><?php echo $news["Dientich"] ?></p>

<?php foreach($news_list as $news): ?>
		<h3>
			<a href="<?php echo base_url("index.php/TTin_rao/detail/".$news["id"]) ?>">
			<?php echo $news['Tieude']; ?>
			</a>
		</h3>

<?php endforeach ?> -->

 
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