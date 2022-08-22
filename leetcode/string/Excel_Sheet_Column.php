<?php

function columnName($number)
{
    $colName = '';
    while($number >=1) {
        $rem = $number % 26;

        if($rem == 0) {
            $colName .= 'Z';
            $number = ($number / 26) -1;
        } else {
            $colName .= chr(($rem -1) + 65);
            $number /= 26;
        }
    }
    return strrev($colName);
}

echo columnName(1) ."<br>";
echo columnName(65) ."<br>";
echo columnName(701) ."<br>";
echo columnName(2034) ."<br>";
echo columnName(702) ."<br>";
