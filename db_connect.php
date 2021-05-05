<?php
	// defined('maxui') or die('Доступ запрещён!');
	// session_start();
	$db_host		= 'localhost';
	$db_user		= 'nurrrba';
	$db_pass		= '24680callofduty';
	$db_database	= 'maxui'; 
	
	$link = new mysqli($db_host,$db_user,$db_pass);
	
	mysqli_select_db($link, $db_database) or die("Отсутствует соединение с БД. ".mysqli_error());
?>