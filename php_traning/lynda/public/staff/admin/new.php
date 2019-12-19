<?php

require_once("../../../private/function.php");

$page_title = "New Admin";
require_once("../../shared/header_staff.php");
?>

<style type="text/css">
	form{max-width: 500px; margin: auto;}
	form input{margin-bottom: 20px;}
</style>


 <div class="container">

     <?php
     if(isset($_SESSION['empty'])){ echo $_SESSION['empty']; unset($_SESSION['empty']);} 
     if(isset($_SESSION['chars'])){ echo $_SESSION['chars']; unset($_SESSION['chars']);} 
     if(isset($_SESSION['charsu'])){ echo $_SESSION['charsu']; unset($_SESSION['charsu']);} 
     if(isset($_SESSION['charpass'])){ echo $_SESSION['charpass']; unset($_SESSION['charpass']);}         
     if(isset($_SESSION['passerr'])){ echo $_SESSION['passerr']; unset($_SESSION['passerr']);} 
     if(isset($_SESSION['failed'])){ echo $_SESSION['failed']; unset($_SESSION['failed']);} 



         

     ?>


   <a href="<?php echo u('index.php')?>"> <<< Back To LIst</a>


        <h2 class="h1 text-center mt-4">New Admin</h2>

   	<form class="form-goup mt-5" action="submit.php?do=<?php echo u('add')?>" method="POST">
   		
    <div class="row">
    	<label for="firstname" class="col-4 col-form-label">First Name</label>
    	<input type="text" name="firstname" class="col-8 form-control" id="firstname" >
    </div>

    <div class="row">
    	<label for="lastname" class="col-4 col-form-label">Last Name</label>
    	<input type="text" name="lastname" class="col-8 form-control" id="lastname" required>
    </div>


    <div class="row">
    	<label for="username" class="col-4 col-form-label">Username</label>
    	<input type="text" name="username" class="col-8 form-control" id="username" required>
    </div>


        <div class="row">
    	<label for="email" class="col-4 col-form-label">Email</label>
    	<input type="email" name="email" class="col-8 form-control" id="email" required>
    </div>


    <div class="row">
    	<label for="password" class="col-4 col-form-label">Password</label>
    	<input type="password" name="password" class="col-8 form-control" id="password" required>
    </div>

      <div class="row">
    	<label for="confirm_password" class="col-4 col-form-label">Confirm Password</label>
    	<input type="password" name="confirm_password" class="col-8 form-control" id="confirm_password" required>
     </div>

     <input type="submit" name="submit" value="Create Admin" class="btn btn-primary text-right"> 

   	</form>
   	

 	
 </div>

























<?php




require_once("../../shared/footer_staff.php");

 ?>

