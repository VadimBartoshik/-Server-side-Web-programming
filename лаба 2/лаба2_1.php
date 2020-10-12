<?php
$array = array(-6,7,-2,-3,9);
	foreach ($array as $value)
	{
		array_push($array, abs($value));
		array_shift($array);		
	}
	$min = min($array);
	print($min);

?>