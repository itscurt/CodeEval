
<?php
$file = fopen($argv[1],'r');

$set1 = implode(array_merge(range('a', 'z'),range('A', 'Z')));
$set2 = implode(array_merge(range('A', 'Z'),range('a', 'z')));
	
while(!feof($file)){
	echo strtr(fgets($file), $set1, $set2);
}

?>