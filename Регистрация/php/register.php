<?php
ob_start();// функция, чтобы работала переадресация

$name=$_POST['register_name'];
$email=$_POST['register_email'];
$password=$_POST['register_password'];

//Устанавливаем доступы к базе данных:
	$host = 'localhost'; //имя хоста
	$user = 'root'; //имя пользователя
	$password_bd = 'dflbv181818'; //пароль
	$db_name = 'shop'; //имя базы данных
	
	$connection = mysqli_connect($host, $user, $password_bd, $db_name)
	or die( mysqli_error($connection) );
	
	$query = "INSERT INTO `user` (`user_id`, `name`, `email`, `password`, `role`) 
	VALUES (NULL, '".$name."', '".$email."', '".$password."', 'user');";
	
	mysqli_query($connection, $query)
	or die( mysqli_error($connection) );
	
	header('Location: ../index.html');
	ob_end_flush();

?>

