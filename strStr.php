<?php
// What should we return when needle is an empty string? This is a great question to ask during an interview.

// For the purpose of this problem, we will return 0 when needle is an empty string. This is consistent to C's strstr() and Java's indexOf().
// https://gist.github.com/wszdwp/c3cd212f449ef9cb289d

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