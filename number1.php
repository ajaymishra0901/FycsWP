<html>
<body>
<form action="number1.php", method="POST">
Enter a number:<input type="text" name="txtNumber"/><br/>
<input type="submit" value="submit">
</form>

<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $n=$_POST["txtNumber"];
	    if($n==0){
	       echo"Number is nor positive nor negative";
	    }
        elseif($n>0){
           echo "Number is Positive";
        }
        else{
	       echo "Number is negative";
		
	    }
	}
?>
</body>
</html>
     	
	  