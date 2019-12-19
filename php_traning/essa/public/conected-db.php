<?php


$hostname="localhost";
$username="root";
$pass="";
$dbname="website";

$connect=mysqli_connect($hostname,$username,$pass,$dbname);


if(!$connect){
	echo "no connect: " . mysqli_connect_errno();
}else {
	//echo "connected";
}



