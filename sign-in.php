

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
			background: url("img/svg/regular-reg.svg") 0 0/100% no-repeat;
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
			Вход
		</div>
		<div class="right">
			
		</div>
	</div>
	<!-- end navbar -->

	<!-- pages wrapper -->
	<div class="pages-wrapper regular-reg-start">

		<!-- separator -->
		<!-- end separator -->
		
		<!-- sign in -->
		<div class="sign in">
			<div class="container">
				<form class="form-fill text-center" method="POST" action="/auth.php">
					<div class="form-wrapper">
						<div class="input-wrap">
							<input type="tel" name="login" placeholder="Номер телефона">
						</div>
						<div class="input-wrap">
							<input type="password" name="pass" placeholder="Пароль">
						</div>
					</div>
					<div class="button-default">
						<button class="button" name="auth">Вход</button>
					</div>
				</form>

				<!-- separator -->
				<div class="separator-medium"></div>
				<!-- end separator -->

				<div class="link-forgot text-center text-small">
					<a href="reset-password/reset-password.html" class="color-theme">Забыли пароль?</a>
				</div>

				<!-- separator -->
				<div class="separator-small"></div>
				<!-- end separator -->

				<div class="link-sign-up text-center text-small">
					<p>Нет профиля?<a href="main_page.html" class="color-theme ml-2">Зарегистрироваться</a></p>
				</div>

				<!-- separator -->
				<div class="separator-large"></div>
				<!-- end separator -->

			</div>
		</div>
		<!-- end sign in -->

	</div>
	<!-- end pages wrapper -->

	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/fakeLoader.js"></script>
	<script src="js/swiper.min.js"></script>
	<script src="js/main.js"></script>

</body>
</html>