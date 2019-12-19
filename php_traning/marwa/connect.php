<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'marwa';


$connect = @mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);


  if($connect != true){

  	echo "Failed To Connect dDtabase" . mysqli_connect_errno();
  	header("location:login.php");
  	exit();

  }



?>