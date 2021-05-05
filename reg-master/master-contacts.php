<?php
include '../db_connect.php';
include '../actions/errors.php';
session_start();

$errors = array();
$phone = $_SESSION['login'];

if (isset($_POST['add_contacts'])) {

  $whatsapp = $_POST['wpp'];
  $instagram = $_POST['inst'];
  $telegram = $_POST['tg'];

  	$query = mysqli_query($link, "UPDATE `masters` SET wpp = '$whatsapp', inst = '$instagram', tg = '$telegram' WHERE `login` = '$phone'");
  	header('location: ../profile.php');
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
			  background: url("../img/svg/contact_master.svg") 0 0/100% no-repeat;
		}
	</style>

</head>
<body>
	
	<!-- fakeloader -->
	<div class="fakeLoader"></div>
	<!-- end fakeloader -->
	<form method="POST" action="master-contacts.php">
	<a href="#x" class="overlay" id="win1"></a>
			<div class="popup">
					<div class="form-wrapper text-center add_category_input input_placeholder_whatsup">
						<div class="add_category_header"><p>WhatsUp</p></div>
								<div class="separator-small"></div>
						<div class="input-wrap">
							<span id="text_container">
							<label>+7</label><input type="text" name="wpp" placeholder="9111234567">
							</span>
						</div>
						
					</div>
			<a class="close"title="Закрыть" href="#close"></a>
			</div>

			<a href="#x" class="overlay" id="win2"></a>
			<div class="popup">
					<div class="form-wrapper text-center add_category_input input_placeholder_instagram">
						<div class="add_category_header"><p>Instagram</p></div>
								<div class="separator-small"></div>
						<div class="input-wrap">
							<span id="text_container">
							<label style="font-size: 12px;" class="inst-media">https://www.instagram.com/</label><input type="text" name="inst" placeholder="имя профиля">
							</span>
						</div>
						
					</div>
			<a class="close"title="Закрыть" href="#close"></a>
			</div>

			<a href="#x" class="overlay" id="win3"></a>
			<div class="popup">
					<div class="form-wrapper text-center add_category_input input_placeholder_whatsup">
						<div class="add_category_header"><p>Telegram</p></div>
								<div class="separator-small"></div>

						<div class="input-wrap">
							<span id="text_container">
							<label>+7</label><input type="text" name="tg" placeholder="9111234567">
							</span>
						</div>
						
					</div>
			<a class="close"title="Закрыть" href="#close"></a>
			</div>
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
	<div class="pages-wrapper master-contacts">
		<div class="gallery">
			<div class="container">
				<!-- separator -->
			<div class="separator-medium"></div>
			<!-- end separator -->
		
			<div class="tab-content">
				<div class="tab-pane fade show active" id="column" role="tabpanel" aria-labelledby="column-tab">
					<div class="container">
						<div class="row">
							<div class="col-4">
								<a href="#" class="gallery-popup">
									<a href="#win1"><img class="contacts-m" src="../img/svg/whatsup.svg" alt="image-demo"></a>
								</a>
							</div>
							<div class="col-4">
								<a href="#" class="gallery-popup">
									<a href="#win2"><img class="contacts-m" src="../img/svg/instagram.svg" alt="image-demo"></a>
								</a>
							</div>
							<div class="col-4">
								<a href="#" class="gallery-popup">
									<a href="#win3"><img class="contacts-m" src="../img/svg/telegram.svg" alt="image-demo"></a>
								</a>
							</div>
						</div>
					</div>
				</div>		
			</div>
			<div class="separator-large"></div>
			<div class="separator-large"></div>
			<div class="separator-large"></div>
			<div class="button-default text-center">
						<button class="button" type="submit" name="add_contacts">Продолжить</button>
					</div>
			
		</div>
	
		<!-- end gallery -->
	</div>
	</div>
</form>
			

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