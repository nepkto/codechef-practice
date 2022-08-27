<?php

function groupByOwners(array $files) : array
{
    $arr = [];
    $tmp = [];
    foreach($files as $file =>$name) {
        if(!in_array($name,$arr)) {
            array_push($arr,$name);
            $tmp[$name] = [$file];
        } else {
            $tmp[$name] = array_merge($tmp[$name],[$file]);
        }
    }
    return $tmp;
}

$files = array
(
    "Input.txt" => "Randy",
    "Code.py" => "Stan",
    "Output.txt" => "Randy"
);
var_dump(groupByOwners($files));
