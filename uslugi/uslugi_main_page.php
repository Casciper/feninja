<?php
	include '../db_connect.php';
	include '../actions/errors.php';
	session_start();

	$errors = array();
	$phone = $_SESSION['login'];

	if (isset($_POST['add_usluga'])) {

	$usluga = $_POST['uslugi'];
	$chk="";
	foreach((array) $usluga as $chk1)
	{
		$chk .= $chk1.",";
	}

		$query = mysqli_query($link, "UPDATE masters SET uslugi = '$chk' WHERE login = '$phone'");

		$_SESSION['city'] = $city;
		header('location: ../uslugi/add_photo_page.php');
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
			  background: url("../img/svg/uslugi_main_page.svg") 0 0/100% no-repeat;
			  background-color: #fffbf7;
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
	<div class="pages-wrapper uslugi-main-page">

		<!-- separator -->
		<div class="separator-large"></div>
		<!-- end separator -->
		
		<!-- grid system -->
		<div class="grid-system">

			

			<!-- separator -->
			<div class="separator-large"></div>
			<!-- end separator -->

			<!-- section title -->
			
			<!-- end section title -->
			<div class="container">
				<form class="uslugi_category_checkbox" method="POST" action="uslugi_main_page.php">
				<div class="row">
					<div class="col-6 text-center checkbox_category1">
						<div class="category-elemnt">
							 <label><input type="checkbox" value="Nail service - hands" name="uslugi[]"><span></span></label>
							 </div>
						<div class="text-center uslugi-text">Nail service - hands</div>
					</div>
					<div class="col-6 checkbox_category2">
						<div class="category-elemnt">
							 <label><input type="checkbox" value="Nail service - legs" name="uslugi[]"><span></span></label>
							 </div>
						<div class="text-center uslugi-text">Nail service - legs</div>
					</div>
					<div class="col-6 checkbox_category3">
						<div class="category-elemnt">
							 <label><input type="checkbox" value="Hair service" name="uslugi[]"><span></span></label>
							 </div>
						<div class="text-center uslugi-text">Hair service</div>
					</div>
					<div class="col-6 checkbox_category4">
						<div class="category-elemnt">
							 <label><input type="checkbox" value="Cosmetology service" name="uslugi[]"><span></span></label>
							 </div>
						<div class="text-center uslugi-text">Cosmetology service</div>
					</div>
					<div class="col-6 text-center checkbox_category1">
						<div class="category-elemnt">
							 <label><input type="checkbox" value="Make-up service" name="uslugi[]"><span></span></label>
							 </div>
						<div class="text-center uslugi-text">Make-up service</div>
					</div>
					<div class="col-6 checkbox_category2">
						<div class="category-elemnt">
							 <label><input type="checkbox" value="Lushes service" name="uslugi[]"><span></span></label>
							 </div>
						<div class="text-center uslugi-text">Lushes service</div>
					</div>
					<div class="col-6 checkbox_category3">
						<div class="category-elemnt">
							 <label><input type="checkbox" value="Brow bar service" name="uslugi[]"><span></span></label>
							 </div>
						<div class="text-center uslugi-text">Brow bar service</div>
					</div>
				</div>
			</div>
			<div class="separator-large"></div>

			
				               <div class="button-default text-center">
												<button class="button" name="add_usluga">Продолжить</button>
									</div>
						</form>			
					<div class="separator-small"></div>
					<div class="separator-large"></div>



		

		</div>
		<!-- end grid system -->

	</div>
	<!-- end pages wrapper -->

	<script src="../js/jquery-3.4.1.min.js"></script>
	<script src="../js/bootstrap.bundle.min.js"></script>
	<script src="../js/fakeLoader.js"></script>
	<script src="../js/swiper.min.js"></script>
	<script src="../js/main.js"></script>

</body>
</html>