<?php
class LongestCommonPrefix
{
    function longestCommonPrefix($strs)
    {
        $prefix = $strs[0];

        for ($i = 1; $i < count($strs); $i++) {
            $prefix = $this->getLCP($prefix, $strs[$i]);
           
        }
        echo $prefix ?: "NO LCP";
    }

    function getLCP($s1, $s2)
    {
        $i = 0;
        $str = '';
        while ($i < min(strlen($s1),strlen($s2))) {
            if ($s1[$i] == $s2[$i]) {
                $str = $str . $s1[$i];
                $i++;
            } else {
                break;
            }
        }
        return $str;
    }
}
$obj = new LongestCommonPrefix();
// $obj->longestCommonPrefix(["flower", "flowers", "flow"]);
$obj->longestCommonPrefix(["flower","flow"]);
$obj->longestCommonPrefix(["dog","racecar","car"]);
