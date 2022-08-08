<?php

function reverseString($num) {
	// $tmp = [];
	// $newNum = strval($num);

	// for($i =0; $i < strlen($num); $i++) {
		
	// }
	$tmp = '';
	$count = strlen($num);
	while ($count > 0) {
		$tmp  = $tmp . $num[$count-1];
		$count--;
	}	

	return $tmp;
}
echo reverseString("abde");