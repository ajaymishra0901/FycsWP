<?php 

function binaryRightAngleTriangle($b)  
{ 
    for ($row = 0; $row < $b; $row++)  
    { 
        for ($col = 0;$col <= $row; $col++)  
        { 
            if ((($row + $col) % 2) == 0)  
                printf("0"); 
            else
                printf("1"); 
            printf("\n"); 
        } 
        printf("\n"); 
    }  
} 
  

$b = 4; 
binaryRightAngleTriangle($b); 
  

?> 