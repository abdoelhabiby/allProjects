<?php

//ob_start();

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'bank_lynda';


  //$connect = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);


   $connect = @mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

       if($connect != true){
	echo "Faild to connect database! " . mysqli_connect_errno();
	header("Location:https://www.google.com");
	exit;
    }

//ob_end_flush();

?>