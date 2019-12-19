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
/*
if(!isset($_SESSION['idpage'])){
	header("location:creat_page.php");
} */

$id= $_SESSION['id'];
$id1=(int)$id;

$page=$_POST['page'];
$page=str_replace("-", " ",$page);
$page=trim($page);
$page=strip_tags($page);
$page=ucfirst($page);

$content=$_POST['content'];
$content=str_replace("-", " ",$content);
$content=trim($content);
$content=strip_tags($content);



if(isset($page) === true && $page === ''){
header("location:creat_page.php");
exit();
}elseif(isset($content) === true && $content === ''){
header("location:creat_page.php");
exit();
}

elseif(strlen($page) > 20){
header("location:creat_page.php");
exit();
}elseif(strlen($page) < 4){
	header("location:creat_page.php");
   exit();
}else{

  


$optradio=(int)$_POST['optradio'];  //visible
$optradio1=(int)$_POST['optradio1']; //status

//$rank=(int)$_POST['rank'];
$page2=mysqli_real_escape_string($connect,$page); 
$content2=mysqli_real_escape_string($connect,$content); 

/*
	 $query2="SELECT page_name FROM pages";
		    $fromdata2=mysqli_query($connect,$query2);
		    $count_row5=mysqli_num_rows($fromdata2)+1;  //to into to id 


				 $query3="SELECT rank FROM pages WHERE item_name_id=".$id1;
				    $fromdata3=mysqli_query($connect,$query3);
				    $count_row3=mysqli_num_rows($fromdata3)+1; //to into rank

*/

$sql="UPDATE `pages` SET `page_name`='{$page2}',`content`='{$content2}',`visible`='{$optradio}', `status`='{$optradio1}' WHERE id={$id1}";
}


/*
echo $id . "<br>";
//echo $count_row3 . "<br>";
//echo $count_row5 . "<br>";
echo $optradio1 . "<br>";
echo $optradio . "<br>";
echo $content2 . "<br>";
echo $page2 . "<br>";
*/




if(mysqli_query($connect,$sql) && mysqli_affected_rows($connect) > 0){

	header("location:manage-content.php");

}else{

header("location:edit_menu.php");
}

} else{

	header("location:edit_menu.php");

}


?>


