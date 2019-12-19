<?php 


$dbhost = "mysql://hostname=localhost;dbname=test";
$dbuser = "root";
$dbpass = "";
$dboption = array(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION,PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");





try{


$connect = new PDO($dbhost,$dbuser,$dbpass,$dboption);


// echo "connected";


}catch(PDOException $e){

echo "ERRO FAILED TO CONNECT DATABASE " . $e;



}


















?>