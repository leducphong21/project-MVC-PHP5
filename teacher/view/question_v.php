<div class="row">
	<div class="col-xs-5">
		<form method="POST" action="">
			<table>
				<tr>
					<td>
						Câu hỏi: 
					</td>
					<td>
						<input type="text" name="name_question"><br><br>
					</td>
				</tr>
				<tr>
					<td>
						Đáp án 1: 
					</td>
					<td>
						<input type="text" name="choice1"><br><br>
					</td>
				</tr>
				<tr>
					<td>
						Đáp án 2: 
					</td>
					<td>
						<input type="text" name="choice2"><br><br>
					</td>
				</tr>
				<tr>
					<td>
						Đáp án 3: 
					</td>
					<td>
						<input type="text" name="choice3"><br><br>
					</td>
				</tr>
				<tr>
					<td>
						Đáp án 4: 
					</td>
					<td>
						<input type="text" name="choice4"><br><br>
					</td>
				</tr>
				<tr>
					<td>
						Đáp án: 
					</td>
					<td>
						<?php
						foreach ($answers as $key => $answer) {
						?>
							<input type="radio" value="<?php echo $answer["answer"]; ?>" name="answer"><label><?php echo $answer["answer"]; ?></label>
						<?php
						}
						?>

					</td>
				</tr>
					<tr>
					<td>
						Khóa học: 
					</td>
					<td>
						<select name="id_course">
						<?php
						foreach ($courses as $key => $course) {
						?>
							<option value="<?php echo $course["id_course"] ?>"><?php echo $course["name_course"]; ?></option>
						<?php
						}
						?>
						</select>
					</td>
				</tr>			
				<tr>
					<td>
						
					</td>
					<td>
						<input type="submit" name="submit" value="Thêm">
					</td>
				</tr>
			</table>
			
			
		</form>
	</div>


	<div class="col-xs-5">
	<table>
		
		
			<?php
			foreach ($questions as $key => $question) {
				$key++;
			?>
		<tr>
			<td>
				<label><?php echo $key.". ".$question["name_question"]; ?></label><br>
				<input type="radio" name="<?php echo $question["id_question"]; ?>"><label><?php echo $question["choice1"]; ?></label><br>
				<input type="radio" name="<?php echo $question["id_question"]; ?>"><label><?php echo $question["choice2"]; ?></label><br>
				<input type="radio" name="<?php echo $question["id_question"]; ?>"><label><?php echo $question["choice3"]; ?></label><br>
				<input type="radio" name="<?php echo $question["id_question"]; ?>"><label><?php echo $question["choice4"]; ?></label><br>
			</td>
			<td>
				<a href="index.php?action=question&param=question_edit&id_question=<?php echo $question["id_question"]; ?>"><button>Sửa</button></a>
			</td>
			<td>
				<a href="index.php?action=question&param=question_delete&id_question=<?php echo $question["id_question"]; ?>"><button>Xóa</button></a>
			</td>
		</tr>
			<?php
			}
			?>
		
	
	</table>		
	</div>
</div>