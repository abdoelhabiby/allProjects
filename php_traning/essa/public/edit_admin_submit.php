<?php
include_once 'conected-db.php';
include_once 'session.php';
//include_once 'function.php';

if(!isset($_SESSION['id_user'])){

  header("location:login.php");
}



if(isset($_POST['submit'])){
	$id1=$_SESSION['admin_id'];

  //fname
$fname=$_POST['fname'];
$fname=str_replace("-", " ",$fname);
$fname=trim($fname);
$fname=strip_tags($fname);

          //lname
		$lname=$_POST['lname'];
		$lname=str_replace("-", " ",$lname);
		$lname=trim($lname);
		$lname=strip_tags($lname);
		                  //user name
					$uname=$_POST['uname'];
					$uname=str_replace("-", " ",$uname);
					$uname=trim($uname);
					$uname=strip_tags($uname);
					                  //password
											$password=$_POST['password'];
											$password=str_replace("-", " ",$password);
											$password=trim($password);
											$password=strip_tags($password);

															     //email
															$email=$_POST['email'];
															$email=str_replace("-", " ",$email);
															$email=trim($email);
															$email=strip_tags($email);






if(isset($fname) === true && $fname === ''){
header("location:admins_manage.php");
exit();
}elseif(strlen($fname) > 20 ){
header("location:admins_manage.php");
exit();

}elseif(  strlen($fname) < 4 ){
	header("location:admins_manage.php");
   exit();




}elseif(isset($lname) === true && $lname === ''){
header("location:admins_manage.php");
exit();
}elseif(strlen($lname) > 20 ){
header("location:admins_manage.php");
exit();

}elseif(  strlen($lname) < 4 ){
	header("location:admins_manage.php");
   exit();

            }elseif(isset($uname) === true && $uname === ''){
					header("location:admins_manage.php");
					exit();
					}elseif(strlen($uname) > 20 ){
					header("location:admins_manage.php");
					exit();

					}elseif(  strlen($uname) < 4 ){
						header("location:admins_manage.php");
					   exit();
 

					   }elseif(isset($password) === true && $password === ''){
									header("location:admins_manage.php");
									exit();
									}elseif(strlen($password) > 25 ){
									header("location:admins_manage.php");
									exit();

									}elseif(  strlen($password) < 8 ){
										header("location:admins_manage.php");
									   exit();

			       
			                                    }elseif(isset($email) === true && $email === ''){
												header("location:admins_manage.php");
												exit();
												}elseif(strlen($email) > 25 ){
												header("location:admins_manage.php");
												exit();

												}elseif(  strlen($email) < 10 ){
													header("location:admins_manage.php");
												   exit();




}else{
$fname1=mysqli_real_escape_string($connect,$fname); 
$lname1=mysqli_real_escape_string($connect,$lname); 
$uname1=mysqli_real_escape_string($connect,$uname); 
$password1=mysqli_real_escape_string($connect,$password); 
$password2=password_hash($password1,PASSWORD_BCRYPT);

$email1=mysqli_real_escape_string($connect,$email); 




  
/*


echo $fname1 . "<br>";
echo $lname1 . "<br>";
echo $uname1 . "<br>";
echo $password1 . "<br>";
echo $email1 . "<br>";
echo $id1;

*/

$sql="UPDATE `admins` SET `username`='{$uname1}',`password`='{$password2}',`firstname`='{$fname1}',
`lastname`='{$lname1}',`email`='{$email1}' WHERE id={$id1}";


} 



if(mysqli_query($connect,$sql) && mysqli_affected_rows($connect) > 0){

   	header("location:admins_manage.php");

 }else {
	header("location:admins_manage.php");


 }

}else{
	header("location:admins_manage.php");
}



?>