<?php

$file = fopen($argv[1],'r');

while(!feof($file))
  {
  $nums = explode(",", fgets($file));
  echo var_dump($nums);
  //echo implode(',', array_unique($nums));
  }

fclose($file);
?>