<?php

$a = [2,7,11,15];

function twoSum($data, $target)
{
	$length = count($data);
	for($i=0; $i< $length ; $i++)
	{
		for($j=$i+1; $j< $length; $j++)
		{
			
			if($data[$i] + $data[$j] == $target)
			{
				print '[' . $i . ',' . $j . ']' . "\n";
			}
		}
	}
}
twoSum($a,9);