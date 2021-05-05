<?php
	include 'db_connect.php';
	session_start();
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
	<style>
		body{
			background:url("img/svg/profile/profile_bg.svg") no-repeat;
			background-color: #FFFBF7;
		}
	</style>

</head>
<body>
	
	<!-- fakeloader -->
	<div class="fakeLoader"></div>
	<!-- end fakeloader -->
	
	<!-- navbar -->
	<div class="navbar profile">
		<div class="left profile-photo">
			<img src="img/svg/profile/profile_main_photo.svg" alt="">
		</div>
		<div class="title">
		</div>
		<div class="right" style="text-align: right;">
			<a href="#" class="toolbar-link">
						<i class="icon ion-ios-log-out"></i>
					</a>
<?php echo '

			<a href="#" class="right-sidebar"><p class="right-sidebar-name"> '.$_SESSION["auth_name"].' </p> <p class="right-sidebar-name">'.$_SESSION["auth_surname"].'</p></a>
			<a href="#" class="right-sidebar"><div class="right-sidebar-lvl"><p class="right-sidebar-lvl-text">18 lvl</p></div></a>
			<a href="#" class="right-sidebar-flex"><i class="icon ion-ios-star"><span class="rate-num">7,8</span></i><p class="right-sidebar-feedback">6 отзывов</p></a>
		</div>
	</div>
	<!-- end navbar -->


	<!-- pages wrapper -->
	<div class="pages-wrapper">



		<!-- separator -->
		<div class="separator-large"></div>
		<div class="separator-large"></div>
		<div class="separator-large"></div>


		<!-- end separator -->
		
		<!-- profile -->
		<div class="navbar profile-about">
		<div class="left">
			<p class="right-about-text">Информация обо мне</p>
		</div>
		<div class="title">
		</div>
		<div class="right" style="text-align: right;">
			<a href="reg-master/discribe_yourself.html" class="right-sidebar"><p class="right-about-change">Изменить</p></a>
		</div>

		<div class="profile-about-describe text-center"><p>'.$_SESSION['auth_about'].'</p></div>

	</div>

		<div class="separator-large"></div>
		<div class="separator-large"></div>
		<div class="separator-large"></div>

		<div class="navbar profile-about">
		<div class="left">
			<p class="right-about-text">Услуги и цены</p>
		</div>
		<div class="title">
		</div>
		<div class="right" style="text-align: right;">
			<a href="uslugi/uslugi_podkategory_nails.html" class="right-sidebar"><p class="right-about-change">Изменить</p></a>
		</div>
		
	</div>
		<!-- grid system -->
		<div class="grid-system">
		
		<div class="profile-about-cost"><p>'.$_SESSION["auth_usluga"].'</p></div>
		
		
		</div>
		'; ?>


	
		<div class="navbar profile-about">
		<div class="left">
			<p class="right-about-text">Фото работ</p>
		</div>
		<div class="title">
		</div>
		<div class="right" style="text-align: right;">
			<a href="uslugi/add_photo_page.html" class="right-sidebar"><p class="right-about-change">Изменить</p></a>
		</div>
	</div>
		<div class="feature-slide">
			<div class="swiper-container swiper-style">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="content shadow-sm profile-works">
							
							<img class="profile-works-photo" src="img/describe-img/Rectangle 39.png" alt="">
							
						</div>
					</div>
					<div class="swiper-slide">
						<div class="content shadow-sm profile-works">
							
							<img class="profile-works-photo" src="img/describe-img/Rectangle 39.png" alt="">
							
						</div>
					</div>
					<div class="swiper-slide">
						<div class="content shadow-sm profile-works">
							
							<img class="profile-works-photo" src="img/describe-img/Rectangle 39.png" alt="">
							
						</div>
					</div>
					<div class="swiper-slide">
						<div class="content shadow-sm profile-works">
							
							<img class="profile-works-photo" src="img/describe-img/Rectangle 39.png" alt="">
							
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="navbar profile-about">
		<div class="left">
			<p class="right-about-text">6 отзывов</p>
		</div>
		<div class="title">
		</div>
		<div class="right" style="text-align: right;">
			<a href="#" class="right-sidebar"><p class="right-about-text">Все</p></a>
		</div>
	</div>

	<div class="separator-large"></div>

	<div class="navbar profile">
		<div class="left comment-user-photo">
			<img class="comment-user-photo-main" src="img/svg/profile/user_in_comment.svg" alt="">
		</div>
		<div class="title profile-comments" style="text-align: left;">
			<a href="#" class="right-sidebar"><p class="name-comment">Карина Котова</p></a>
			<a href="#" class="right-sidebar"><p class="date-comment">18.12.2019</p></a>
		</div>
		<div class="comment-text"><p>Lorem ipsum dolor sit, amet consectetur adipisicing, elit. Aut accusantium minima earum doloribus tenetur repellendus ab odio voluptate, praesentium esse voluptas est quas nisi recusandae tempore ad vel et molestias?</p></div>
	</div>
			<div class="separator-large-adapt"></div>
				
	<div class="navbar profile">
		<div class="left comment-user-photo">
			<img class="comment-user-photo-main" src="img/svg/profile/user_in_comment.svg" alt="">
		</div>
		<div class="title profile-comments" style="text-align: left;">
			<a href="#" class="right-sidebar"><p class="name-comment">Карина Котова</p></a>
			<a href="#" class="right-sidebar"><p class="date-comment">18.12.2019</p></a>
		</div>
		<div class="comment-text"><p>Lorem ipsum dolor sit, amet consectetur adipisicing, elit. Aut accusantium minima earum doloribus tenetur repellendus ab odio voluptate, praesentium esse voluptas est quas nisi recusandae tempore ad vel et molestias?</p></div>
	</div>
			<div class="separator-large-adapt"></div>
						
	<div class="navbar profile">
		<div class="left comment-user-photo">
			<img class="comment-user-photo-main" src="img/svg/profile/user_in_comment.svg" alt="">
		</div>
		<div class="title profile-comments" style="text-align: left;">
			<a href="#" class="right-sidebar"><p class="name-comment">Карина Котова</p></a>
			<a href="#" class="right-sidebar"><p class="date-comment">18.12.2019</p></a>
		</div>
		<div class="comment-text"><p>Lorem ipsum dolor sit, amet consectetur adipisicing, elit. Aut accusantium minima earum doloribus tenetur repellendus ab odio voluptate, praesentium esse voluptas est quas nisi recusandae tempore ad vel et molestias?</p></div>
	</div>
			<div class="separator-large-adapt"></div>	
			
	<a href="#win4">
		<div class="button-default text-center">
						<button class="button-comment">Оставить отзыв</button>
		</div>
	</a>
	</div>
	</div>
		<div class="separator-large"></div>

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
					<a href="settings.php" class="toolbar-link">
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

	<a href="#x" class="overlay" id="win4"></a>
			<div class="popup">
				<form class="form-fill text-center add_category_input">
					<div class="form-wrapper">
						<div class="add_category_header"><p>Оставьте ваш отзыв</p></div>
								<div class="separator-small"></div>

						<div class="input-wrap">
							<input type="text" placeholder="Ваш отзыв">
						</div>
					</div>
					<div class="separator-large"></div>
					<div class="button-default">
						<button class="button">Сохранить</button>
					</div>
				</form>
	<!-- end pages wrapper -->

	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/fakeLoader.js"></script>
	<script src="js/swiper.min.js"></script>
	<script src="js/main.js"></script>

</body>
</html>