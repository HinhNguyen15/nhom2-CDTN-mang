<h1>Danh sách dự án</h1>

<a href="<?php echo site_url(); ?>/Duanad/add"><button type="button" class="btn btn-primary" style="float: right;">Thêm dự án</button></a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Ảnh</th>
      <th scope="col">Tiêu đề</th>
      <th scope="col">Sửa</th>
      <th scope="col">Xóa</th>
    </tr>
  </thead>
  <tbody>
	<?php foreach($new_list as $news): ?>
    <tr>
      <th scope="row"><?php echo $news['id'];?></th>
      <td><a href="<?php echo site_url(); ?>/Duanad/edit/<?php echo $news['id']; ?>"><?php echo $news['anh']; ?></a></td>
      <td><a href="<?php echo site_url(); ?>/Duanad/edit/<?php echo $news['id']; ?>"><?php echo $news['tieude']; ?></a></td>
      <td><a href="<?php echo site_url(); ?>/Duanad/edit/<?php echo $news['id']; ?>"><button type="button" class="btn btn-warning">Sửa</button></a></td>
      <td><a href="<?php echo site_url(); ?>/Duanad/delete/<?php echo $news['id']; ?>"><button type="button" class="btn btn-danger">Xóa</button></td>
	</tr>
	<?php endforeach ?>
  </tbody>
</table>