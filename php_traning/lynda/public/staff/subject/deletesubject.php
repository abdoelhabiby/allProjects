<?php
require_once("../../../private/function.php");



$id = $_GET['id'] ?? redirect_to('index.php');

$id = (int)$id;
$id = h($id);
$id = MRES($id);

  
  $query = "DELETE FROM subject ";
  $query.= "WHERE id = '{$id}' LIMIT 1";
  

  if($result = mysqli_query($connect,$query) && mysqli_affected_rows($connect) > 0){
    
    redirect_to('index.php');
    exit;


  }else{

     $_SESSION['errore'] = '
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
     <strong>WRONG!</strong>SORRY CAN NOT DELELE THIS SUBJECT.
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>';
  	redirect_to('index.php');
  	exit;
  }



?>
