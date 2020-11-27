
<!DOCTYPE HTML>

<html>

<head>
	<title>index</title>
	<link rel="stylesheet" href="style.css">

</head>

<body>
	<form class="form-register" method="post">
		 <input type="text" name="country_text" placeholder="Введите страну">
		 <input type="submit" name="go" value="запомнить">
	</form>
	<?php
	     session_start();
		if (isset($_POST['go'])) {
          $_SESSION['country']= $_POST['country_text'];
		  $ip=$_SERVER['REMOTE_ADDR'];
		}
	
	?>
	<a href="test.php"> перейти на страницу test.php</a>
	

	
</body>

</html>