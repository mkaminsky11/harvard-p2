<?php
	function random_word(){
		$simple = file_get_contents("http://randomword.setgetgo.com/get.php");
		return $simple;
	}
	function random_words($num){
		$ret = array();
		for($i = 0; $i < $num; $i++){
			array_push($ret,random_word());
		}
		return $ret;
	}
?>