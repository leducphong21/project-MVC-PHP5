<form method="POST" action="">
<table>
	<tr>
		<td>
			Mã giáo viên
		</td>
		<td>
			<input type="text" name="id_teacher" value="<?php echo $teacher["id_teacher"]; ?>">
		</td>
	</tr>
	<tr>
		<td>
			Tên giáo viên
		</td>
		<td>
			<input type="text" name="name_teacher" value="<?php echo $teacher["name_teacher"]; ?>">
		</td>
	</tr>
	<tr>
		<td>
			Email
		</td>
		<td>
			<input type="text" name="email" value="<?php echo $teacher["email"]; ?>">
		</td>
	</tr>
	<tr>
		<td>
			Số điện thoại
		</td>
		<td>
			<input type="text" name="phone_number" value="<?php echo $teacher["phone_number"]; ?>">
		</td>
	</tr>
	<tr>
		<td>
			Tài khoản
		</td>
		<td>
			<input type="text" name="username" value="<?php echo $teacher["username"]; ?>">
		</td>
	</tr>
	<tr>
		<td>
			Mật khẩu
		</td>
		<td>
			<input type="text" name="password" value="<?php echo $teacher["password"]; ?>">
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<input type="submit" name="sua" value="Lưu">
		</td>
	</tr>
</table>
</form>