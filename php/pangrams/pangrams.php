<?php
$file = fopen($argv[1],'r');

while(!feof($file)){
	$line = strtolower(fgets($file));
	$alpha = range('a', 'z');
	$missing = NULL;
	foreach ($alpha as $char) {
		if(strpos($line, $char) === false)
			$missing .= $char;
	}
	if(!$missing)
		$missing = "NULL";
	echo $missing . "\n";
}

?>