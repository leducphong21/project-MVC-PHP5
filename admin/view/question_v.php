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
			Câu hỏi
		</td>
		<td>
			Giáo viên
		</td>
	</tr>
<?php
	foreach ($questions as $key => $question) {
?>
	<tr>
		<td>
			<?php echo $question["id_question"]; ?>
		</td>
		<td>
			<?php echo $question["name_question"]; ?>
		</td>
		<td>
			<?php echo $question["name_teacher"]; ?>
		</td>
		<td>
			<a href="index.php?action=question_course&param=question_delete&id_question=<?php echo $question["id_question"]; ?>&id_course=<?php echo $id_course; ?>"><button>Xóa</button></a>
		</td>
	</tr>
<?php
	}
?>
</table>