<?php

require_once("../../../private/function.php");

if($_SERVER['REQUEST_METHOD'] == 'POST'){

   
$do = $_GET['do'] ?? redirect_to('index.php');



if($do == 'add'){


  
   $firstname = $_POST['firstname'] ?? '';
   $firstname = checkname($firstname);
   $firstname = MRES($firstname);

   checkempty($firstname,'new.php');
   checklenght($firstname,'new.php');

  //-----------------------------------------
  
   $lastname = $_POST['lastname'] ?? '';
   $lastname = checkname($lastname);
   $lastname = MRES($lastname);

   checkempty($lastname,'new.php');
   checklenght($lastname,'new.php');  

   //------------------------------------------


   $username = $_POST['username'] ?? '';
   $username = checkname($username);
   $username = MRES($username);

   checkempty($username,'new.php');
   checklenghtu($username,'new.php');  

//-------------------------------------------


   $email = $_POST['email'] ?? '';
   $email = MRES($email);

   checkempty($email,'new.php');
//----------------------------------------

   $password = $_POST['password'] ?? '';
   $password = MRES($password);
   checklenpa($password,'new.php');
   checkempty($password,'new.php');

   $confirm_password = $_POST['confirm_password'] ?? '';
   $confirm_password = MRES($confirm_password);

   checkempty($confirm_password,'new.php');

   confirm_pass($password,$confirm_password,'new.php');

   $pass = $password;

   $salt = 'bug';

   $password_hash = password_hash($pass.$salt,PASSWORD_DEFAULT);

/*
   echo $firstname ."<br>";
   echo $lastname ."<br>";
   echo $username ."<br>";
   echo $email ."<br>";
   echo $password_hash ."<br>";



*/ 
$querya = "INSERT INTO admins(first_name,last_name,username,email,password_hash) ";
$querya .= "VALUES ('{$firstname}','{$lastname}','{$username}','{$email}','{$password_hash}')";

$resulta = mysqli_query($connect,$querya);

 
 if($resulta && mysqli_affected_rows($connect) > 0){

 	 $_SESSION['SUCCESS']= '
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                   <strong>SUCCESS!</strong>  SUCCESS TO ADD NEW ADMIN
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                  </div>';  
       redirect_to('index.php');
 }else{


 			$_SESSION['failed'] = '
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                   <strong>FAILED!</strong>	THE USERNAME EXISTED!!
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                  </div>';


                  redirect_to('new.php');
              

 }













mysqli_free_result($resulta);
















}elseif($do == 'editadmin'){





 $id = $_GET['id'] ?? rediredt_to('edit.php');
 $id = (int)$id;
 $id = h($id);
 $id = MRES($id);

 //----------------------------------------------

$firstname = $_POST['firstname'] ?? '';
   $firstname = checkname($firstname);
   $firstname = MRES($firstname);

   checkempty($firstname,'edit.php');
   checklenght($firstname,'edit.php');

  //-----------------------------------------
  
   $lastname = $_POST['lastname'] ?? '';
   $lastname = checkname($lastname);
   $lastname = MRES($lastname);

   checkempty($lastname,'edit.php');
   checklenght($lastname,'edit.php');  

   //------------------------------------------


   $username = $_POST['username'] ?? '';
   $username = checkname($username);
   $username = MRES($username);

   checkempty($username,'edit.php');
   checklenghtu($username,'edit.php');  

//-------------------------------------------


   $email = $_POST['email'] ?? '';
   $email = MRES($email);

   checkempty($email,'edit.php');
//----------------------------------------

   $password = $_POST['password'] ?? '';
   $password = MRES($password);
   checklenpa($password,'edit.php');
   checkempty($password,'edit.php');

   $confirm_password = $_POST['confirm_password'] ?? '';
   $confirm_password = MRES($confirm_password);

   checkempty($confirm_password,'edit.php');

   confirm_pass($password,$confirm_password,'edit.php');

   $pass = $password;

   $salt = 'bug';

   $password_hash = password_hash($pass.$salt,PASSWORD_DEFAULT);

/*
 echo $id ."<br>";
   echo $firstname ."<br>";
   echo $lastname ."<br>";
   echo $username ."<br>";
   echo $email ."<br>";
   echo $password_hash ."<br>";


*/

$querye = "UPDATE admins SET first_name = '{$firstname}', last_name = '{$lastname}', 
   username= '{$username}', email='{$email}', password_hash = '{$password_hash}' WHERE id = '{$id}'";

$resulte = mysqli_query($connect,$querye);

 
 if($resulte && mysqli_affected_rows($connect) > 0){

 	 $_SESSION['SUCCESS']= '
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                   <strong>SUCCESS!</strong>  SUCCESS TO EDIT ADMIN
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                  </div>';  
       redirect_to('index.php');
 }else{


 			$_SESSION['failed'] = '
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                   <strong>FAILED!</strong>	THIS USERNAME EXISTED!!
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                  </div>';


                  redirect_to('edit.php');
              

 }











//mysqli_free_result($resulte);








}else{

  redirect_to('index.php');

}







}else{  //if the request not 'POST'

  redirect_to('index.php');


}



?>