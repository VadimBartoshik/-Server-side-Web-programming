<?php
$array = array(-6,0,0,0,9);
$count=0;
	foreach ($array as $value)
	{
		if($value === 0){
			$count++;
		}		
	}
	print($count);
?>