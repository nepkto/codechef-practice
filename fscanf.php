<?php

// $handle = fopen("sam.txt","r");

// $info = fscanf($handle, "%s\t%s\t%s\n");

// while(! feof($handle)) {
// 	// list($a,$b,$x,$y) = $info;
// 	// echo '$a =' . $a; 
// 	list ($name, $profession, $countrycode) = $info;
// 	echo $name;
// }	
// fclose($handle);

$handle = fopen("sam.txt", "r");
$num = fscanf($handle, "%d");
list($n) = $num;
echo 'number '. $n . "<br>";
while ($userinfo = fscanf($handle, "%s\t%s\t%s\n")) {
    list ($name, $profession, $countrycode) = $userinfo;
    echo $name ." " . $profession . "<br>";
    //... do something with the values
}
fclose($handle);