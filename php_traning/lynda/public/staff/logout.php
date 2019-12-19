<?php

session_start();
 
$_SESSION['user'] = null;
$_SESSION['user_id'] = null;

session_unset();
session_destroy();

header("location:login.php");
exit;




?>