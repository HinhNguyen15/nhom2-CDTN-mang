<div class="row">
	<div class="col-xl-9 col-lg-8 col-md-8 col-sm-12 col-12 content">
		<img src="<?php echo base_url();?>/public/image/thu.jpg.jpg" alt=""
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
</div>