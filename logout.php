<?php
   session_start();
   include('config/config.php');
   
   if(session_destroy()) {
      header("Location: index.php");
	  $sql = "DELETE FROM eventorder";
	  $result = mysqli_query($db,$sql);
   }
?>