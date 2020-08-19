<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="<?php echo base_url('vendor/twbs/bootstrap/dist/css/bootstrap.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/common.css');?>">
</head>
<body>
	<h1>TRANG TIN TUC</h1>
	<div class="container">
			<div class="row">
				<div class="col-6 col-md-4"> 
			    	<nav>
			    		<ul class="navbar-nav">
							<li class="nav-item">
								<a class="nav-link" href="<?php echo base_url('index.php/newsad/index')?>">Quan li tin tuc</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="">quan li tai lieu</a>
							</li>
						</ul>
			    	</nav>
			    </div>
			    <div class="col-md-8">
			    	 <?php $this->load->view($content);?> 
			    </div>
			</div>
	</div>
</body>
</html>