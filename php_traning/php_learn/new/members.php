<?php

$page_title = 'Members';

include 'session.php';
include 'include/all_include.php';

?>

<style type="text/css">
	.add_mem{
		width:300px;
		margin:50px auto;

	}
	.add_mem form input{
        height:30px;
	width: 200px;
	text-align: center;
	display: block;
	margin-bottom: 30px;
	border:none;
	border-radius: 30px;
	outline: 0;

	}
	.hadd{
		font-weight: bold;
		font-size: 30px;
		margin-left: 15%;
	}

	.allerrors{
		width: 330px;
		line-height: 180%;
		color:red;
		margin: 35px;
		font-size: 22px;
	}

.succ{
	    width: 500px;
		line-height: 180%;
		color:green;
		background: #DDD;
		margin: 35px;
		font-size: 22px;
}
.succ p{
margin-left: 20px;
}

.manage{
	width:1150px;
	margin:50px auto;
	text-align: center;
}

.table_manage table{
	width:100%;
	margin:auto;
}
.table_manage table,td{
	border:1px solid #9c9c9c;
	    border-collapse: collapse;
	    height:27px;

}

.manage .ANM{
	float:left;
	text-decoration:none;
	margin-top: 10px;
	background:#0689f1e0;
	color: #FFF;
    border-radius: 50px;
}
.manage .ANM i{
	width:170px;
	height: 25px;
	margin-top:5px;
}
.manage button{
	border:none;
	border-radius: 20px;
	width:70px;
	height: 25px;
	color: #230e0e;
}

.bu1{
	background: #13d613;
	outline: 0;
	    cursor: pointer;

}
.bu2{
	background: #de1709;
	outline: 0;
   cursor: pointer;

}

.but3{
	color: #230e0e;
	outline: 0;
   cursor: pointer;
}


.table_manage i{
	position: relative;
    bottom: -1px;
}

</style>

<?php


