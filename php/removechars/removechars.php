<?php
$file = fopen($argv[1],'r');

while(!feof($file)){
	$split = explode(", ",trim(fgets($file)));
	$badchars = str_split($split[1]);
	echo str_replace($badchars, '', $split[0]) . "\n";
}

?>