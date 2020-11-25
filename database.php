<?php 
	$con=mysqli_connect("localhost","root","");
	if(mysqli_query($con,"create database collage")){
		echo "Database Created sucessfully";
	}
	else{
		echo "error creating database:".mysqli_error($con);
	}
	mysqli_select_db($con,"collage");
	$query="create table department(dname varchar(50),dno smallint,no_of_faculty smallint)";
	if(mysqli_query($con,$query)){
		echo "table created sucessfully";
	}
	else{
		echo "error creating table:".mysqli_error($con);
	}
	mysqli_close($con);
?>
	