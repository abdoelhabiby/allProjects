<?php

require_once("../../../private/function.php");

$page_title = "new_subject";
require_once("../../shared/header_staff.php");

?>

<style type="text/css">
	.n_subject{

	max-width: 400px;
    margin: auto;
    padding: 5px;
}

.n_subject .form-group{
	margin-bottom: 30px;
}

.n_subject label{font-size: 19px;}
</style>

<div class="content">
  <div class="container">
  	
    <a href="index.php"> <<< Back To LIst</a>

    <h2 class="h2 mt-2">Create New Subject </h2>

    <?php
       if(isset($_SESSION['empty'])){ echo $_SESSION['empty']; unset($_SESSION['empty']); }
       if(isset($_SESSION['chars'])){ echo $_SESSION['chars']; unset($_SESSION['chars']); }
       if(isset($_SESSION['poserr'])){ echo $_SESSION['poserr']; unset($_SESSION['poserr']); }
       if(isset($_SESSION['poserr'])){ echo $_SESSION['poserr']; unset($_SESSION['poserr']); }



         

       
    ?>


    <form method="POST" action="submit.php?do=<?php echo htmlspecialchars('newSubject');?>" class="mt-5 n_subject">
    	<div class="form-group row clearfix">
	    	<label class="col-sm-4 col-form-label" for="menuName">Menu Name</label>
	    	<input class="col-sm-8 form-control" type="text" name="menu_name" id="menuName">
    	</div>

    	<div class="form-group row clearfix">
	    	<label class="col-sm-4 col-form-label" for="position">Position</label>
	    	<select id="position" name="position" class="form-control col-sm-8 ">
             
            <?php 

               $query = "SELECT COUNT(position) AS cpos FROM subject";
               $result = mysqli_query($connect,$query);
               if(mysqli_num_rows($result) > 0){
                    
                    $key = mysqli_fetch_assoc($result);
                    $keyp = $key['cpos'] + 1;

          echo "<option value=" . $keyp ."class='p-2'>" . $keyp  ."</option>";


               }

            ?>





           <!--  <option value="1" class="p-2">1</option> -->

	    	</select>
    	</div>

    	<div class="form-group clearfix">
    		<label class="col-sm-4 form-check-label" for="visible" style="padding-left: 0;">Visible</label>
            <input  type="hidden" name="visible" value="0">
    		<input  type="checkbox" name="visible" id="visible" value="1">
	    	
	    	
    	</div>    	 

    	<input type="submit" name="submit" value="Create Subject" class="btn btn-primary">   	

    </form>


  </div>





</div>







<?php

require_once("../../shared/footer_staff.php");

 ?>
