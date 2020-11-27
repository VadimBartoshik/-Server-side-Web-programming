<?php
//Устанавливаем доступы к базе данных:
	$host = 'localhost'; //имя хоста
	$user = 'root'; //имя пользователя
	$password = 'dflbv181818'; //пароль
	$db_name = 'test'; //имя базы данных
	
	
	
	$connection = mysqli_connect($host, $user, $password, $db_name)
	or die( mysqli_error($connection) );
	$name="Вадик";
	$query = "INSERT INTO `worker` (`id`, `name`, `age`, `salary`) VALUES (NULL, '".$name."', '26', '2300');";
	
	mysqli_query($connection, $query)
	or die( mysqli_error($connection) );
	//for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	//var_dump($data);
?>