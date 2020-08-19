<h1>Danh sách Tin rao</h1>
<a href="<?php echo site_url(); ?>/Tin_rao/add"><button type="button" class="btn btn-primary" style="float: right;">Thêm tin rao</button></a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Ảnh</th>
      <th scope="col">Tiêu đề</th>
      <th scope="col">Diện tích</th>
      <th scope="col">Địa chỉ</th>
      <th scope="col">Sửa</th>
      <th scope="col">Xóa</th>
    </tr>
  </thead>
  <tbody>
	<?php foreach($news_list as $news): ?>
    <tr>
      <th scope="row"><?php echo $news['id'];?></th>
      <td><a href="<?php echo site_url(); ?>/Tin_rao/edit/<?php echo $news['id']; ?>"><?php echo $news['Anh']; ?></a></td>
      <td><a href="<?php echo site_url(); ?>/Tin_rao/edit/<?php echo $news['id']; ?>"><?php echo $news['Tieude']; ?></a></td>
      <td><a href="<?php echo site_url(); ?>/Tin_rao/edit/<?php echo $news['id']; ?>"><?php echo $news['Dientich']; ?></a></td>
      <td><a href="<?php echo site_url(); ?>/Tin_rao/edit/<?php echo $news['id']; ?>"><?php echo $news['Diachi']; ?></a></td>
      <td><a href="<?php echo site_url(); ?>/Tin_rao/edit/<?php echo $news['id']; ?>"><button type="button" class="btn btn-warning">Sửa</button></a></td>
      <td><a href="<?php echo site_url(); ?>/Tin_rao/delete/<?php echo $news['id']; ?>"><button type="button" class="btn btn-danger">Xóa</button></td>
	</tr>
	<?php endforeach ?>
  </tbody>
</table>