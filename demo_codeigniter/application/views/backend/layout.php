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
<div class="container-fluid">
	<div class="row">
	    <!-- Sidebar -->
	    <div id="sidebar" class="col-lg-3">
	        <div class="sidebar-header">
	            <h3>Backend - xin chào - <?php echo $this->session->Userdata("taikhoan"); ?></h3>
	            <a href="<?php echo site_url();?>/Login/logout" title="Đăng xuất">Đăng xuất</a>
	        </div>
			
	        <ul class="list-unstyled components">
	            <p></p>

	            <li class="active">
	                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Tin tức</a>
	                <ul class="collapse list-unstyled" id="homeSubmenu">
	                    <li>
	                        <a href="<?php echo site_url();?>/Newsad/add">Thêm tin tức</a>
	                    </li>
	                    <li>
	                        <a href="<?php echo site_url();?>/Newsad">Danh sách tin tức</a>
	                    </li>
	                </ul>
	            </li>
	            <li>
	                <a href="#Submenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Tin rao</a>
	                <ul class="collapse list-unstyled" id="Submenu">
	                    <li>
	                        <a href="<?php echo site_url();?>/Tin_rao/add">Thêm tin rao</a>
	                    </li>
	                    <li>
	                        <a href="<?php echo site_url();?>/Tin_rao/index">Danh sách tin rao</a>
	                    </li>
	                </ul>
	            </li>
	            <li>
	                <a href="#hSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Dự án</a>
	                <ul class="collapse list-unstyled" id="hSubmenu">
	                    <li>
	                        <a href="<?php echo site_url();?>/Duanad/add">Thêm dự án</a>
	                    </li>
	                    <li>
	                        <a href="<?php echo site_url();?>/Duanad/index">Danh sách dự án</a>
	                    </li>
	                </ul>
	            </li>
	            <li>
	                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Tài khoản quản trị</a>
	                <ul class="collapse list-unstyled" id="pageSubmenu">
	                    <li>
	                        <a href="<?php echo site_url();?>/User_admin/add">Thêm Tài khoản</a>
	                    </li>
	                    <li>
	                        <a href="<?php echo site_url();?>/User_admin">Danh sách Tài khoản</a>
	                    </li>
	                </ul>
	            </li>
	            <!-- <li>
	                <a href="#">About</a>
	            </li>
	            <li>
	                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
	                <ul class="collapse list-unstyled" id="pageSubmenu">
	                    <li>
	                        <a href="#">Page 1</a>
	                    </li>
	                    <li>
	                        <a href="#">Page 2</a>
	                    </li>
	                    <li>
	                        <a href="#">Page 3</a>
	                    </li>
	                </ul>
	            </li>
	            <li>
	                <a href="#">Portfolio</a>
	            </li>
	            <li>
	                <a href="#">Contact</a>
	            </li> -->
	        </ul>
	    </div>
	    <div id="content"  class="col-lg-9">
		    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light"> -->
	        <div class="content">
				<?php $this->load->view($content);?>
	        </div>
		    <!-- </nav> -->
		</div>
	</div>
</div>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#sidebarCollapse').on('click', function () {
				$('#sidebar').toggleClass('active');
			});
		});
	</script>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

</body>

</html>