<?php

require_once 'session.php';

require_once 'include/connectdb.php';
require_once 'include/function.php';

$error_edit = array();
	//if(isset($_SERVER['REQUEST_METHOD'] == 'POST')){

	if($_SERVER['REQUEST_METHOD'] == 'POST'){

/*
	$trt = $_GET['id'];
	$trt =(int)$trt ;
*/

		$trt = $_SESSION['user_id'];
		$trt = (int)$trt;

		   //====== username ==========
		$username = $_POST['username'];
		$username = checkinput($username);

         //======= password ===========

		$password = $_POST['password'];
		$password = strip_tags($password);

		

		//========= email ============

		$email = $_POST['email'];
		$email = strip_tags($email);

		//======= full name ======

		$fullname = $_POST['fullname'];
		$fullname = checkinput($fullname);


   
  	                $username = mysqli_real_escape_string($connect,$username);
                    $password = mysqli_real_escape_string($connect,$password);
					$email = mysqli_real_escape_string($connect,$email);
					$fullname = mysqli_real_escape_string($connect,$fullname);


         $salt = 'bug';

		$passhash = password_hash($password . $salt,PASSWORD_BCRYPT);



	//echo $username . "<br>" . $password . "<br>" . $email . "<br>" . $fullname . "<br>" . $trt ;

  


				if($username == ''){

	                   $_SESSION['erruser'] = "user must be without -";   
					   header("location:edit_profile.php");
					   exit;

				}elseif($fullname == ''){

					   $_SESSION['errfull'] = "fullname must be without -";  

					   header("location:edit_profile.php");
					   exit;

				}elseif(strlen($password) < 5){
	                 
					  header("location:edit_profile.php");
					  exit;

				}elseif(strlen($password) > 30){

					  header("location:edit_profile.php");
					  exit;
				}else{

						//echo $username . "<br>" . $password . "<br>" . $email . "<br>" . $fullname . "<br>" ;



                     $query = "UPDATE users SET username = '{$username}', password = '{$passhash}',
                                                 email = '{$email}', fullname = '{$fullname}' WHERE userid={$trt} LIMIT 1";

                      $result = mysqli_query($connect,$query);

                      if($result && mysqli_affected_rows($connect) > 0){
                               
                               header("location:Dashbord.php");
                               exit;

                      }else{
                      	header("location:edit_profile.php");
                      	exit;
                      	
                      }

				}




// end if it == post
}else{
 
 header("location:edit_profile.php");
 //exit;
}

mysqli_close($connect);


?>