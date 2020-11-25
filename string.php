<?php
	$str="this is string";
	echo "<b>string length:<b>".strlen($str)."<br/><br/>";
	echo "<b>word count:<b>".str_word_count($str)."<br/><br/>";
	echo "<b>string reverse:<b>".strrev($str)."<br/><br/>";
	echo "<b>string position:<b>".strpos($str,"is")."<br/><br/>";
	echo "<b>string position<:b>".strpos($str,"php")."<br/><br/>";
	echo "<b>string replace:<b>".str_replace("string","php programming",$str)."<br/><br/>";
	echo "<b>srting UC words:<b>".ucwords($str)."<br/><br/>";
	echo "<b>string to upper case:<b>".strtoupper($str)."<br/><br/>";
	echo "<b>string to lower case:<b>".strtolower($str)."<br/><br/>";
	echo "<b>string repeat:<b>".str_repeat($str,3)."<br/><br/>";
	echo "<b>1)sub string(part of string):<b>".substr($str,3)."<br/><br/>";
	echo "<b>2)sub string(part of string):<b>".substr($str,0,5)."<br/><br/>";
	echo "<b>1)sub string compare:<b>".strcmp("php","PHP")."<br/><br/>";
	echo "<b>2)sub string compare:<b>".strcmp("php","php")."<br/><br/>";
	echo "<b>3)sub string compare:<b>".strcmp("PHP","javascript")."<br/><br/>";
	echo "<b>4)sub string compare:<b>".strcmp("a","b")."<br/><br/>";
	echo "<b>5)sub string compare:<b>".strcmp("abb baa","abb baa")."<br/><br/>";
	echo "<b>trim <b>-".trim(" ".$str." ")."-<br/><br/>";
	echo "<b>right trim <b>-".rtrim(" ".$str." ")."-<br/><br/>";
	echo "<b>left trim <b>-".ltrim(" ".$str." ")."-<br/><br/>";
	
	
?>
