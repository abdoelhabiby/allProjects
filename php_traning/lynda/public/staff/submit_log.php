<?php

require_once("../../private/function.php");




if($_SERVER['REQUEST_METHOD'] == 'POST'){

	$username = $_POST['username'];
	$username = checkname($username);

	if(strlen($username) == ''){

		$_SESSION['emptyuser'] = '
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                   <strong>SUCCESS!</strong>	THE FAILED MUST NO BE EMBPTY
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                  </div>';


                  redirect_to('login.php');
                  exit;

	}

  //echo $username;
			 $password = $_POST['password'];


	$queryu = "SELECT id,username,password_hash FROM admins ";
	$queryu .= "WHERE username = '{$username}'";
	$resultu = mysqli_query($connect,$queryu);

	if(mysqli_num_rows($resultu) > 0){

		$key =mysqli_fetch_assoc($resultu);



/*
  	$queryp = "SELECT id,username,password_hash FROM admins ";
	$queryp .= "WHERE username = '{$username}' AND password_hash = '{$password}' ";
	$resultp = mysqli_query($connect,$queryp);
*/
		//if(mysqli_num_rows($resultp) > 0){
		//	$keyp = mysqli_fetch_assoc($resultp);

	$salt = 'bug';

if(password_verify($password.$salt, $key['password_hash'])){


/*
			$tuser =  $key['username'] ?? '';
			$tpass =  $key['id'] ?? '';

           $_SESSION['user'] = $username;
           $_SESSION['user_id'] = $tpass;
		   redirect_to("index.php");

		   */


		   thesession($key);


}else{
   
   	$_SESSION['notcorrect'] = '
	                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
	                   <strong>FAILED!</strong>	YOUR PASSWORD IS FALSE
	                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	                  <span aria-hidden="true">&times;</span>
	                  </button>
	                  </div>';

	                  redirect_to('login.php');
	                  exit;


} 

		



	}else{

			$_SESSION['notfound'] = '
	                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
	                   <strong>FAILED!</strong>	SORRY YOUR USERNAME IS FALSE
	                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	                  <span aria-hidden="true">&times;</span>
	                  </button>
	                  </div>';

	                  redirect_to('login.php');
	                  exit;

	} 









}else{
	redirect_to('login.php');
	exit;
}


?>