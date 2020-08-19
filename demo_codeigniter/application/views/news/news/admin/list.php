
<table border="1">
	<?php foreach($new_list as $news): ?>
	<tr>
		<td>
			<a href="#">
			<?php echo $news['tieude']; ?>
			</a>
		</td>
		<td> Sửa</td>
		<td>Xóa</td>
	</tr>
		<?php  endforeach ?>

</table>