//echo "hala madrid" . "<br>" . "<br>";




  $do = isset($_GET['do']) ? $_GET['do'] : 'manage';



   if($do == 'manage'){   
   

 ?>

   <div class="manage">
     <h1>Managae Members</h1>
       
       <div class="table_manage">
			<table>
					<tr style="background-color: black; color:#FFF;">
						<td>ID</td>
						<td>UserName</td>
						<td>Email</td>
						<td>FullName</td>
						<td>Registerd Date</td>
						<td>Control</td>
					</tr>

		 <?php
		 $query3 = "SELECT * FROM users WHERE groupid = 0";
		 $result3 = mysqli_query($connect,$query3);

		 if(mysqli_num_rows($result3) > 0){
		 	while($keys = mysqli_fetch_assoc($result3)){



		 ?>			
					<tr>
						<td><?php echo $keys['userid']; ?></td>
						<td><?php echo $keys['username']; ?></td>
						<td><?php echo $keys['email']; ?></td>
						<td><?php echo $keys['fullname']; ?></td>
						<td><?php echo $keys['thedate']; ?></td>
						<td>
					<a href='?do=edit&userid=<?php echo $keys['userid']; ?>'
						 style='margin-right: 6px;'> <button class='bu1'><i class="fa fa-edit"></i>Edit</button></a>
							<a href='?do=delete&userid=<?php echo $keys['userid']; ?>'>
								<button class='bu2'><i class="fa fa-delete"></i>Delete</button></a>
                               
                               <?php
                                if($keys['regstatus'] == 0){ ?>

                                 <a href ='?do=active&userid=<?php echo $keys['userid']; ?>'>
                           <button class='bu2' ><i class='fa fa-edit'></i>Active</button>
                                         </a>
                               
                             <?php   } 

                               ?>


						</td>
					</tr>


<?php 
// end $query3 
	}	
	 }else{
	 	echo "sorry no admin added with groupid = 0";
	 }  

	 ?>

		    </table>


        </div>


<a href='members.php?do=add' class='ANM'><i class="fa fa-plus">Add New Members</i></a> 

    </div>




<?php
  }


		if($do == 'add'){

		 ?>



			<h2 class="hadd">Add New members Page</h2>

			  <div class="add_mem">


			   <form class="add" action="<?php echo urldecode('?do=insert');?>" method='POST'>
			   <input type="text" name="username" required autocomplete="off" placeholder="username" class="inputs" id="edit1" 
			   onfocus="removeAttribute('placeholder');">	


			   <input type="password" name="password" autocomplete="new-password" class="inputs" required placeholder="password" 
			   onfocus="removeAttribute('placeholder');" id="edit2">

			   <input type="email" name="email"  required placeholder="Email" class="inputs" id="edit3" 
			   onfocus="removeAttribute('placeholder');">

			    <input type="text" name="fullname" required autocomplete="off" placeholder="full name" class="inputs"
			    onfocus="removeAttribute('placeholder');" id="edit4">
			   <input type="submit" name="submit" value="Add" class="submit">
					</form>
			  	
			  </div>





<?php
//end if do == 'add'
}

           //if do == 'insert' to insert in database

				if($do == 'insert'){



					//  echo "insert" . "<br>";
                       
                    if($_SERVER['REQUEST_METHOD'] == 'POST'){

                       //get username

                    	$username = $_POST['username'];
                    	$username = checkinput($username);

                    	//get password

                    	$password = $_POST['password'];
                        $password = strip_tags($password);

                        //get email
                        $email = $_POST['email'];
                        $email = strip_tags($email);

                        //get fullname

                        $fullname = $_POST['fullname'];
                        $fullname = checkinput($fullname);

                      //mysqli_real_escape_string()

                    $username = mysqli_real_escape_string($connect,$username);
                    $password = mysqli_real_escape_string($connect,$password);
					$email = mysqli_real_escape_string($connect,$email);
					$fullname = mysqli_real_escape_string($connect,$fullname);


$errors = array();

        if($username == ''){
        	
        	$errors[] = "user cant be empty";
        }
           

        if(strlen($username) < 3){
        	
        	$errors[] = "user must be graeter than 3";
        }

          if(strlen($username) > 20){
        	
        	$errors[] = "user must be small than 20";
        }

        

     //check fullname

         if($fullname == ''){
	      $errors[] = "fullname cant be empty";
         }

      if(strlen($username) < 4){
        	
        	$errors[] = "fullname must be graeter than 10";
        }

        


      if(strlen($password) < 8){

        $errors[] = "password must be greater than 7";
    }

     

				if(!empty($errors)){

           echo "<div class='allerrors'>" . "ERRORS!" . "<br>";

				 foreach ($errors as $value) {
				 	
				 	echo $value . "<br>";
				 }

				 echo "</div>";

}else{



     $bug = 'salt';


	  	$password = password_hash($password .$bug,PASSWORD_BCRYPT). "\n";

       // echo $username . "<br>" . $password . "<br>" . $email . "<br>" . $fullname . "<br>" ;


                   $query = "INSERT INTO users(username,password,email,fullname,thedate,regstatus) VALUES
                                                ('{$username}','{$password}','{$email}','{$fullname}',now(),1)";

                        $result = mysqli_query($connect,$query);

                        if(mysqli_affected_rows($connect) > 0){

						        echo "<div class='succ'><p>success to added new admin</p>
                                        <a href='?do=manage' style='text-decoration:none;'>Back To Manage</a>
						        </div>";

						    }else{

                                echo "<div class='allerrors'>error in database add because this username to another user</div>";
						        }

    }



                    }else{
                    	
                    	       //end of not isset request ['post']

                    	//header("location:members.php?do=add");

                    	echo   "<br>"."sorry you cant browse this page directly" . "<br>" . "<br>";

                    	echo "<a href='?do=manage'>Back To Manage</a>";


                    }

				}
//=====================================================================================================================
// ------------------------------------------- if do == 'edit' -------------------------------------------------

	if($do == 'edit'){

      if(isset($_GET['userid'])){

      $userid = $_GET['userid'];
   

?>

			<h2 class="hadd">Edit Mebers</h2>

			  <div class="add_mem">


			   <form class="add" action="<?php echo urldecode('?do=update_members&userid='.$userid);?>" method='POST'>
			   <input type="text" name="username" required autocomplete="off" placeholder="username" class="inputs" id="edit1" 
			   onfocus="removeAttribute('placeholder');">	


			   <input type="password" name="password" autocomplete="new-password" class="inputs" required placeholder="password" 
			   onfocus="removeAttribute('placeholder');" id="edit2">

			   <input type="email" name="email"  required placeholder="Email" class="inputs" id="edit3" 
			   onfocus="removeAttribute('placeholder');">

			    <input type="text" name="fullname" required autocomplete="off" placeholder="full name" class="inputs"
			    onfocus="removeAttribute('placeholder');" id="edit4">
			   <input type="submit" name="submit" value="Edit" class="submit">
					</form>
			  	
			  </div>

 <?php 
			 }else{

				    	echo   "<br>"."sorry you cant browse this page directly" . "<br>" . "<br>";

				        echo "<a href='?do=manage'>Back To Manage</a>";
				    }

					}

 //=================================================end if do edit==============================================
//=============================================================================================================					
?>

<?php

