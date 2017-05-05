<?php
	foreach ($courses as $key => $course) {

?>
		<a href="index.php?action=test_course&param=test&id_course=<?php echo $course["id_course"]; ?>"><?php echo $course["name_course"]; ?></a><br>
<?php
	}
?>