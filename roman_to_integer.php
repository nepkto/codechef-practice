<?php

class RomanToInteger
{
    function romanToInteger($roman)
    {
        $result = $i = 0;
        if(strlen($roman) == 1) {
            print $this->getInteger($roman[$i]);
            return;
        }
        while ($i < strlen($roman)) {
            $current = $this->getInteger($roman[$i]);
            $next = $this->getInteger($roman[$i + 1]);

            if($current >= $next) {
                $result += $current;
                $i++;
            } else {
                $result = $result + $next - $current;
                $i+=2;
            }
        }

        print ' '.$result;
    }

    function getInteger($symbol)
    {
        switch ($symbol) {
            case 'I':
                return 1;
            case 'V':
                return 5;
            case 'X':
                return 10;
            case 'L':
                return 50;
            case 'C':
                return 100;
            case 'D':
                return 500;
            case 'M':
                return 1000;
            default:
                return -1;
        }
    }
}
$obj  = new RomanToInteger();
$obj->romanToInteger('X');
$obj->romanToInteger('XX');
$obj->romanToInteger('XXX');
$obj->romanToInteger('XXX');
$obj->romanToInteger('MCMXCIV');
$obj->romanToInteger('LVIII');

