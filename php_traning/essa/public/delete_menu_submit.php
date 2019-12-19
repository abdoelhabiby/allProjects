<?php
include 'conected-db.php'; 
include_once 'session.php';
include_once 'function.php';


if(!isset($_SESSION['id_user'])){

  header("location:login.php");
}



$id_menu=mysqli_real_escape_string($connect,$_GET['menu']);

$query="SELECT * FROM pages WHERE item_name_id=".$id_menu;
$result=mysqli_query($connect,$query);

if(mysqli_num_rows($result) > 0){

	header("location:delete_menu.php");
	exit();
}else{

$id1=(int)$id_menu;

$sql3="DELETE FROM  website_navbar WHERE id={$id1} LIMIT 1";

$result2=mysqli_query($connect,$sql3);
if(mysqli_affected_rows($connect) > 0){

header("location:manage-content.php");

}else{
	header("location:delete_menu.php");

}

}

