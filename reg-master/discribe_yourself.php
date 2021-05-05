<?php
include '../db_connect.php';
include '../actions/errors.php';
session_start();

$errors = array();
$phone = $_SESSION['login'];

if (isset($_POST['add_about'])) {

  $aboutme = mysqli_real_escape_string($link, $_POST['about']);

  	$query = mysqli_query($link, "UPDATE masters SET `about` = '$aboutme' WHERE `login` = '$phone'");
  	header('location: discribe_yourself_cost.php');
}
?>


<!DOCTYPE html>
<html lang="zxx">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="icon" href="images/favicon.png">
	<title>Maxui</title>

	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/ionicons.min.css">
	<link rel="stylesheet" href="../css/fakeLoader.css">
	<link rel="stylesheet" href="../css/swiper.min.css">
	<link rel="stylesheet" href="../css/style.css">

	<style type="text/css">
		body{
			  background: url("../img/svg/discribe_yourself.svg") 0 0/100% no-repeat;
		}
	</style>

</head>
<body>
	
	<!-- fakeloader -->
	<div class="fakeLoader"></div>
	<!-- end fakeloader -->
	
	<!-- navbar -->
	<div class="navbar">
		<div class="left">
			<a href="" class="link link-back"><i class="icon ion-ios-arrow-back"></i></a>
		</div>
		<div class="title">
			
		</div>
		<div class="right">
			
		</div>
	</div>
	<!-- end navbar -->

	<!-- pages wrapper -->
	<div class="pages-wrapper add-img3">
		<div class="container">
				<form class="form-fill text-center describe-pages" method="POST" action="discribe_yourself.php">
					<div class="form-wrapper">
						<div class="input-wrap">
							<textarea class="discribe-textarea" name="about" placeholder="Напишите пару слов о себе, о своем опыте и специализации"></textarea>
						</div>
					</div>

			
					<div class="separator-large"></div>
					<div class="separator-large"></div>
					<div class="button-default">
						<button class="button" name="add_about">Продолжить</button>
					</div>
					<div class="separator-medium"></div>
					<div class="text-center text-small"><a href="#"><p>Пропустить</p></a></div>
				</form>

				<!-- separator -->
				<div class="separator-medium"></div>
				<!-- end separator -->

				

				<!-- separator -->
				<!-- end separator -->

			</div>
	</div>

			

	</div>
		<!-- end search bar -->
		<div class="separator-large"></div>


	<script src="../js/jquery-3.4.1.min.js"></script>
	<script src="../js/bootstrap.bundle.min.js"></script>
	<script src="../js/fakeLoader.js"></script>
	<script src="../js/swiper.min.js"></script>
	<script src="../js/main.js"></script>

</body>
</html>