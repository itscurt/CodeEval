<?php
$file = fopen($argv[1],'r');

while(!feof($file)){
	$in = str_split(trim(fgets($file)));
	echo sizeof($in);
	$map = array(
		array('A','B','C','E'),
		array('S','F','C','S'),
		array('A','D','E','E')
	);

	$match = FALSE;	
	foreach ($map as $key => $value) {
		$grid = $map;
		$x = array_search($in[0], $value);
		$input = $in;
		if($x !== FALSE){
			if(isset($in[0+1])){
				unset($grid[$key][$x]);
				array_shift($input);
				if(start($input,$key,$grid)){
					$match = TRUE;
				}
			}else
				$match = TRUE;
		}
	}

	if($match == TRUE)
		echo "True";
	else
		echo "False";

	echo "\n";
}

function start($in,$key,$map){
	$any_true = FALSE;
	if(sizeof($in) == 0){
		return true;
	}
	echo sizeof($in);
	//echo $in[key($in)];
	if(isset($map[$key-1])){
		$grid = $map;
		$input = $in;
		$b = array_search($in[key($in)], $map[$key-1]);
		if($b !== FALSE){
			unset($grid[$key-1][$b]);
			array_shift($input);
			$any_true = start($input,$key-1,$grid);
		}
	}

	if(!$any_true&&isset($map[$key]) > 0){
		$grid = $map;
		$input = $in;
		$c = array_search($in[key($in)], $map[$key]);
		if($c !== FALSE){
			unset($grid[$key][$c]);
			array_shift($input);
			$any_true = start($input,$key,$grid);
		}
	}

	if(!$any_true&&isset($grid[$key+1])){
		$grid = $map;
		$input = $in;
		$d = array_search($in[key($in)], $map[$key+1]);
		if($d !== FALSE){
			unset($grid[$key+1][$d]);
			array_shift($input);
			$any_true = start($input,$key+1,$grid);
		}
	}
 
	return $any_true;
}

?>