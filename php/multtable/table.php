<?php
for($i = 1; $i<= 12; $i++){
	$line = "";
	for($x = 1; $x<=12; $x++){
		$line .= str_pad(($i*$x), 4, " ", STR_PAD_LEFT);
	}
	echo $line . "\n";
}

?>