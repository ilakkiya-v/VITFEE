<?php 

// DBMS connection code -> hostname, 
// username, password, database name 
$db = mysqli_connect('localhost', 'root', 'harstin1994', 'vitfeepayment'); 

if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?> 
