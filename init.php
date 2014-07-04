<?php
/*
https://.....com?
words = 7 //7 words
num = true //a number?
symbol = false //a symbol
capital = true //capitalize first


*/

require('logic.php');

$output = generate(1, true, true, false, false);
//				num, numbers, capital, punc, camel


if($_POST){
	$n = -1; 
	if($_POST[dial]){
		$n = $_POST[dial];
	}
	
	$nu = false;
	if($_POST[number]){
		$nu = true;
	}
	
	$cap =false;
	if($_POST[capital]){
		$cap = true;
	}
	
	$p =false;
	if($_POST[punc]){
		$p = true;
	}
	
	$ca =false;
	if($_POST[camel]){
		$ca = true;
	}
	
	$output = generate($n, $nu, $cap, $p, $ca);
}

?>