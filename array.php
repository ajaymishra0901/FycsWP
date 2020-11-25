<?php
	$cars=array("VOLVO","BMW","TOYOTA");
	echo " I like".$cars[0].",".$cars[1]."and".$cars[2].".<br/>";
	echo count($cars)."<br/>";
	$arrlength=count($cars);
	for($x=0;$x<$arrlength;$x++){
		echo $cars[$x];
		echo "<br>";
	}

	//associative arrays 
	$age=array("peter"=>"35","ben"=>"37","joe"=>"43");
	echo "peter is ".$age['peter']."year old.<br/>";
	echo "ben is ".$age['ben']."year old.<br/>";
	echo "joe is ".$age['joe']."year old.<br/>";
?>