<?php

$file = fopen($argv[1],'r');

while(!feof($file))
{
  $nums = explode(" ",fgets($file));
  $f = $nums[0];
  $b = $nums[1];
  $n = $nums[2];
  $out = array();
  for($i=1; $i<=$n;$i++){
  	$item = "";
  	if($i%$f == 0)
  		$item .= "F";
  	if($i%$b == 0)
  		$item .= "B";
  	if($item == '')
  		$item = $i;
  	$out[] = $item;
  }
  echo implode(" ", $out) . "\n";
}

fclose($file);
?>