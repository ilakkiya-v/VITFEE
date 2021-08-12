<?php
if (isset($_POST['submit'])) {
$con = new mysqli("localhost", "root", "ilakyuktkaav2023", "vitfeepayment");
if ($con->connect_errno) {
    echo "Failed to connect to MySQL: (" . $con->connect_errno . ") " . $con->connect_error;
}
$email = $_POST['email'];
echo $email;
 $sql = "SELECT * FROM stud_prof where email = '$email'";
    $result = mysqli_query($con,$sql);
	if (!$result) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}

    while ($row_data = mysqli_fetch_array($result)) {

       $name = $row_data['name'];
        $from = 'luckymaji2001@gmail.com';
        $to = $row_data['email'];
        $subject = 'Your Credentials';
        $msg = " Hi! $name here is your password: <br> password ";
        $result = mail($to, $subject, "MESSAGE: $msg", "From: $from");
		if($result!=1)
		{
			echo "failed";
		}
    }
}
﻿?>
