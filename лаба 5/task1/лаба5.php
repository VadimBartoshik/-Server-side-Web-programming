<?php
  session_start();

  $_SESSION['text'] = $_SESSION['text']."test ";

  echo $_SESSION['text']."<br>";
?>
  <a href="page2.php"> На следующую страницу </a>