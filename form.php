<html>
<body>
<?php
	$name=$_REQUEST["txtname"];
	$Gr_no=$_REQUEST["txtGr_no"];
	$wp=$_REQUEST["txtwp"];
	$oops=$_REQUEST["txtoops"];
	$dm=$_REQUEST["txtdm"];
	$pp=$_REQUEST["txtpp"];
	$dbms=$_REQUEST["txtdbms"];
	
	echo "<h1>GET DATA FORM</h1>";
	echo "<h1>name:".$name."</h1>";
	echo "<h1>Gr no:".$Gr_no."</h1>";
	echo "<h1>WP MARKS:".$wp."</h1>";
        echo "<h1>OOPS MARKS:".$oops."</h1>";
        echo "<h1>DM MARKS:".$dm."</h1>";
        echo "<h1>PP MARKS:".$pp."</h1>";
        echo "<h1>DBMS MARKS:".$dbms."</h1>";
	$total=$wp + $oops + $dm + $pp +$dbms;
	$result= $total / 5;
	echo "<h1>Total marks:".$total."</h1>";
	echo "<h1>Percentage:".$result."</h1>";
 
	$con=mysqli_connect("localhost","root","");
	if(mysqli_query($con,"create database Marks")){
		echo "Database Created sucessfully";
	}
	else{
		echo "error creating database:".mysqli_error($con);
	}
	mysqli_select_db($con,"Marks");
	$query="create table studentresult(name varchar(50),Gr_no int,wp smallint,oops smallint,dm smallint,pp smallint,dbms smallint,total smallint,result smallint)";
	if(mysqli_query($con,$query)){
		echo "table created sucessfully";
	}
	else{
		echo "error creating table:".mysqli_error($con);
	}
	mysqli_close($con);
	$query1="insert into studentresult values('".$name."','".$Gr_no."','".$wp."','".$oops."','".$dm."','".$pp."','".$dbms."','".$total."','".$result."')";
        if(mysqli_query($con,$query1)){
             echo "Record 1 Inserted successfully<br/>";
        }
        else{
             echo "Error inserting in table:".mysqli_error($con)."<br/>";
        }
	mysqli_close($con);
	
?>
</body>
</html>