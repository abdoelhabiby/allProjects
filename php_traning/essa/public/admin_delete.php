<?php
include 'conected-db.php'; 
include_once 'session.php';
include_once 'function.php';

if(!isset($_SESSION['id_user'])){

  header("location:login.php");
}



$id_admin=mysqli_real_escape_string($connect,$_GET['id']);


$id1=(int)$id_admin;




$sql3="DELETE FROM  admins WHERE id={$id1} LIMIT 1";

$result2=mysqli_query($connect,$sql3);
if($result2 > 0){

header("location:admins_manage.php");

}else{
	header("location:admins_manage.php");

}