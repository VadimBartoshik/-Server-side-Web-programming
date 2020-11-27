<!DOCTYPE HTML>
<html>

<head>

<title>index</title>
<link rel="stylesheet" href="MainPath.css">
 <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>

<body>
<form class="form-register" method="post">
		 <input type="text" name="email_text" placeholder="Введите email">
		 <input type="submit" name="enter" value="запомнить">
	</form>
	<a href="page2.php"> перейти на следующую страницу</a>
	<?php
	     session_start();
		if (isset($_POST['enter'])) {
          $_SESSION['email']= $_POST['email_text'];
		  $ip=$_SERVER['REMOTE_ADDR'];
		}
	echo  $_SESSION['email'];
	?>
</body>

</html>