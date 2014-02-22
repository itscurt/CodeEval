<?php

$file = fopen($argv[1],'r');

while(!feof($file))
  {
  	$words = explode(" ", trim(fgets($file)));
  	$new = array();
  	for($i=count($words)-1; $i>=0; --$i){
  		$new[] = $words[$i];
  	}
  	echo implode(" ", $new) . "\n";
  }

fclose($file);
?>