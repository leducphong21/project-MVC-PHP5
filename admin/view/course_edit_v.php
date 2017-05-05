<form method="POST" action="index.php?action=course&param=course_edit&id=<?php echo $_GET['id'] ?>">
	<table>
		<tr>
			<td>
				Mã khóa học
			</td>
			<td>
				<input type="text" name="id_course" value="<?php  echo $course['id_course']; ?>">
			</td>
		</tr>
		<tr>
			<td>
				Tên Khoa học
			</td>
			<td>
				<input type="text" name="name_course" value="<?php  echo $course["name_course"]; ?>">
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" name="submit" value="Lưu">
			</td>
		</tr>
	</table>
</form>



