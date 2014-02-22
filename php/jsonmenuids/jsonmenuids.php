<?php
$file = fopen($argv[1],'r');

while(!feof($file)){
	$data = json_decode(fgets($file),true);
	$sum = 0;
	if($items = $data['menu']['items']){
		foreach($items as $item){
			if(isset($item['label']))
				$sum+= $item['id'];
		}
		echo $sum . "\n";
	}
}
fclose($file);
?>