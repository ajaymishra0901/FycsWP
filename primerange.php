<html>
<body>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
	
	$n1=$_POST["txtname"];
	$n2=$_POST["txtname2"];
	for($i=$n1;$i<=$n2;$i++){
		$flag=0;
		for($j=2;$j<$i;$j++){
			if($i%$j==0){
				$flag=1;
				break;
			}
		}
	if($flag==0){
		echo $i."is a prime number</br>";
	}
	else{
		echo $i."is not a prime</br>";
	}
	
	
}
}


?>
</body>
</html>