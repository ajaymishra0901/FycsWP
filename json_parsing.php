<?php
	$string=file_get_contents("test.json");
	$json_a=json_decode($string,true);
	
	foreach($json_a as $key => $value){
		echo"<br/>".$key."<br/>";
		foreach($value as $k=>$v){
			echo"<b>".$k."</b>".$v."<br/>";
		}
	}
?>