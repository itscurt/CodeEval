<?php
$file = fopen($argv[1],'r');

while(!feof($file)){
	$biggest = "";
	$data = explode(" ",trim(fgets($file)));
	foreach ($data as $word) {
		if(strlen($word) > strlen($biggest))
			$biggest = $word;
	}
	echo $biggest . "\n";
}

?>