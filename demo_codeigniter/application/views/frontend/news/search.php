<div class="row">
	<div class="col-xl-9 col-lg-8 col-md-8 col-sm-12 col-12 content">

		<h2>Kết quả tìm kiếm</h2>
		<?php foreach ($news as $item) { ?>
		<div class="content--contact">
			<a href="<?php echo site_url();?>/news/detail/<?php echo $item['id']; ?>" title="<?php echo $item['tieude']; ?>"><h2>Tiêu đề: <?php echo $item['tieude']; ?></h2></a>
			<h2></h2>
			<p>
				<?php echo $item['noidung']; ?>
			</p>
		</div>
		<?php } ?>
		<ul class="pagination" style="text-align:center;">
 		 	<!-- <li class="page-item"><a class="page-link" href="#">Previous</a></li> -->
 		 	<?php for ($p=1; $p <= ceil($totalnews/3); $p++): ?>
 		 		
 		 	
	  		<li class="page-item"><a class="page-link" href="<?php echo site_url();?>/News/pagination/<?php echo $p; ?>"><?php echo $p; ?></a></li>
 			<!-- <li class="page-item"><a class="page-link" href="#">Next</a></li> -->
 			<?php endfor ?>
		</ul>
	</div>
	<div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 col-12 sidebar mt-30 mb-30">
		<div class="sidebar--image">
		</div>
		<div class="sidebar--content mt-10">
		</div>
	</div>
</div>