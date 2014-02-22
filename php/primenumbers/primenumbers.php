<?php
$file = fopen($argv[1],'r');

while(!feof($file)){
	$n = fgets($file);
	$primes = array();
	for($i = 2; $i < $n; $i++){
		if(isPrime($i))
			$primes[] = $i;
	}
	echo implode(',', $primes) . "\n";
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

?>