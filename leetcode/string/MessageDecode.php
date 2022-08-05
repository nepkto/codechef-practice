<?php

function decodeMessage($key, $message) {
   
    $uniqueKeys = [];
    $alphabets = range('a','z');
    $_key = str_replace(' ', '',$key);
    for($i = 0; $i < strlen($_key); $i++)
    {
        if(!in_array($_key[$i],$uniqueKeys)) {
            array_push($uniqueKeys,$_key[$i]);
        }
    }
    $combined = array_combine($uniqueKeys, $alphabets);
    $msg = '';
   
    for($i = 0; $i <strlen($message); $i++) {
        if($message[$i] == ' ') {
            $msg = $msg . ' ';
        } else {
            $msg = $msg . $combined[$message[$i]];

        }
    }
    
    echo $msg;
}



decodeMessage("the quick brown fox jumps over the lazy dog","vkbs bs t suepuv");