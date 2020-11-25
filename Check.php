<?php
	$n1=$_REQUEST["txtNumber1"];
	$n2=$_REQUEST["txtNumber2"];
 	if($n1>$n2){
		echo"<h1>".$n1." is greater than ".$n2."</h1>";
	}
	else{
		echo"<h1>".$n2." is greater than ".$n1."</h1>";
	}

?>
</body>
</html>