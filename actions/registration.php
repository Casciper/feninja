<?php
include '../db_connect.php';

$errors = array(); 

// REGISTER USER
if (isset($_POST['reg_user'])) {

  $phone = $_POST['phone'];
  $pass = $_POST['pass'];

  // if( strlen($phone) < 10 || strlen($phone > 13) )
  //   {
  //     $errors[] = 'Логин не может быть меньше 5 и больше 15 цифр.';
  //   }

  // if( $pass == '' )
	// 	{
	// 		$errors[] = 'Введите пароль!';
	// 	}

  // $result = mysqli_query($link, "SELECT `login` FROM `masters` WHERE `login` = '$phone'");
	// 	if (mysqli_num_rows($result) > 0)
	// 		{
	// 			$errors[] = "К сожалению, такой логин уже занят.";
	// 		}

  // if ( count($errors) == 0 ) {

    $password   = md5($pass);
		$password   = strrev($password);
		$password   = "9nm2rv8q".$password."2yo6z";

    $ip = $_SERVER['REMOTE_ADDR'];

  	$query = mysqli_query($link, "INSERT INTO `masters` (login, password, ip) VALUES ('$phone', '$password', '$ip')");
    mysqli_query($link, $query);
    session_start();
  	$_SESSION['login'] = $phone;
  	$_SESSION['success'] = "Поздравляю! Вы зарегистрированы!";
  	  header('location: ../reg-master/sign-up-master2.php');
    }

// }
?>