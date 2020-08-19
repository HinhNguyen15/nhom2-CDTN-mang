<h1>My page</h1>
<form action="<?php echo site_url();?>/Newsad/add"_ method="post" accept-charset="utf-8">


  <div class="form-group">
    <label for="tieude_t">Tiêu đề </label>
    <input type="text" class="form-control" id="tieude" name="tieude" placeholder="Nhập tiêu đề ...">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="noidung_t">Nội dung</label>
    <input type="text" class="form-control" id="noidung" name = "noidung" placeholder="Nội dung...">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>