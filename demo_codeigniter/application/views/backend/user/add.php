<form action="<?php echo site_url(); ?>/User_admin/save" method="post">
  <div class="form-group">
    <label for="addnews">Tài khoản</label>
    <input type="text" class="form-control" value="" name="taikhoan" id="addnews" placeholder="Tài khoản">
  </div>
  <div class="form-group">
    <label for="addnews2">Mật khẩu</label>
    <input type="text" class="form-control" value="" name="matkhau" id="addnews" placeholder="Mật khẩu">
  <div class="form-group">
    <label for="addnews">Quyền truy cập</label>
    <select name="phanquyen" class="custom-select">
      <option selected>Select Quyền truy cập</option>
      <option value="1">Quản trị viên</option>
      <option value="2">Người dùng</option>
      <option value="3">Biên tập viên</option>

    </select>
  </div>
  </div>
  <div class="form-group">
      <input type="submit" class="form-control btn btn-warning" value="save">
</div>
</form>