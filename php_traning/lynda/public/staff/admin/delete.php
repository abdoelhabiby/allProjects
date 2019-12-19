<?php
require_once("../../../private/function.php");

$id = $_GET['id'] ?? rediredt_to('index.php');


 $id = (int)$id;
 $id = h($id);
 $id = MRES($id);

 
 $query = "DELETE FROM admins ";
 $query.="WHERE id = '{$id}' LIMIT 1"
 $result = mysqli_query($connect,$query);


  if($result && mysqli_affected_rows($connect) > 0){

    	 $_SESSION['SUCCESS']= '
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                   <strong>SUCCESS!</strong>  SUCCESS TO DELETE ADMIN
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                  </div>';  
       redirect_to('index.php');


  }else{
      			$_SESSION['faileddel'] = '
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                   <strong>FAILED!</strong>	SORRY CAN NOT DELETE THIS ADMIN!!
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                  </div>';


                  redirect_to('index.php');


  }
 



 ?>