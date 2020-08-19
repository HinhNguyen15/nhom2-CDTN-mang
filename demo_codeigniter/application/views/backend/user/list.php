<h1>Danh sách user</h1>
<a href="<?php echo site_url(); ?>/User_admin/add"><button type="button" class="btn btn-primary">Thêm tài khoản</button></a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Tên tài khoản</th>
      <th scope="col">Quyền truy cập</th>
      <th scope="col">Sửa</th>
      <th scope="col">Xóa</th>
    </tr>
  </thead>
  <tbody>
	<?php foreach($users_list as $item): ?>
    <tr>
      <th scope="row"><?php echo $item['id'];?></th>
      <td><a href="<?php echo site_url(); ?>/User_admin/edit/<?php echo $item['id']; ?>"><?php echo $item['taikhoan']; ?></a></td>
      <td><?= ($item['phanquyen'] == 1) ? "Quản trị viên" : "" ; ?><?= ($item['phanquyen'] == 2) ? "Người dùng" : "" ; ?><?= ($item['phanquyen'] == 3) ? "Biên tập viên" : "" ; ?></td>
      <td><a href="<?php echo site_url(); ?>/User_admin/edit/<?php echo $item['id']; ?>"><button type="button" class="btn btn-warning">Sửa</button></a></td>
      <td><a href="<?php echo site_url(); ?>/User_admin/delete/<?php echo $item['id']; ?>"><button type="button" class="btn btn-danger">Xóa</button></td>
	</tr>
	<?php endforeach ?>
  </tbody>
</table>