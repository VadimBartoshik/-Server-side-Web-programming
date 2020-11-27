<?php
$array1 = array(1,2,4,5);
$array2 = array(6,7,9,10);
$array3 = array_reverse($array2);
			
array_splice($array1,(count($array1))/2, 0,$array3);	
	
	foreach ($array1 as $value)
		{
			print($value);
		}
?>