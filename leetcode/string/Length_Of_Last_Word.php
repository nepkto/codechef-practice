<?php
function lengthOfLastWord($str)
{
    // iteration from last approach
    $count = 0;
    $flag = false;
    for ($i = strlen($str) - 1; $i >= 0; $i--) {
        // Once the first character from last
        // is encountered, set char_flag to true.
        if (($str[$i] >= 'a' && $str[$i] <= 'z') ||
            ($str[$i] >= 'A' && $str[$i] <= 'Z')
        ) {
            $flag = true;
            $count++;
        }

        // When the first space after the
        // characters (from the last) is
        // encountered, return the length
        // of the last word
        else {
            if ($flag == true)
                $count;
                break;
        }
        // echo $count;
    }
    echo $count . "<br>";
}

lengthOfLastWord("   fly me   to   the moon  ");
lengthOfLastWord("a");
lengthOfLastWord("Hello World");

function lengthOfLastWord1($s)
{
    $arr = str_split(trim($s));
    $str = '';
    for ($i = count($arr); $i >= 0; $i--) {
        if ($arr[$i] == ' ') {
            break;
        } else {
            $str .= $arr[$i];
        }
    }

    return strlen($str);
}


function lengthOfLastWord2($s)
{
    $arr = explode(" ", trim($s));
    $lastWord = $arr[count($arr) - 1];
    return strlen($lastWord);
}
