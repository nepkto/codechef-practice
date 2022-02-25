<?php

function reverseString($num) {
	$tmp = [];
	$newNum = strval($num);

	// for($i =0; $i < strlen($num); $i++) {
		
	// }
	$tmp = '';
	$count = strlen($num);
	while ($count > 0) {
		$tmp  = $tmp . $newNum[0];
		return $count--;
	}	

	echo $tmp;
}
reverseString(123);