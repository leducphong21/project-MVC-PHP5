<form method="POST" action="index.php?action=student&param=student_edit&id=<?php echo $_GET['id'] ?>">
<table>
	<tr>
		<td>
			Mã sinh viên
		</td>
		<td>
			<input type="text" name="id_student" value="<?php echo $student["id_student"]; ?>">
		</td>
	</tr>
	<tr>
		<td>
			Tên sinh viên
		</td>
		<td>
			<input type="text" name="name_student" value="<?php echo $student["name_student"]; ?>">
		</td>
	</tr>
	<tr>
		<td>
			Email
		</td>
		<td>
			<input type="text" name="email" value="<?php echo $student["email"]; ?>">
		</td>
	</tr>
	<tr>
		<td>
			Số điện thoại
		</td>
		<td>
			<input type="text" name="phone_number" value="<?php echo $student["phone_number"]; ?>">
		</td>
	</tr>
	<tr>
		<td>
			Tài khoản
		</td>
		<td>
			<input type="text" name="username" value="<?php echo $student["username"]; ?>">
		</td>
	</tr>
	<tr>
		<td>
			Mật khẩu
		</td>
		<td>
			<input type="text" name="password" value="<?php echo $student["password"]; ?>">
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<input type="submit" name="sua" value="Lưu">
		</td>
	</tr>
</table>
</form>