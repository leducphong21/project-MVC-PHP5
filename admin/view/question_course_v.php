<?php
	foreach ($courses as $key => $course) {

?>
		<a href="index.php?action=question_course&param=question&id_course=<?php echo $course["id_course"]; ?>"><?php echo $course["name_course"]; ?></a><br>
<?php
	}
?>