//=================================== if do == 'update_members' ============================================

	if($do == 'update_members'){

	   if($_SERVER['REQUEST_METHOD'] == 'POST'){
          
          $user_id = $_GET['userid'];
          $user_id = (int)$user_id;


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
                    
                    $user_id = mysqli_real_escape_string($connect,$user_id);
		            $username = mysqli_real_escape_string($connect,$username);
                    $password = mysqli_real_escape_string($connect,$password);
					$email = mysqli_real_escape_string($connect,$email);
					$fullname = mysqli_real_escape_string($connect,$fullname);

//==================================check eeror ====================================================

$errors = array();

        if($username == ''){
        	
        	$errors[] = "user cant be empty";
        }
           

        if(strlen($username) < 3){
        	
        	$errors[] = "user must be graeter than 3";
        }

          if(strlen($username) > 20){
        	
        	$errors[] = "user must be small than 20";
        }

        

     //check fullname

         if($fullname == ''){
	      $errors[] = "fullname cant be empty";
         }

      if(strlen($username) < 4){
        	
        	$errors[] = "fullname must be graeter than 10";
        }

        


      if(strlen($password) < 8){

        $errors[] = "password must be greater than 7";
    }

     

				if(!empty($errors)){

           echo "<div class='allerrors'>" . "ERRORS!" . "<br>";

				 foreach ($errors as $value) {
				 	
				 	echo $value . "<br>";
				 }

				 echo "</div>";

              }else{



     $bug = 'salt';


	  	$password = password_hash($password .$bug,PASSWORD_BCRYPT). "\n";

       //echo $username . "<br>" . $password . "<br>" . $email . "<br>" . $fullname . "<br>" ;



                  $query = "UPDATE users SET username = '{$username}', password = '{$password}',
                                                 email = '{$email}', fullname = '{$fullname}' WHERE userid={$user_id} LIMIT 1";

                        $result = mysqli_query($connect,$query);

                        if(mysqli_affected_rows($connect) > 0){

						        echo "<div class='succ'><p>success to Update new admin</p></div>";
						    }else{

                                echo "<div class='allerrors'>error in database add because this username to another user</div>";
						        }




    }
	
 mysqli_close($connect);


	   }else{

	 echo   "<br>"."sorry you cant browse this page directly" . "<br>" . "<br>";

				        echo "<a href='?do=manage'>Back To Manage</a>";
	   }




	}

//=========================================== end of do == 'update_members' ===================================
//=============================================================================================================

//-------------------------------------------------------------------------------------------------------------
	//=================================if do ='delete' ==================================================

	if($do == 'delete'){
		//echo "delete";

         if(isset($_GET['userid'])){

         $user_id = $_GET['userid'];
         $user_id = (int)$user_id;
         $user_id = mysqli_real_escape_string($connect,$user_id);

         $query4 = "DELETE FROM users WHERE userid = '{$user_id}' LIMIT 1";
         $result4 = mysqli_query($connect,$query4);

         if(mysqli_affected_rows($connect) > 0){

			   echo "<div class='succ'><p>success to Delete admin</p></div>";
	     }else{

               echo "<div class='allerrors'>error in database </div>";
			  }


}else{
	
                echo   "<br>"."sorry you cant browse this page directly" . "<br>" . "<br>";

				        echo "<a href='?do=manage'>Back To Manage</a>";

}
	}

//=====================================end delete ======================================================

	//-------------------------------------------------------------------------------------------------------

	//==============================================active=================================================

	if($do == 'active'){
		//echo "delete";

         if(isset($_GET['userid'])){

         $user_id = $_GET['userid'];
         $user_id = (int)$user_id;
         $user_id = mysqli_real_escape_string($connect,$user_id);

         $query4 = "UPDATE users set regstatus = 1 WHERE userid = '{$user_id}' LIMIT 1";
         $result4 = mysqli_query($connect,$query4);

         if(mysqli_affected_rows($connect) > 0){

			   echo "<div class='succ'><p>success to Delete admin</p></div>";
			   				        echo "<a href='?do=manage'>Back To Manage</a>";

	     }else{

               echo "<div class='allerrors'>error in database </div>";
               				        echo "<a href='?do=manage'>Back To Manage</a>";

			  }


}else{
	
                echo   "<br>"."sorry you cant browse this page directly" . "<br>" . "<br>";

				        echo "<a href='?do=manage'>Back To Manage</a>";

}
	}




?>







<script>

var ed1 = document.getElementById('edit1'),
    ed2 = document.getElementById('edit2'),
    ed3 = document.getElementById('edit3'),
    ed4 = document.getElementById('edit4');


 ed1.onblur = function(){
 	if(ed1.value == ''){
   ed1.setAttribute('placeholder','username');
 	}}

 ed2.onblur = function(){
 	if(ed2.value == ''){
   ed2.setAttribute('placeholder','password');
 	}}


 	 ed3.onblur = function(){
 	if(ed3.value == ''){
   ed3.setAttribute('placeholder','Email');
 	}}


 	 ed4.onblur = function(){
 	if(ed4.value == ''){
   ed4.setAttribute('placeholder','full name');
 	}}


</script>



<!--<div class="foot"><p>Madrid &copy; Every Thing To Real Madird! </p></div>-->

</body>
</html>