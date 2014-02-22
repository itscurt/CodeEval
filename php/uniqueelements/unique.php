<?php

$file = fopen($argv[1],'r');

while(!feof($file))
  {
  $nums = explode(",", fgets($file));
  $order = array();
  $lastnum = NULL;
  foreach($nums as $num){
  	if((int) $num != $lastnum){
  		$order[] = $num;
  	}
  	$lastnum = $num;
  }

  echo implode(',', $order) . "\n";
  }

fclose($file);
?>