<?php
Session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>page 2</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
<div class="main-content">
        <p><img src="welcomeImage.jpg" alt="register"></p>

        <form class="form-register">
            <h1>Login</h1>
            <input type="text" name="txt_firstName" id="fname" placeholder="Введите имя">
            <input type="text" name="txt_lastName" id="lname" placeholder="Введите Фамилию">
            <input type="text" name="txt_email" id="email" value ="<?php echo $_SESSION['email'];?>">
            <input type="password" name="txt_password" id="password" placeholder="Введите пароль">
		    <input type="submit" name="btn_register" value="сохранить">
			
            <a href="index.php" class="form-log-in-with-existing"><b> вернуться на предыдущую страницу </b></a>
        </form>
		
    
	</div>
</body>

</html>