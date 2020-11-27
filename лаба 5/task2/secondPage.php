<?php
  session_start();

  $_SESSION['something'] ="Приветствую вас на второй страничке нашего сайта";
  echo $_SESSION['something']."<br>";
?>
<a href="firstPage.php"> На предыдущую страницу </a>