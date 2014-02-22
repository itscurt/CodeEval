<?php
$file = fopen($argv[1],'r');

while(!feof($file)){
	$line = fgets($file);
	preg_match_all('#([a-j0-9])#', $line, $res);
	foreach($res[0] as $key=>$value){
		if(ord($value) >= 97)
			$res[0][$key] = chr(ord($value)-49);
	}
	if ($res[0]) {
		echo implode($res[0]);
	}else{
		echo "NONE";
	}
	echo "\n";
}

?>