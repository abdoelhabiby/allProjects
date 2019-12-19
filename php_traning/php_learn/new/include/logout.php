<?php

session_start();

 $_SESSION['username'] = null; 
 $_SESSION['user_id'] = null;

 session_unset();
 session_destroy();

 header("location:../index.php");
 exit;

 ?>