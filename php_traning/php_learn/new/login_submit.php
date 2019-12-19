<?php

session_start();

include 'include/connectdb.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
 

        //---get---

				$username = $_POST['username'];
				$username = mysqli_real_escape_string($connect,$username);
				$password = $_POST['password'];
				$password = mysqli_real_escape_string($connect,$password);


				$query = "SELECT userid,username,password FROM users WHERE username = '{$username}' AND groupid = 1 LIMIT 1";
				$result = mysqli_query($connect,$query);

				  //query for the login true
							if (mysqli_num_rows($result) && mysqli_affected_rows($connect) > 0){

				         $key = mysqli_fetch_assoc($result);

                                      //check password
                     $salt = 'bug';


								//if($key['password'] == $password ){

                 if(password_verify($password . $salt,$key['password'])){

							             $_SESSION['username'] = $key['username'];
                           $_SESSION['user_id']  = $key['userid'];

                           header("location:Dashbord.php?id=".$_SESSION['user_id']);
                           exit;

   mysqli_close($connect); 

    }else{
  
   $_SESSION['error_pass'] = "username or password not correct !p";



    	header("location:index.php");
    	exit;
    }
    }else{
    	$_SESSION['error_user'] = "username or password not correct !u";

         header("location:index.php");
    	exit;
    }

}else{

	header("location:index.php");
	exit;
}


?>