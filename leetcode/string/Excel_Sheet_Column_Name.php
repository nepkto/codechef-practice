<?php

// A -> 1
// B -> 2
// Z -> 3

// AA -> 27
// AB -> 28

/**
 * Hint as we convert to decimal value
 * ‘1’ = 1
 *’13’ = (1 x 10) + 3 = 13
 *‘133’ = (13 x 10) + 3 = 133
 *‘1337’ = (133 x 10) + 7 = 1337
 */

 function titleToNumber(string $columnTitle)
 {
    $ans = 0;
    for($i = 0; $i<strlen($columnTitle);$i++) {
        $ans = ($ans * 26) + (ord($columnTitle[$i]) -64);
    }
    return $ans;
 }
 echo titleToNumber("ZY");
