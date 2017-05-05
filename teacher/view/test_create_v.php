<form method="POST" action="">
	<input type="text" name="name_test">
	<input type="submit" name="create" value="Tạo">
</form>

<table>
<?php
foreach ($tests as $key => $test) {
?>
	<tr>
		<td>
			<a href="index.php?action=test_course&param=test&id_test=<?php echo $test["id_test"]; ?>&id_course=<?php echo $id_course; ?>"><?php echo $test["name_test"]; ?></a>
		</td>
		<td>
			<a href="index.php?action=test_course&param=test&id_test=<?php echo $test["id_test"]; ?>&id_course=<?php echo $id_course; ?>"><button>Soạn</button></a>
		</td>
		<td>
			<a href="index.php?action=test_course&param=test_edit&id_test=<?php echo $test["id_test"]; ?>&id_course=<?php echo $id_course; ?>"><button>Sửa</button></a>
		</td>
		<td>
			<a href="index.php?action=test_course&param=test_delete&id_test=<?php echo $test["id_test"]; ?>&id_course=<?php echo $id_course; ?>"><button>Xóa</button></a>
		</td>
	</tr>
<?php
}
?>
</table>
