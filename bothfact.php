<html>
<body>
<form action="bothfact.php" method="POST">
enter numner<input type="text" name="txtname"/>
<input type="submit" value="submit" />
</form>
</body>
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