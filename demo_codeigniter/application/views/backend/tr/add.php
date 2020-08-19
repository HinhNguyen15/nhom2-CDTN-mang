<h1>Thêm Tin Rao</h1>

<form action="<?php echo site_url(); ?>/Tin_rao/save" method="post">
  <div class="form-group">
    <label for="addnews1">Ảnh</label>
    <textarea type="text" class="form-control" name="Anh" id="addnews1" placeholder="Anh"></textarea>
  </div>
  <div class="form-group">
    <label for="addnews">Tiêu đề</label>
    <input type="text" class="form-control" value="" name="Tieude" id="addnews" placeholder="Tieuđe">
  </div>
  <div class="form-group">
    <label for="addnews2">Diện tích - Giá</label>
    <textarea type="text" class="form-control" name="Dientich" id="addnews2" placeholder="Dientich"></textarea>
  </div>
  <div class="form-group">
    <label for="addnews3">Địa chỉ</label>
    <textarea type="text" class="form-control" name="Diachi" id="addnews3" placeholder="Diachi"></textarea>
  </div>
  
  <div class="form-group">
      <input type="submit" class="form-control btn btn-warning" value="save">
</div>
</form>