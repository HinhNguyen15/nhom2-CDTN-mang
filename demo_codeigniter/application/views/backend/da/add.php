<h1>Thêm Dự án</h1>

<form action="<?php echo site_url(); ?>/Duanad/save" method="post">
  <div class="form-group">
    <label for="addnews3">Ảnh</label>
    <textarea type="text" class="form-control" name="anh" id="addnews3" placeholder="Ảnh">
  </textarea>
  </div>
  <div class="form-group">
    <label for="addnews">Tiêu đề</label>
    <input type="text" class="form-control" value="" name="tieude" id="addnews" placeholder="Tiêu đề">
  </div>
  <div class="form-group">
      <input type="submit" class="form-control btn btn-warning" value="save">
</div>
</form>