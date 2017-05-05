<style type="text/css">
	table tr td{
		padding: 10px;
	}
	
</style>


<a href="index.php?action=student&param=student_add"><input type="submit" name="them" value="Thêm sinh viên"></a>
<table>
	<tr>
		<td>
			Mã
		</td>
		<td>
			Tên sinh viên
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
	</tr>
	<?php
		foreach ($students as $key => $student) {
	?>
	<tr>
		<td>
			<?php echo $student["id_student"]; ?>
		</td>
		<td>
			<?php echo $student["name_student"]; ?>
		</td>
		<td>
			<?php echo $student["email"]; ?>
		</td>
		<td>
			<?php echo $student["phone_number"]; ?>
		</td>
		<td>
			<?php echo $student["username"]; ?>
		</td>
		<td>
			<?php echo $student["password"]; ?>
		</td>
		<td>
			<a href="index.php?action=student&param=student_edit&id=<?php echo $student["id_student"]; ?>"><input type="submit" name="sua" value="Sửa"></a>
		</td>
		<td>
			<a href="index.php?action=student&param=student_delete&id=<?php echo $student["id_student"]; ?>"><input type="submit" name="xoa" value="Xóa"></a>
		</td>
	</tr>
	<?php
		}
	?>
</table>