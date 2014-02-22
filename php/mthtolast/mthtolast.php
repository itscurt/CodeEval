<?php
$file = fopen($argv[1],'r');

while(!feof($file)){
	$line = explode(' ', trim(fgets($file)));
	$n = count($line)-1;
	echo $line[$n - $line[$n]] . "\n";
}

?>