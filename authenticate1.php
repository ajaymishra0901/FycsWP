<?php
	session_start();
?>
<html>
<body>
<form action="authenticate.php", method="POST">
Enter a username:<input type="text" name="username"/><br/>
Enter a password:<input type="password" name="password"/><br/>
<input type="submit" value="submit">
<input type="reset" value="clear">
</form>

<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $n1=$_POST["username"];
		$n2=$_POST["password"];
	    if($n1=="admin" && $n2=="123"){
			$_SESSION["user"]=$n1;
			header("location:home.php");
	       //echo"login succcessfull";
	    }
        else{
           echo "Ivalid username/password";
        }
        
	}
?>
</body>
</html>