<?php
 $par = "{{}}()[()]";
 $par = "";
 $stack = [];
 $length = strlen($par);
 for ($i = 0; $i < $length; $i++) {
     // dump($stack);
     if ($par[$i] == '(' || $par[$i] == '{' || $par[$i] == '[') {
         array_push($stack, $par[$i]);
     } else {
         
         if (empty($stack)) {
             echo 'INVALID';
             return;
             //invalida parenthesis
         } else {
             $top = end($stack);
             if (
                 $par[$i] == ')' && $top == '(' ||
                 $par[$i] == '}' && $top == '{' ||
                 $par[$i] == ']' && $top == '['
             ) {
                 array_pop($stack);
             }
         }
     }
 }
 if (empty($stack)) {
     echo "Valid";
 } else {
     echo "Invalid";
 }
