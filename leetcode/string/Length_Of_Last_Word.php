<?php

function lengthOfLastWord($s) {
    $arr = str_split(trim($s));
    $str = '';
    for($i = count($arr); $i >= 0; $i--) {
        if($arr[$i] == ' ') {
            break;
        } else {
            $str .= $arr[$i];
        }
    }
    
    return strlen($str);
}
lengthOfLastWord("   fly me   to   the moon  ");
lengthOfLastWord("a");
lengthOfLastWord("Hello World");


function lengthOfLastWord2($s) {
    $arr = explode(" ",trim($s));
    $lastWord = $arr[count($arr) -1];
    return strlen($lastWord);
        
}