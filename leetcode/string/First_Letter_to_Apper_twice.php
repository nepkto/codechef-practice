<?php
function repeatedCharacter($s) {
    $arr = [];
    for($i = 0; $i < strlen($s); $i++) {
        if(in_array($s[$i],$arr)) {
            echo $s[$i] . '<br>';
        } else {
            array_push($arr,$s[$i]);
        }
    }

}
repeatedCharacter('abbs');
repeatedCharacter('abdsa');