<?php
	require 'db_connect.php';

	$data = $_POST;
	$login = $data['login'];


	if( isset($data['auth']) )
	{
		$errors = array();

        $password   = md5($data['pass']);
        $password   = strrev($password);
        $password   = "9nm2rv8q".$password."2yo6z";

        
		$user = mysqli_query($link, "SELECT * FROM `masters` WHERE `login` = '$login' AND `password` = '$password'");
		If (mysqli_num_rows($user) > 0)
		{
			session_start();
				$row = mysqli_fetch_array($user);
				$_SESSION['logged_user'] = $row;
				$_SESSION['auth_id'] = $row["id"];
				$_SESSION['auth_login'] = $row["login"];
				$_SESSION['auth_password'] = $row["password"];
				$_SESSION['auth_name'] = $row["name"];
				$_SESSION['auth_surname'] = $row['surname'];
				// $_SESSION['auth_profile_pic'] = $row['profile_pic'];
				$_SESSION['auth_about'] = $row['about'];
				$_SESSION['auth_usluga'] = $row['about_usluga'];
				$_SESSION['auth_city'] = $row['city'];
				$_SESSION['auth_uslugi'] = $row['uslugi'];
				$_SESSION['auth_wpp'] = $row['wpp'];
				$_SESSION['auth_inst'] = $row['inst'];
                $_SESSION['auth_tg'] = $row['tg'];
				$_SESSION['auth_datetime'] = $row['regdate'];

				header("Location: profile.php");
		}
			else
		{

			$errors[] = 'Неверно введён логин или пароль!';
	}

		if( !empty($errors) )
		{
			echo '<div class="notification n-error">
					'.array_shift($errors).'
					<a href="http://animecore.ru">Вернитесь, и попробуйте ещё раз. Мы скоро исправим такую плохую авторизацию, простите. </a>
				</div>';
                echo $login;
                echo $password;
                echo $true_pass;
		}

	}
?>
