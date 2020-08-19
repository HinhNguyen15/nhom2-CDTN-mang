
<style type="text/css">
	.thumbnail {
  /*padding: 0 0 15px 0;*/
  	border: none;
  	border-radius: 5px;
  	background: #fff;
  	text-align: left;
	color: #2c2f36;
	margin-bottom: 20px;

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
	margin-bottom: -10px;
}
 a:hover, a:focus {
    color: #055699;
    text-decoration: none;
    transition: all 0.3s;
}
</style>



<div class="container" style="background: #f1f1f1;">
	<div class="container-fluid" style="padding-top: 10px; padding-bottom: 10px;">
		<h2>Nhà đất bán</h2><hr>
      	<div class="row  text-center" style="width:100%; ">
      		<?php foreach ($news as $item) { ?>
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
			<li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
			<li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
			    <!-- <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>-->
		</ul>

</div>







<!-- 	  	<div class="row text-center">
		    <div class="col-sm-3">
		      <div class="thumbnail"  >
		        <img src="<?php echo $news[0]['Anh']; ?>">
		        <div>
		        	<p style="color: #004e7f;"><?php echo $news[0]['Tieude']; ?></p>
		        	<span><b><?php echo $news[0]['Dientich']; ?></b></span> <br>
		        	<span><?php echo $news[0]['Diachi']; ?></span> 
		        </div>
		        
		      </div>
		    </div>

		    <div class="col-sm-3">
		      <div class="thumbnail" >
		        <img src="<?php echo $news[1]['Anh']; ?>">
		        <div>
		        	<p style="color: #004e7f;"><?php echo $news[1]['Tieude']; ?></p>
			        <span><b><?php echo $news[1]['Dientich']; ?></b></span> <br>
			        <span><?php echo $news[1]['Diachi']; ?></span> 
		        </div>
				
		      </div>
		    </div>
		    <div class="col-sm-3">
		      <div class="thumbnail" >
		        <img src="<?php echo $news[2]['Anh']; ?>">
		        <div>
		        	<p style="color: #004e7f;"><?php echo $news[2]['Tieude']; ?></p>
			        <span><b><?php echo $news[2]['Dientich']; ?></b></span> <br>
			        <span><?php echo $news[2]['Diachi']; ?></span> 
		        </div> 
		      </div>
		    </div>
		    <div class="col-sm-3">
		      <div class="thumbnail" >
		        <img src="<?php echo $news[3]['Anh']; ?>">
		        <div>
			        <p style="color: #004e7f;"><?php echo $news[3]['Tieude']; ?></p>
			        <span><b><?php echo $news[3]['Dientich']; ?></b></span> <br>
			        <span><?php echo $news[3]['Diachi']; ?></span> 	
		        </div>  
		      </div>
		    </div>
		</div> -->
		
		
	
