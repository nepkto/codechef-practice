<?php
// https://www.youtube.com/watch?v=QtEtcXPqRPk
function addBinary($b1,$b2) {
  
    if(strlen($b1) < strlen($b2)) {
        $swap = $b1;
        $b1 = $b2;
        $b2 = $swap;
    }
   
    $result = "";
    $carry = false;

    for($i =0; $i< strlen($b1); $i++) 
    {
        $i1 = strlen($b1) - 1 - $i;
        $i2 = strlen($b2) - 1 - $i;
        
        $count_ones = 0;

        if($b1[$i1] == "1") {
            $count_ones += 1;
        }

        if($i2 >=0 and $b2[$i2] == "1") {
            $count_ones += 1;
        }

        if($carry) {
            $count_ones += 1;
        }
        if($count_ones % 2 == 0) {
            $result .= "0";
        } else {
            $result .= "1";
        }

        if($count_ones > 1) {
            $carry = true;
        } else {
            $carry = false;
        }
    }
    if($carry) {
        $result .= "1";
    }
   
   echo strrev($result) . "<br>";
}

addBinary("11","101");

// addBinary("101","1");

// addBinary("1010","1011");