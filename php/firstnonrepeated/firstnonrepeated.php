<?php
$file = fopen($argv[1],'r');

while(!feof($file)){
	$line = str_split(fgets($file));
	foreach($line as $key=>$char){
		if(sizeof(array_keys($line, $char))==1){
			echo $char."\n";
			break;
		}
	}
}

?>