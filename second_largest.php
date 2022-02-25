<?php
$a = [120, 11, 400,300];

// $tmp = [];

// for ($i=0; $i < count($a) ; $i++) { 
// 	echo  "\n";
// 	if($a[$i] > $a[$i + 1]) {
// 		array_push($tmp, $a[$i]);
		
// 	} else {
		
// 	}

// }
// 	if($tmp[0] < $tmp[1]) {
// 		echo $tmp[0];
// 	} else {
// 		echo $tmp[1];
// 	}

$size =  count($a);
$m1 = $m2;

for ($i=0; $i < count($a) ; $i++) {


	if($a[$i] > $m1) {
		$m2 = $m1;
		$m1 = $a[$i];
	} elseif($a[$i] > $m2 && $a[$i] < $m1 ) {
		$m2 = $a[$i];
	}
}
echo "The largest num :" . $m1;
echo "<br>";
echo "The second largest num :" . $m2;
