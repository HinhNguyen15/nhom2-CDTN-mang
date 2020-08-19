<form action="<?php echo site_url(); ?>/User_admin/update/<?php echo $user["id"];?>" method="post">
  <div class="form-group">
    <label for="addnews">ID</label>
    <input type="text" class="form-control" value="<?php echo $user["id"];?>" name="id" id="addnews" placeholder="id">
  </div>
  <div class="form-group">
    <label for="addnews">Tài khoản</label>
    <input type="text" class="form-control" value="<?php echo $user["taikhoan"];?>" name="taikhoan" id="addnews" placeholder="Tài khoản">
  </div>
  <div class="form-group">
    <label for="addnews2">Mật khẩu</label>
    <input type="text" class="form-control" value="<?php echo $user["matkhau"];?>" name="matkhau" id="addnews" placeholder="Mật khẩu">
  <div class="form-group">
    <label for="addnews">Quyền truy cập</label>
    <select name="phanquyen" class="custom-select">
      <option value="1" <?= ($user["phanquyen"] == 1)? "selected": "";?> >Quản trị viên</option>
      <option value="2" <?= ($user["phanquyen"] == 2)? "selected": "";?> >Người dùng</option>
      <option value="2" <?= ($user["phanquyen"] == 3)? "selected": "";?> >Biên tập viên</option>
    </select>
  </div>
  </div>
  <div class="form-group">
      <input type="submit" class="form-control btn btn-warning" value="save">
</div>
</form>