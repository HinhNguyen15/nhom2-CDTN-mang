<h1>Sửa Dự Án Số  <?php echo $news["id"];?></h1>
<form action="<?php echo site_url(); ?>/Duanad/update/<?php echo $news["id"];?>" method="post">
   <div class="form-group">
    <label for="addnews3">Ảnh</label>
    <input type="text" class="form-control" value="<?php echo $news["anh"];?>" name="anh" id="addnews3" placeholder="anh">
      <img src="<?php echo $news["anh"];?>" style="width: 200px; height: 200px;">
  </div>
  <div class="form-group">
    <label for="addnews">Tiêu đề</label>
    <!-- <input type="text" class="form-control" value="<?php echo $news["id"];?>" name="id" id="addnews" placeholder="Id"> -->
    <input type="text" class="form-control" value="<?php echo $news["tieude"];?>" name="tieude" id="addnews" placeholder="Tiêu đề">
  </div>
  
 
  <div class="form-group">
      <input type="submit" class="form-control btn btn-warning" value="save">
</div>
</form> 