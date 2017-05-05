<a href="index.php?action=grammar&param=grammar_create">Soạn ngữ pháp</a>

<table>
	<tr>
		<td>
			STT
		</td>
		<td>
			Tiêu đề
		</td>
	</tr>
	<?php
	foreach ($grammars as $key => $grammar) {
		$key++
	?>
	<tr>
		<td>
			<?php echo $key; ?>
		</td>
		<td>
			<?php echo $grammar["tittle"]; ?>
		</td>
		<td>
			<a href="index.php?action=grammar&param=grammar_edit&id_grammar=<?php echo $grammar["id_grammar"]; ?>">Sửa</a>
			<a href="index.php?action=grammar&param=grammar_delete&id_grammar=<?php echo $grammar["id_grammar"]; ?>">Xóa</a>
		</td>
	</tr>
	<?php
	}
	?>
</table>

