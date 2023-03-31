<?php
//use a while loop to implement a multiplication table of 5

$num = 1;

while ($num <= 12) {
  echo "5 x $num = " . (5 * $i) . "\n";
  $num++;
}

echo"<br>";
//use the do while loop to achieve the same answer
echo("Us the do while loop to achieve the same answer");
//Code starts
$num = 1; 
        do { $num *= 5; } 
            while ( $num <= 12 ); 
    echo $num; 

    echo"<br>";
    
//use the for loop to find the first 100 even numbers
echo("Finding the first 100 even numbers using for loop");
for ( $even = 2; $even <= 100; $even += 2 ) 

        {
     echo $even . " "; 
    }

?>