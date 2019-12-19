<?php
include_once 'conected-db.php';
include_once 'session.php';
//include_once 'function.php';

if(!isset($_SESSION['id_user'])){

  header("location:login.php");
}



if(isset($_POST['submit'])){

if(!isset($_SESSION['idpage'])){
	header("location:creat_page.php");
}

$id=$_SESSION['idpage'];
//$id1=(int)$id;

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

	 $query2="SELECT page_name FROM pages";
		    $fromdata2=mysqli_query($connect,$query2);
		    $count_row5=mysqli_num_rows($fromdata2)+1;  //to into to id 


				 $query3="SELECT RANK FROM pages WHERE item_name_id=".$id;
				    $fromdata3=mysqli_query($connect,$query3);
				    $count_row3=mysqli_num_rows($fromdata3)+1; //to into rank




/*
echo $id . "<br>";
echo $count_row3 . "<br>";
echo $count_row5 . "<br>";
echo $optradio1 . "<br>";
echo $optradio . "<br>";
echo $content2 . "<br>";
echo $page2 . "<br>";

*/

/*
                       //tryed
$sql2="INSERT INTO `pages`(`id`,`item_name_id`, `page_name`, `content`, `rank`, `visible`, `status`) 
VALUES ({$id}','{$page2}','{$content2}','{$count_row3}','{$optradio}','{$optradio1}')";

 VALUES (16,8,'the real','espane',1,1,1)";
*/

   //"why cannot into to id in database pages the code run just with out into id"

$sql2="INSERT INTO `pages`(`id`,`item_name_id`, `page_name`, `content`, `rank`, `visible`, `status`) 
                VALUES('{$count_row5}','{$id}', '{$page2}', '{$content2}', '{$count_row3}', '{$optradio}', '{$optradio1}')";


//$theecho=mysqli_query($connect,$sql2);
//echo $theecho;



/*
		function redirect($url){
		header("location:".$url);
		exit();
		}

				function success_msq(){
		            $s_msg  = " <div calss='alert alert-success alert-dismissible'> ";
					$s_msg .= " <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times</a> ";
					$s_msg .= "<strong> success!</strong> new record created successfully";
					$s_msg .= "</div>"; 
		            return $s_msg;
				}
                    
                    function faild_msg(){
                    		$f_msg  = " <div calss='alert alert-success alert-dismissible'> ";
							$f_msg .= " <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times</a> ";
							$f_msg .= "<strong> success!</strong>" . "" .mysqli_error($connect).".";
							$f_msg .= "</div>";
							return $f_msg;
                    }  
                    
}*/

}
if(mysqli_query($connect,$sql2) && mysqli_affected_rows($connect) > 0){

   // $_SESSION['msg']=success_msq();
	header("location:manage-content.php");
 }else {
   //$_SESSION['msg2']= faild_msg();
	header("location:creat_page.php");


 }


}else{
	header("location:creat_page.php");
}


?>