<?php
    error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
    session_start();
    if (isset($_SESSION['username_teacher'])) {
?>
	<meta charset="utf-8">
	<title>Admin</title>
	<script type="text/javascript" src="../lib/jquery/app.js"></script>
	<script type="text/javascript" src="../lib/bootstrap/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="../lib/bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../lib/bootstrap/css/bootstrap.min.css">
<style type="text/css">

.content{

}

.nav li:hover{
	background-color: #fff;
}
</style>
<div class="class=navbar navbar-default">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="glyphicon glyphicon-menu-hamburger"></span>
			</button>
			<a class="navbar-brand" href="index.php">Trang chủ</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li><a href="index.php?action=gioithieu">Giới thiệu <span class="sr-only">(current)</span></a></li>
				<li><a href="index.php?action=question">Câu hỏi</a></li>
				<li><a href="index.php?action=test_course">Đề Luyện tập</a></li>
				<li><a href="index.php?action=grammar">Soạn ngữ pháp</a></li>
				<li class="dropdown">
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Profile</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="index.php?action=logout">Logout</a></li>
					</ul>
				</li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->	
</div>
	<div class="content container">
		<?php
		$action = $_GET["action"];
			switch ($action) {
				case 'logout':
					session_destroy();
					header("location:index.php");
					break;
				case 'question':
					include_once("controller/question_c.php");
					$question = new Question_c();
					$question->run();
					break;
				case  'test_course':
					include_once("controller/test_c.php");
					$test = new Test_c();
					$test->run();
					break;
				case 'grammar':
					include("controller/grammar_c.php");
					$grammar = new Grammar_c();
					$grammar->run();
					break;
				default:
					echo "a";
					break;
			}
		?>
	</div>

<?php
} else {
	include_once("controller/login_c.php");
	$login = new Login_c();
	$login->run();
}
?>
