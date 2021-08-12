<?php
session_start();
include('config/config.php');


$sql = "SELECT * FROM stud_prof WHERE regno = '" . $_SESSION['regno'] . "'";
$result = mysqli_query($db,$sql);
while($row = mysqli_fetch_array($result)){
$reg = $row['regno'];
$name = $row['name'];
$img = $row['image'];
$phone = $row['phone'];
$email = $row['email'];
$programme = $row['programme'];
$school = $row['school'];
$addr = $row['address'];
$city = $row['city'];
$state = $row['state'];
$postal = $row['postal'];
}
			?>