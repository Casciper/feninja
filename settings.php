<?php
	include 'db_connect.php';
	session_start();

$errors = array();
$phone = $_SESSION['login'];

if (isset($_POST['update'])) {

  $name = mysqli_real_escape_string($link, $_POST['name']);
  $surname = mysqli_real_escape_string($link, $_POST['surname']);
  $about = mysqli_real_escape_string($link, $_POST['aboutme']);

  	$query = mysqli_query($link, "UPDATE masters SET `name` = '$name', `surname` = '$surname', `about` = '$about' WHERE `login` = '$phone'");
	
	$_SESSION["auth_name"] = $name;
	$_SESSION["auth_surname"] = $surname;
	$_SESSION["auth_about"] = $about;
  	header('location: profile.php');
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

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/ionicons.min.css">
	<link rel="stylesheet" href="css/fakeLoader.css">
	<link rel="stylesheet" href="css/swiper.min.css">
	<link rel="stylesheet" href="css/style.css">

	<style type="text/css">
		body{
			background: url("img/svg/settings-bg.svg") 0 0/100% no-repeat;
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

		<!-- separator -->
		<div class="separator-large"></div>
		<!-- end separator -->

	</div>
	<!-- end sidebar -->

	<!-- page wrapper -->
	<div class="page-wrapper setting-padding">
		<form class="form-fill text-center" method="POST" action="settings.php">
<?php echo '			
		<div id="accordionParent2" class="accordion accordion-inset">
			<div class="accordion-item">
				<div class="accordion-title collapsed" data-toggle="collapse" data-target="#accordionTwo1">Имя фамилия
					<div class="accordion-after">
						<i class="icon ion-ios-arrow-up"></i>
					</div>
				</div>
				<div id="accordionTwo1" class="accordion-body collapse" data-parent="#accordionParent2">
					<div class="accordion-content">
						<div class="form-wrapper text-center">
						<div class="input-wrap">
							<input type="text" name="name" placeholder="'.$_SESSION["auth_name"].'">
						</div>
						<div class="input-wrap">
							<input type="text" name="surname" placeholder="'.$_SESSION["auth_surname"].'">
						</div>
					</div>
					</div>
				</div>
			</div>
			<div class="accordion-item">
				<div class="accordion-title collapsed" data-toggle="collapse" data-target="#accordionTwo2">Описание
					<div class="accordion-after">
						<i class="icon ion-ios-arrow-up"></i>
					</div>
				</div>
				<div id="accordionTwo2" class="accordion-body collapse" data-parent="#accordionParent2">
					<div class="accordion-content">
						<div class="form-wrapper text-center">
						<div class="input-wrap">
							<textarea class="discribe-textarea" name="aboutme" placeholder="'.$_SESSION["auth_about"].'"></textarea>
						</div>
					</div>
					</div>
				</div>
			</div>
			<div class="accordion-item">
				<div class="accordion-title collapsed" data-toggle="collapse" data-target="#accordionTwo6">Адрес
					<div class="accordion-after">
						<i class="icon ion-ios-arrow-up"></i>
					</div>
				</div>
				<div id="accordionTwo6" class="accordion-body collapse" data-parent="#accordionParent2">
					<div class="accordion-content">
						<div class="form-wrapper text-center">
						<div class="input-wrap">
							<input type="text" placeholder="'.$_SESSION["auth_city"].'">
						</div>
					</div>
					</div>
				</div>
			</div>
			<div class="accordion-item">
				<div class="accordion-title collapsed" data-toggle="collapse" data-target="#accordionTwo3">Услуги и цены
					<div class="accordion-after">
						<i class="icon ion-ios-arrow-up"></i>
					</div>
				</div>
				<div id="accordionTwo3" class="accordion-body collapse" data-parent="#accordionParent2">
					<div class="accordion-content text-center">
						<a href="uslugi/uslugi_main_page.html"><p class="settingshref">Изменить цену или услуги</p></a>
					</div>
				</div>
			</div>
			<div class="accordion-item">
				<div class="accordion-title collapsed" data-toggle="collapse" data-target="#accordionTwo4">Изменить фото работ
					<div class="accordion-after">
						<i class="icon ion-ios-arrow-up"></i>
					</div>
				</div>
				<div id="accordionTwo4" class="accordion-body collapse" data-parent="#accordionParent2">
					<div class="accordion-content">
						<div class="accordion-content text-center">
						<a href="uslugi/add_photo_page.html"><p class="settingshref">Изменить фото работ</p></a>
					</div>
					</div>
				</div>
			</div>
			<div class="accordion-item">
				<div class="accordion-title collapsed" data-toggle="collapse" data-target="#accordionTwo5">Изменить фото профиля
					<div class="accordion-after">
						<i class="icon ion-ios-arrow-up"></i>
					</div>
				</div>
				<div id="accordionTwo5" class="accordion-body collapse" data-parent="#accordionParent2">
					<div class="accordion-content">
						<div class="form-wrapper text-center">
							<div class="button-default text-center" id="upload-container">
				          <div>
				               <input id="imgUpload" type="file" name="file" multiple>
				               <label style="opacity: 0" for="file-input">Выберите файл</label>
				          </div>
				       <img id="upload-image" src="img/svg/add_photo_btn.svg">
					</div>
					</div>
					</div>
				</div>
			</div>
		</div>
		'; ?>
		<div class="button-default">
						<button class="button" type="submit" name="update">Сохранить</button>
					</div>
	</form>
		</div>

		<!-- separator -->
		<div class="separator-large"></div>
		<!-- end separator -->

	<!-- end page wrapper -->

	<!-- toolbar bottom -->
	<div id="toolbar1" class="toolbar">
		<div class="container">
			<ul class="toolbar-bottom toolbar-wrap">
				<li class="toolbar-item">
					<a href="#" class="toolbar-link toolbar-link-active">
						<i class="icon ion-ios-home"></i>
					</a>
				</li>
				<li class="toolbar-item">
					<a href="map_page.html" class="toolbar-link">
						<i class="icon ion-ios-navigate"></i>
					</a>
				</li>
				<li class="toolbar-item">
					<a href="sign-in.html" class="toolbar-link">
						<i class="icon ion-ios-person"></i>
					</a>
				</li>
			</ul>
		</div>
	</div>
	<!--  
	<div id="toolbar2" class="toolbar">
		<div class="container">
			<ul class="toolbar-bottom toolbar-wrap bg-color-toolbar">
				<li class="toolbar-item">
					<a href="profile.html" class="toolbar-link toolbar-link-active">
						<i class="icon ion-ios-person"></i>
					</a>
				</li>
				<li class="toolbar-item">
					<a href="map_page.html" class="toolbar-link">
						<i class="icon ion-ios-navigate"></i>
					</a>
				</li>
				<li class="toolbar-item">
					<a href="settings.html" class="toolbar-link">
						<i class="icon ion-ios-settings"></i>
					</a>
				</li>
			</ul>
		</div>
	</div>
-->
	<!-- end toolbar bottom -->

	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/fakeLoader.js"></script>
	<script src="js/swiper.min.js"></script>
	<script src="js/jquery.big-slide.js"></script>
	<script src="js/main.js"></script>

</body>
</html>