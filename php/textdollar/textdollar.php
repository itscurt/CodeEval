<?php
$file = fopen($argv[1],'r');

while(!feof($file)){
	spit(trim(fgets($file)));
}

function spit($a){

	$nums = range(0, 9);
	$text = array("","One","Two","Three","Four","Five","Six","Seven","Eight","Nine");
	$tens = array("","Ten","Twenty","Thirty","Forty","Fifty","Sixty","Seventy","Eighty","Ninety");
	$ten = array("Ten", "Eleven","Twelve","Thirteen","Fourteen","Fifteen","Sixteen","Seventeen","Eighteen","Nineteen");
	$num = array_combine($nums, $text);
	$tens = array_combine($nums, $tens);
	$ten = array_combine($nums,$ten);

	if(!$a){
		echo "Dollars\n";
		return;
	}
	$str = str_split($a);
	$x = $str[0];
	$pos = sizeof($str);

	if($x != 0){
		if($pos == 10){
			echo $num[$x] . "Billion";
		}
		if($pos == 9){
			echo $num[$x] . "Hundred";
		}
		if($pos == 8){
			echo $tens[$x];
		}
		if($pos == 7){
			echo $num[$x] . "Million";
		}
		if($pos == 6){
			echo $num[$x] . "Hundred";
		}
		if($pos == 5){
			if($x == 1){
				echo $ten[$str[1]] . "Thousand";
				array_shift($str);
			}else
				echo $tens[$x];
		}
		if($pos == 4){
			echo $num[$x] . "Thousand";
		}
		if($pos == 3 || $pos == 6){
			echo $num[$x] . "Hundred";
		}
		if($pos == 2){
			echo $tens[$x];
		}
		if($pos == 1){
			echo $num[$x];
		}
	}
	
	array_shift($str);
	spit(implode("", $str));

}

function cut($a){
	$split = str_split($a);
	$num = $split[0] * pow(10, count($split)-1);
	return $num;
}

function names($a){
	$nums = str_split($a);
	$num = $nums[0];
	switch($num){
		case 1:
			if(in_array(sizeof($nums), "258"))
				return "Ten";
			else
				return "One";
		case 2:
			return "Two";
		case 3:
			return "Three";
		case 4:
			return "Four";
		case 5:
			return "Five";
		case 6:
			return "Six";
		case 7:
			return "Seven";
		case 8:
			return "Eight";
		case 9:
			return "Nine";
	}
}

?>