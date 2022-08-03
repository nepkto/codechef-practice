<?php

function strStrImplementation($haystack, $needle) {
    if(strlen($needle) == 0) return 0;
    if(!strstr($haystack,$needle)) {
        echo -1;
        // return -1;
    } else {
        $str =  strstr($haystack,$needle);
        echo strlen($haystack) -strlen($str);
        // return strlen($haystack) -strlen($needle);
    }
}
strStrImplementation("hello","ll"); // 2
strStrImplementation("aaaaa","bba"); // -1