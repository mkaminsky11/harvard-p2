<?php


require("random.php");

function generate($num, $number, $capital, $punc, $camel){
	$arr = random_words($num); //base array
	
	$random_number = "";
	if($number){
		$random_number = "-".rand();
	}
	
	
	if($capital){
		$arr[0] = ucfirst($arr[0]); 
	}
	
	$ret = implode(" ",$arr);
	
	if($camel){
		for($i = 0; $i < count($arr); $i++){
			$arr[$i] = ucfirst($arr[$i]);
		}
		$ret = implode("", $arr); //join like this "Camel","Something" -> CamelSomething
	}

	$pun = "";
	if($punc){
		$pun = array(".",",","$","%","^","&","*","(",")","-","+","[","]","{","}");
		$pun = array_rand($pun,1);
	}
	
	$ret = $ret.$random_number.$pun;
	
	return $ret;
	
}
?>