<?php
  
   
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select regno from users where regno = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['regno'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:index.php");
      die();
   }
?>