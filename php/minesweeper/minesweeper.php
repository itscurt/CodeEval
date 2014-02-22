<?php
$file = fopen($argv[1],'r');

while(!feof($file)){
	$data = explode(';',trim(fgets($file)));
	$data[1] = str_replace('.', '0', $data[1]);
	$data[1] = str_split($data[1]);
	$grid = array_chunk($data[1], $data[0][2]);

	foreach($grid as $y=>$row){
		foreach($row as $x=>$i){
			if($i == 'x')
				break;
			if(isset($grid[$y-1][$x-1]) && $grid[$y-1][$x-1] == '*')
				$grid[$y][$x]++;
			if(isset($grid[$y-1][$x]) && $grid[$y-1][$x] == '*')
				$grid[$y][$x]++;
			if(isset($grid[$y-1][$x+1]) && $grid[$y-1][$x+1] == '*')
				$grid[$y][$x]++;

			if(isset($grid[$y][$x-1]) && $grid[$y][$x-1] == '*')
				$grid[$y][$x]++;
			if(isset($grid[$y][$x+1]) && $grid[$y][$x+1] == '*')
				$grid[$y][$x]++;

			if(isset($grid[$y+1][$x-1]) && $grid[$y+1][$x-1] == '*')
				$grid[$y][$x]++;
			if(isset($grid[$y+1][$x]) && $grid[$y+1][$x] == '*')
				$grid[$y][$x]++;
			if(isset($grid[$y+1][$x+1]) && $grid[$y+1][$x+1] == '*')
				$grid[$y][$x]++;
		}
	}

	foreach($grid as $y=>$row){
		foreach($row as $x=>$i){
			echo $i;
		}
	}

echo "\n";
}

?>