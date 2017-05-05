<style type="text/css">
	table tr{
		border-bottom:1px solid #dbdbdb;
	}

	table tr td{
		padding: 10px;
	}
	
</style>

<a href="index.php?action=teacher&param=teacher_add"><input type="submit" name="them" value="Thêm giáo viên"></a>
<center>
<table >
	<tr style="border-bottom:1px solid black">
		<td>
			Mã
		</td>
		<td>
			Tên giáo viên
		</td>
		<td>
			Email
		</td>
		<td>
			Số điện thoại
		</td>
		<td>
			Tài khoản
		</td>
		<td>
			Mật khẩu
		</td>
		<td>Hành động</td>
	</tr>
	<?php
		foreach ($teachers as $key => $teacher) {
	?>
	<tr>
		<td>
			<?php echo $teacher["id_teacher"]; ?>
		</td>
		<td>
			<?php echo $teacher["name_teacher"]; ?>
		</td>
		<td>
			<?php echo $teacher["email"]; ?>
		</td>
		<td>
			<?php echo $teacher["phone_number"]; ?>
		</td>
		<td>
			<?php echo $teacher["username"]; ?>
		</td>
		<td>
			<?php echo $teacher["password"]; ?>
		</td>
		<td>
			<a href="index.php?action=teacher&param=teacher_edit&id=<?php echo $teacher["id_teacher"]; ?>"><input type="submit" name="sua" value="Sửa"></a>
			<a href="index.php?action=teacher&param=teacher_delete&id=<?php echo $teacher["id_teacher"]; ?>"><input type="submit" name="xoa" value="Xóa"></a>
		</td>
	</tr>
	<?php
		}
	?>
</table>
</center>