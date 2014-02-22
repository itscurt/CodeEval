<?php

$highest = 0;

for($i = 3; $i<=1000; $i++){
	if(isPrime($i) && strrev($i) == $i)
		$highest = $i;
}

function isPrime($input){
	if($input == 2)
		return true;
	if($input % 2 == 0 || $input == 1)
		return false;
	for($i=3; $i <= ceil(sqrt($input)); $i+=2){
		if($input % $i == 0)
			return false;
	}
	return true;
}
echo $highest;
?>