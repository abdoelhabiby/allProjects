<?php
include 'conected-db.php'; 
include_once 'session.php';
include_once 'function.php';

if(!isset($_SESSION['id_user'])){

  header("location:login.php");
}



?>


<?php


  if(isset($_POST['submit'])){

$id=$_SESSION['id'];
$id1=(int)$id;
$menu=$_POST['menu'];
$menu=str_replace("-", " ",$menu);
$menu=trim($menu);
$menu=strip_tags($menu);
$menu=ucfirst($menu);
if(isset($menu) === true && $menu === ''){
header("location:edit_menu.php");
exit();
}elseif(strlen($menu) > 20){
header("location:edit_menu.php");
exit();

}elseif(strlen($menu) < 4){
	header("location:edit_menu.php");
   exit();
}else{



$optradio=(int)$_POST['optradio'];

//$rank=(int)$_POST['RANK']; i replaced it by{$id1}

$menu2=mysqli_real_escape_string($connect,$menu); 



		 $query2="SELECT RANK FROM website_navbar";
		    $fromdata2=mysqli_query($connect,$query2);
		    $count_row=mysqli_num_rows($fromdata2)+1;

$sql="UPDATE `website_navbar` SET `ITEM_NAME`='{$menu2}',`RANK`='{$id1}',`VISIBLE`='{$optradio}' WHERE id={$id1}";

}
if(mysqli_query($connect,$sql) && mysqli_affected_rows($connect) > 0){

	header("location:manage-content.php");

}else{

header("location:edit_menu.php");
}

} else{

	header("location:edit_menu.php");

}


?>
