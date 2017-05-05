<style type="text/css">
	.show{
		height: 1000px;
		overflow: auto;
	}

</style>

<div class="row">
	<div class="col-xs-5">
	<table>
		<form action="" method="POST">
		<?php  
		foreach ($questions as $key => $question) {
			$key++;
		?>
		<tr>
			<td>
				<label><?php echo $key.". ".$question["name_question"] ?></label><br>
				<input type="radio" name=""><label><?php echo $question["choice1"]; ?></label><br>
				<input type="radio" name=""><label><?php echo $question["choice2"]; ?></label><br>
				<input type="radio" name=""><label><?php echo $question["choice3"]; ?></label><br>
				<input type="radio" name=""><label><?php echo $question["choice4"]; ?></label><br>		
			</td>
			<td>
				<a href="index.php?action=test_course&param=add_question&id_question=<?php echo $question["id_question"]; ?>&id_test=<?php echo $id_test; ?>">Chọn</a>
			</td>
		</tr>
		<?php
		}
		?>
		</form>		
	</table>

	</div>
	<div class="col-xs-5 show">
	<table>
		<?php  
		foreach ($questions_quiz as $key => $question) {
			$key++;
		?>
		<tr>
			<td>
				<label><?php echo $key.". ".$question["name_question"] ?></label><br>
				<input type="radio" name=""><label><?php echo $question["choice1"]; ?></label><br>
				<input type="radio" name=""><label><?php echo $question["choice2"]; ?></label><br>
				<input type="radio" name=""><label><?php echo $question["choice3"]; ?></label><br>
				<input type="radio" name=""><label><?php echo $question["choice4"]; ?></label><br>		
			</td>
			<td>
				<a href="index.php?action=test_course&param=question_delete&id=<?php echo $question["id"]; ?>&id_test=<?php echo $id_test; ?>">Xóa</a>
			</td>
		</tr>
		<?php
		}
		?>
		<tr>
			<td>
				<a href="index.php?action=test_course&param=test_create&id_course=<?php echo $id_course; ?>"><button>Hoàn Tất</button></a>
			</td>
			
		</tr>
	</table>
	</div>
</div>