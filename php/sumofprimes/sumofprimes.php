<?php
$primes = 0;
$sum = 0;
for($i=0;$primes < 1000;$i++){
	if(isPrime($i)){
		$primes++;
		$sum += $i;
	}
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

echo $sum;

?>