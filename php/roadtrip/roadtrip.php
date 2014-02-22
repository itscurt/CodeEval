<?php
$file = fopen($argv[1],'r');

while(!feof($file)){
	preg_match_all("/[0-9]+/",fgets($file),$data);
	$distances = $data[0];
	sort($distances);
	$output = array();
	foreach($distances as $key=>$value){
		if($key == 0){
			$output[] = $value;
		}
		if(isset($distances[$key+1])){
			$output[] = $distances[$key+1] - $value;
		}
	}
	echo implode(',', $output) . "\n";
}
?>