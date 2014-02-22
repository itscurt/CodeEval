<?php

$file = fopen($argv[1],'r');
while(!feof($file)){
	$match = FALSE;
	$in = str_split(trim(fgets($file)));
	$map = array(
		array('A','B','C','E'),
		array('S','F','C','S'),
		array('A','D','E','E')
	);

	foreach ($map as $key => $value) {
		$matches = array_keys($value,$in[0]);
		foreach($matches as $i){
			$grid = $map;
			$input = $in;
			array_shift($input);
			unset($grid[$key][$i]);
			if(start($input,$key,$i,$grid)){
				$match = TRUE;
				break 2;
			}
		}
	}

	echo (($match) ? "True":"False") ." \n";
}

function start($in,$key,$i,$map){
	global $match;

	if(sizeof($in) == 0){
		return true;
	}

	$x = $in[key($in)];

	if(isset($map[$key-1][$i]) && $map[$key-1][$i] == $x){
		$grid = $map;
		$input = $in;
		unset($grid[$key][$i]);
		array_shift($input);
		$match = start($input,$key-1,$i,$grid);
	}

	if(!$match && isset($map[$key][$i-1]) && $map[$key][$i-1] == $x){
		$grid = $map;
		$input = $in;
		unset($grid[$key][$i-1]);
		array_shift($input);
		$match = start($input,$key,$i-1,$grid);
	}

	if(!$match && isset($map[$key][$i+1]) && $map[$key][$i+1] == $x){
		$grid = $map;
		$input = $in;
		unset($grid[$key][$i+1]);
		array_shift($input);
		$match = start($input,$key,$i+1,$grid);
	}

	if(!$match && isset($map[$key+1][$i]) && $map[$key+1][$i] == $x){
		$grid = $map;
		$input = $in;
		unset($grid[$key][$i]);
		array_shift($input);
		$match = start($input,$key+1,$i,$grid);
	}
	return $match;
}

?>