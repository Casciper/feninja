<?php
include '../db_connect.php';
include '../actions/errors.php';
session_start();

$errors = array();
$phone = $_SESSION['login'];

if (isset($_POST['reg_user'])) {

  $name = mysqli_real_escape_string($link, $_POST['name']);
  $surname = mysqli_real_escape_string($link, $_POST['surname']);

  	$query = mysqli_query($link, "UPDATE masters SET name = '$name', surname = '$surname' WHERE login = '$phone'");
  	$_SESSION['name'] = $name;
  	$_SESSION['surname'] = $surname;
  	header('location: ../radio-city/whichone-city.php');
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
			background: url("../img/svg/master-start-reg1.svg") 0 0/100% no-repeat;
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
	</div>
	<!-- end navbar -->

	<!-- pages wrapper -->
	<div class="pages-wrapper master-reg-start1">

		
		<!-- sign up -->
		<div class="sign-up">
			<div class="container">
				<form class="form-fill text-center" method="POST" action="sign-up-master2.php">
					<div class="form-wrapper">
						<div class="input-wrap">
							<input type="text" name="name" placeholder="Ваше имя">
						</div>
						<div class="input-wrap">
							<input type="text" name="surname" placeholder="Ваша фамилия">
						</div>
					</div>
					<div class="button-default">
						<button class="button" name="reg_user">Продолжить</button>
					</div>
				</form>

				<!-- separator -->
				<div class="separator-medium"></div>
				<!-- end separator -->

				<div class="link-sign-up text-center text-small">
					<p>Уже есть профиль?<a href="../sign-in.html" class="color-theme ml-2">Войти</a></p>
				</div>

				<!-- separator -->
				<div class="separator-large"></div>
				<!-- end separator -->
<!--
				<div class="sign-with">
					<ul>
						<li>
							<a href="#"><i class="icon ion-logo-vk mr-2"></i>Вконтакте</a>
						</li>
						<li>
							<a href="#"><i class="icon ion-logo-google mr-2"></i>Google</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		
-->
	</div>
	<!-- end pages wrapper -->

	
	<script src="../js/jquery-3.4.1.min.js"></script>
	<script src="../js/bootstrap.bundle.min.js"></script>
	<script src="../js/fakeLoader.js"></script>
	<script src="../js/swiper.min.js"></script>
	<script src="../js/main.js"></script>

</body>
</html>