<style type="text/css">
	table tr td{
		padding: 10px;
	}
	
</style>

<link rel="stylesheet" type="text/css" href="css/course.css">
<a href="index.php?action=course&param=course_add"><button>Thêm khóa học</button></a>
<table>

	<tr>
		<td>
			Mã
		</td>
		<td>
			Tên khóa học
		</td>
	</tr>
<?php
	foreach ($courses as $key => $course){
?>
	<tr>
		<td>
			<?php echo $course["id_course"] ?>
		</td>
		<td>
			<?php echo $course['name_course']."<br>"; ?>
		</td>
		<td>
			<a href="index.php?action=course&param=course_edit&id=<?php echo $course['id_course']; ?>"><button>Sửa</button></a>
		</td>
		<td>
			<a href="index.php?action=course&param=course_delete&id=<?php echo $course['id_course']; ?>"><button>Xóa</button></a>
		</td>
	</tr>
<?php
	}
?>
</table>