<html>
<body>
<form action="factorial.php" method="POST">
Enter number<input type="text" name="txtname"/>
<input type="submit" value="submit" />
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
	
	$n=$_POST["txtname"];
	$fact=1;
	for($i=$n;$i>=1;$i--){
	
		$fact=$fact*$i;
	}
	echo "factorial".$fact;
}
?>
</body>
</html>