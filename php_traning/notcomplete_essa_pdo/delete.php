<?php 

ob_start();
session_start();


require_once("person.php");



if(isset($_GET['id'])){

$id = $_GET['id'] ?? false;
 $id = (int)$id;


if($id == false){

	header("location:index1.php");
	exit;

}



$result = $person->delete($id);


if($result->rowCount() > 0){

	$_SESSION['success'] = '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>SUCCESS</strong> SUCCESS TO DELETE USER.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';

	header("location:index1.php");
	exit;

}else{


	$_SESSION['error'] = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>ERROR</strong> FAILED TO DELETE  USER.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';

	header("location:index1.php");
	exit;



}





}else{  // end if isser ['id'];

 header("location:index1.php");
 exit;


}