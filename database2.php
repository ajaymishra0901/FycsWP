<?php
    $con=mysqli_connect("localhost","root","");
    if(mysqli_query($con,"create database myuniversity")){
       echo "Database created successfully";
    }
    else{
        echo "Error creating database:".mysqli_error($con);
    }
    mysqli_select_db($con,"myuniversity");
    $query="create table Student(sno smallint,sname varchar(50),percentage decimal(7,2))";
    if(mysqli_query($con,$query)){
         echo "Table created successfully<br/>";
    }
    else{
          echo "Error creating table:".mysqli_error($con)."<br/>";
    }
    $query1="insert into student values(101,'Allen',78)";
    if(mysqli_query($con,$query1)){
       echo "Record 1 Inserted successfully<br/>";
    }
    else{
         echo "Error inserting in table:".mysqli_error($con)."<br/>";
    }
    $query2="insert into student values(102,'smith',45)";
    if(mysqli_query($con,$query2)){
       echo "Record 2 Inserted successfully<br/>";
    }
    else{
         echo "Error inserting in table:".mysqli_error($con)."<br/>";
    }
    $query3="insert into student values(103,'scott',63.2)";
    if(mysqli_query($con,$query3)){
       echo "Record 3 Inserted successfully<br/>";
    }
    else{
         echo "Error inserting in table:".mysqli_error($con)."<br/>";
    }
    $sql="select * from student where  percentage>=35 and percentage<=75";
    $result=mysqli_query($con,$sql);
	    if(mysqli_num_rows($result)>0){
       echo "<table border='1'><tr><th>Sno</th><th>Sname</th><th>Percentage</th></tr>";
       while($row=mysqli_fetch_array($result)){
             echo"<tr>";
             echo"<td>".$row['sno']."</td>";
             echo"<td>".$row['sname']."</td>";
             echo"<td>".$row['percentage']."</td>";
             echo"</tr>";
       }
       echo "</table>";
     }
     else{
           echo "Table is Empty<br/>";
     }
     

     mysqli_close($con);
?>