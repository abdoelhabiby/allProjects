<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'shop';


$connect = @mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

 if($connect == false){

 	 	echo 'cannot connect to database!!' . mysqli_connect_errno();

 }