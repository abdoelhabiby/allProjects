<?php
include 'conected-db.php'; 
include_once 'session.php';
include_once 'function.php';


$id_page=mysqli_real_escape_string($connect,$_GET['page']);

$id1=(int)$id_menu;

$sql3="DELETE FROM  pages WHERE id={$id1} LIMIT 1";

$result2=mysqli_query($connect,$sql3);
if($result2 > 0){

header("location:manage-content.php");

}else{
	header("location:delete_menu.php");

}



