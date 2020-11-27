<?php
//Принимаем постовые данные
$name=$_POST['name'];
$message=$_POST['message'];

$ip=$_SERVER['REMOTE_ADDR'];
 
//формируем строку для записи
$text=$name.':  '.$message;
 
//открываем файл для записи.Если файл не существует-он будет создан
$file  =  fopen('message.txt', 'a+');
//записываем строку
fputs ($file, $text);
//закрываем файл
fclose ($file);
?>	