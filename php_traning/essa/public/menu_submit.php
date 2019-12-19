<?php
include_once 'conected-db.php';
include_once 'session.php';
//include_once 'function.php';

if(!isset($_SESSION['id_user'])){

  header("location:login.php");
}



if(isset($_POST['submit'])){

$menu=$_POST['menu'];
$menu=str_replace("-", " ",$menu);
$menu=trim($menu);
$menu=strip_tags($menu);
$menu=ucfirst($menu);
if(isset($menu) === true && $menu === ''){
header("location:creat_menu.php");
exit();
}elseif(strlen($menu) > 20){
header("location:creat_menu.php");
exit();

}elseif(strlen($menu) < 4){
	header("location:creat_menu.php");
   exit();
}else{

  


$optradio=(int)$_POST['optradio'];
//$rank=(int)$_POST['RANK'];
$menu2=mysqli_real_escape_string($connect,$menu); 

 $query2="SELECT RANK FROM website_navbar";
    $fromdata2=mysqli_query($connect,$query2);
    $count_row=mysqli_num_rows($fromdata2)+1;





$sql="INSERT INTO website_navbar(id,ITEM_NAME,RANK,VISIBLE) VALUES( '{$count_row}', '{$menu2}', '{$count_row}', '{$optradio}' )";

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

}
if(mysqli_query($connect,$sql) && mysqli_affected_rows($connect) > 0){

    $_SESSION['msg']=success_msq();
	redirect("manage-content.php");
 }else {
   $_SESSION['msg2']= faild_msg();
redirect("creat_menu.php");


 }
}else{
redirect("creat_menu.php");
}



?>