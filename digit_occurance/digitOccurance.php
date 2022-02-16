<?php

function totalOccurance($number)
{
	echo "Number " . $number .  "\n" . "total Digits " . strlen($number). "\n";
	$count = 0;
	while($number > 0) {
		if($number % 10 == 4) {
			$count++;
		}
		$number = $number/10;
	}

	echo "Occurence " . $count . "\n";
	echo "-----------" . "\n";
}

totalOccurance(7);
totalOccurance(447474);

// 447474/10 = 44747.4
// 44747/10 = 4474.7
// 4474/10 = 447.4
// 447/10 = 44.7
// 44/10 = 4.7
// 4/7 = 0


/**
 *  Code Chef
 *
/

/**	$input = explode("\n",file_get_contents("php://stdin"));

	$t = $input[0];

	for($i = 0;$i < $t;$i++) {
	    
	    $sum = 0;
	    
	    for($ii = 0;$ii < strlen($input[$i + 1]);$ii++) {
	        
	        if($input[$i + 1][$ii] == "4") {
	            
	            $sum++;
	            
	        }
	        
	    }
	    
	    echo $sum . "\n";
	    
	}
 */

