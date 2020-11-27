<?php

$image = imagecreatetruecolor(400,600) // создаем изображение...

or die('Cannot create image'); // ...или прерываем работу скрипта в случае ошибки

// "Зальем" фон картинки голубым цветом...

imagefill($image, 110, 290, 0x37b0b8);

// Нарисуем желтый контурный эллипс...

imageellipse($image, 40, 30, 50, 50, 0xFFFF00);


//тело
imagefilledrectangle($image,100,50,300,300,0xFFFF00);
imageline($image, 100, 50, 300, 50, 0x000000);
imageline($image, 100, 50, 100, 300, 0x000000);
imageline($image, 300, 300, 300, 50, 0x000000);
//рубашка
imagefilledrectangle($image,100,300,300,325,0xd7e1e1);
imagefilledrectangle($image,300,275,350,325,0xd7e1e1);
imagefilledrectangle($image,50,275,100,325,0xd7e1e1);
imageline($image, 100, 300, 300, 300,  0x000000);
imageline($image, 100, 325, 300, 325,  0x000000);
imageline($image, 100, 325, 100, 300,  0x000000);
imageline($image, 300, 325, 300, 300,  0x000000);
imageline($image, 150, 300, 162.5, 312.5,  0x000000);
imageline($image, 162.5, 312.5, 175, 300,   0x000000);
imageline($image, 225, 300, 237.5, 312.5,  0x000000);
imageline($image, 237.5, 312.5, 250, 300,   0x000000);
imageline($image, 300, 275, 350, 275, 0x000000);
imageline($image, 300, 325, 350, 325, 0x000000);
imageline($image, 350, 275, 350, 325, 0x000000);
imageline($image, 300, 275, 300, 325, 0x000000);
imageline($image, 50, 275, 100, 275, 0x000000);
imageline($image, 50, 275, 50, 325, 0x000000);
imageline($image, 50, 325, 100, 325, 0x000000);
imageline($image, 100, 275, 100, 325, 0x000000);
//руки
$values1 = array(
            350, 287.5,  
            362.5, 287.5,
			362.5, 200,
			375,  200, 
			375,  312.5,
			350,  312.5,
			350, 287.5			 
              );
			  imagefilledpolygon($image, $values1, 6, 0xFFFF00);
$values2 = array(
 350, 287.5,  
 362.5, 287.5,
 362.5, 200,
 375,  200,
 375,  312.5,
 350,  312.5,
 350, 287.5			 
   );
//штаны
imagefilledrectangle($image,100,325,300,400,0x804f01);
imageline($image, 100, 325, 100, 400, 0x000000);
imageline($image, 100, 400, 300, 400, 0x000000);
imageline($image, 300, 400, 300, 325, 0x000000);
imagefilledrectangle($image,125,400,175,450,0x804f01);
imageline($image, 125, 400, 175, 400, 0x000000);
imageline($image, 175, 400, 175, 450, 0x000000);
imageline($image, 175, 450, 125, 450, 0x000000);
imageline($image, 125, 450, 125, 400, 0x000000);
imagefilledrectangle($image,225,400,275,450,0x804f01);
imageline($image, 225, 400, 275, 400, 0x000000);
imageline($image, 275, 400, 275, 450, 0x000000);
imageline($image, 275, 450, 225, 450, 0x000000);
imageline($image, 225, 450, 225, 400, 0x000000);
//ноги
imagefilledrectangle($image,137.5,450,162.5,525,0xFFFF00);
imageline($image, 137.5, 450, 162.5, 450, 0x000000);
imageline($image, 162.5, 450, 162.5,525, 0x000000);
imageline($image, 162.5, 525, 137.5, 525, 0x000000);
imageline($image, 137.5, 525, 137.5, 450, 0x000000);
imagefilledrectangle($image,237.5,450,262.5,525,0xFFFF00);
imageline($image, 237.5, 450, 262.5, 450, 0x000000);
imageline($image, 262.5, 450, 262.5,525, 0x000000);
imageline($image, 262.5, 525, 237.5, 525, 0x000000);
imageline($image, 237.5, 525, 237.5, 450, 0x000000);
//ботинки
imagefilledrectangle($image,100,525,162.5,550,0x000000);
imagefilledrectangle($image,237.5,525,300,550,0x000000);
//галстук
$values = array(
            175,  300,  
            200,  312.5,
			175,  325,
			200,  375, 
			225,  325,
			200,  312.5,
			225,  300,
			175,  300 
              );
			imagefilledpolygon($image, $values, 7, 0xff0000);
imageline($image, 175, 300, 225, 325, 0xff0000);
imageline($image, 225, 325, 200, 375, 0xff0000);
imageline($image, 200, 375, 175, 325, 0xff0000);
imageline($image, 175, 325, 225, 300, 0xff0000);
//глаза
imagefilledellipse($image, 150, 125, 50, 75, 0xd7e1e1);
imagefilledellipse($image, 250, 125, 50, 75, 0xd7e1e1);
imageellipse($image, 150, 125, 50, 75, 0x000000);
imageellipse($image, 250, 125, 50, 75, 0x000000);
imagefilledellipse($image, 150, 125, 25, 25, 0x169ba8);
imagefilledellipse($image, 250, 125, 25, 25, 0x169ba8);
imageellipse($image, 150, 125, 25, 25, 0x000000);
imageellipse($image, 250, 125, 25, 25, 0x000000);
imagefilledellipse($image, 150, 125, 15, 15, 0x000000);
imagefilledellipse($image, 250, 125, 15, 15, 0x000000);
//рот

imagearc($image, 200, 200, 100, 100, 0, 180, 0x000000);
imagearc($image, 200, 200, 100, 50, 0, 180, 0x000000);
// Устанавливаем тип документа - "изображение в формате PNG"...
//зубы

header('Content-type: image/png');

// ...И, наконец, выведем сгенерированную картинку в формате PNG:

imagepng($image);

imagedestroy($image); // освобождаем память, выделенную для изображения

?>