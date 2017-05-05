<style type="text/css">
	table tr td{
		padding: 10px;
	}
	
</style>

<table>
	<tr>
		<td>
			Mã
		</td>
		<td>
			Đề luyện tập
		</td>
		<td>
			Giáo viên
		</td>
	</tr>
<?php
	foreach ($tests as $key => $test) {
?>
	<tr>
		<td>
			<?php echo $test["id_test"]; ?>
		</td>
		<td>
			<?php echo $test["name_test"]; ?>
		</td>
		<td>
			<?php echo $test["name_teacher"]; ?>
		</td>
		<td>
			<a href="index.php?action=test_course&param=test_delete&id_test=<?php echo $test["id_test"]; ?>&id_course=<?php echo $id_course; ?>"><button>Xóa</button></a>
		</td>
	</tr>
<?php
	}
?>
</table>