<h1>Sửa Tin Rao Số <?php echo $news["id"];?></h1>

<form action="<?php echo site_url(); ?>/Tin_rao/update/<?php echo $news["id"];?>" method="post">
  <div class="form-group">
    <div class="form-group">
    <!-- <label for="addnews1">ID</label>
      <input type="text" class="form-control" value="<?php echo $news["id"];?>" name="id" id="addnews1" placeholder="Id"> -->
      <label for="addnews1">Ảnh</label>
      <input type="text" class="form-control" value="<?php echo $news["Anh"];?>" name="Anh" id="addnews1" placeholder="Anh">
      <img src="<?php echo $news["Anh"];?>" style="width: 200px; height: 200px;">
    </div>
    <label for="addnews">Tiêu đề</label>
      <input type="text" class="form-control" value="<?php echo $news["Tieude"];?>" name="Tieude" id="addnews" placeholder="Tieude">
  </div>
  <div class="form-group">
    <label for="addnews2">Diện tích - Giá</label>
    <textarea type="text" class="form-control" name="Dientich" id="addnews2" placeholder="Dientich">
    <?php echo $news["Dientich"];?>
	</textarea>
  </div>
  <div class="form-group">
    <label for="addnews3">Địa chỉ</label>
    <textarea type="text" class="form-control" name="Diachi" id="addnews3" placeholder="Diachi">
    <?php echo $news["Diachi"];?>
  </textarea>
  </div>
  <div class="form-group">
      <input type="submit" class="form-control btn btn-warning" value="save">
</div>
</form> 