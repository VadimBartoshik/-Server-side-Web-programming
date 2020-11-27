<?php
  session_start();
 
  if(!isset($_SESSION['time'])){
	 echo 'еще не обновляли страницу'; 
	 $_SESSION['time'] = time();
  }
  else{
	$_SESSION['time'] = time() - $_SESSION['time'];
	echo "Страница была обновлена ".$_SESSION['time']." секунд назад"."<br>";
    $_SESSION['time'] = time();
	
  }
?>