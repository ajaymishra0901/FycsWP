<html>
<body>
<form action="prime.php" method="POST">
Enter number<input type="text" name="txtname"/>
<input type="submit" value="submit" />
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
	
	$n=$_POST["txtname"];
	$flag=0;
	
	for($i=2;$i<$n;$i++){
		if($n%$i==0){
			$flag=1;
		}
	}
	
	if($flag==1){
			echo"not prime";
		}
		else{
			echo "prime";
		}
	
	
	
		
		
		
	
	
	
}

?>
</body>
</html>