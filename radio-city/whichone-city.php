<?php
include '../db_connect.php';
include '../actions/errors.php';
session_start();

$errors = array();
$phone = $_SESSION['login'];

if (isset($_POST['add_user'])) {

  $city = mysqli_real_escape_string($link, $_POST['city']);

  	$query = mysqli_query($link, "UPDATE masters SET city = '$city' WHERE login = '$phone'");
  	$_SESSION['city'] = $city;
  	header('location: ../uslugi/uslugi_main_page.php');
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
			  background: url("../img/svg/whichone-city.svg") 0 0/100% no-repeat;
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
			Выберите город
		</div>
		<div class="right">
			
		</div>
	</div>
	<!-- end navbar -->

	<!-- pages wrapper -->
	<div class="pages-wrapper whichone-city">

		<!-- separator -->
		<div class="separator-large"></div>
		<!-- end separator -->
		
		<!-- search bar -->
		<div class="search-bar">
			<div class="container">
				<div class="search-form">
					<form class="form-fill text-center whichone">
						<div class="form-wrapper">
							<div class="input-wrap pos-rel">
								<i class="icon ion-ios-search"></i>
								<input type="search" class="form-control" placeholder="Поиск">
							</div>
						</div>
					</form>
				</div>

				<!-- separator -->
				<div class="separator-large"></div>
				<!-- end separator -->
				<form class="form-fill cityes" method="POST" action="whichone-city.php">
						<div class="form-wrapper">
							<fieldset>
								<div>
							    <input type="radio" id="city1"
							     name="city" value="Санкт-Петербург">
							    <label for="city1">Санкт-петербург</label>
							 </div>
							 <div>
							    <input type="radio" id="city2"
							     name="city" value="Москва">
							    <label for="city2">Москва</label>
							 </div>
							 <div>
							    <input type="radio" id="city3"
							     name="city" value="Сочи">
							    <label for="city3">Сочи</label>
							 </div>
							 <div>
							    <input type="radio" id="city4"
							     name="city" value="Рязань">
							    <label for="city4">Рязань</label>
							 </div>
							 <div>
							    <input type="radio" id="city5"
							     name="city" value="Казань">
							    <label for="city5">Казань</label>
							 </div>
							 <div>
							    <input type="radio" id="city6"
							     name="city" value="Екатеринбург">
							    <label for="city6">Екатеринбург</label>
							 </div>
							 <div>
							    <input type="radio" id="city7"
							     name="city" value="Астрахань">
							    <label for="city7">Астрахань</label>
							 </div>
							 <div>
							    <input type="radio" id="city8"
							     name="city" value="Московская область">
							    <label for="city8">Московская область</label>
							 </div>
							 </fieldset>
							 <div>
						</div>
					<div class="button-default text-center">
						<button class="button" name="add_user">Продолжить</button>
					</div>
				</form>

			

		</div>
		<!-- end search bar -->
		<div class="separator-large"></div>

	</div>
	<!-- end pages wrapper -->
	</div>

	<script src="../js/jquery-3.4.1.min.js"></script>
	<script src="../js/bootstrap.bundle.min.js"></script>
	<script src="../js/fakeLoader.js"></script>
	<script src="../js/swiper.min.js"></script>
	<script src="../js/main.js"></script>

</body>
</html>