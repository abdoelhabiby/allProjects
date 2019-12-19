<?php 

ob_start();
session_start();


require_once("person.php");




if(isset($_GET['do']) && $_GET['id']){

$id = $_GET['id'] ?? false;
 $id = (int)$id;


if($id == false){

	header("location:index1.php");
	exit;

}



if(isset($_POST['submit_edit'])){

$username = $_POST['username'] ?? "";
$username = checkinput($username);
checkempty($username);

$email = $_POST['email'] ?? "";
checkempty($email);

$password = $_POST['password'] ?? "";
checkempty($password);

$confirm_password = $_POST['confirm_password'] ?? "";


$allerror = checkerror($error);

if($allerror == true){

$_SESSION['error'] = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>ERROR</strong> FAILED TO UPDATE  USER.<br>' . $allerror .'
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';

}else{





$result = $person->update($username,$email,$password,$id);

 if($result->rowCount() > 0){

// echo "success to updated";

$_SESSION['success'] = '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>SUCCESS</strong> SUCCESS TO EDIT USER.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';

	header("location:index1.php");
	exit;
 }




else{

$_SESSION['error'] = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>ERROR</strong> FAILED TO UPDATE  USER.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';



	header("location:edit.php?id=" .$id);
	exit;

}





}


}

}
















if(isset($_GET['id'])){

$id = $_GET['id'] ?? false;
 $id = (int)$id;


if($id == false){

	header("location:index1.php");
	exit;

}

$answer = $person->read($id);

if($answer->rowCount() > 0){

  $key = $answer->fetch(PDO::FETCH_ASSOC);
  
  ?>


<!DOCTYPE html>
<html>
<head>
	<title>PDO ESSA</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" type="text/css" href="js_css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="js_css/font-awesome.min.css">
    <style type="text/css">
    	form{max-width: 600px; margin:30px auto;}
    </style>
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
		<div class="container">
	  <a class="navbar-brand" href="#">Navbar</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNavDropdown">
	    <ul class="navbar-nav">
	      <li class="nav-item active">
	        <a class="nav-link" >Home <span class="sr-only">(current)</span></a>
	      </li>



	    </ul>
	  </div>
	  </div>
	</nav>


<!---------------------------------------------------------------------------------------------->
     	   
    <div class="container mt-5"> 

<?php if(isset($_SESSION['error'])){echo $_SESSION['error']; $_SESSION['error'] = null;} ?>



    	<h2 class="h1 text-center mb-5">Edit User</h2>

       	   <form action="<?php echo $_SERVER['PHP_SELF'] .'?do=update&id=' . $key['id'] ; ?>" method="POST">

	       	   	<div class="form-group">
	       	   		<label>Username</label>
	       	   		<input type="text" name="username" placeholder="username" class="form-control" value="<?php echo $key['username']; ?>">
	       	   	</div>

	       	   	<div class="form-group">
	       	   		<label>E-mail</label>
	       	   		<input type="email" name="email" placeholder="email" class="form-control"
	       	   		value="<?php echo h($key['email']); ?>">
	       	   	</div>

	       	   	<div class="form-group">
	       	   		<label>Password</label>
	       	   		<input type="password" name="password" placeholder="password" class="form-control">
	       	   	</div>	       	   		       	   	
                

	       	   	<div class="form-group">
	       	   		<label>Confirm Password</label>
	       	   		<input type="password" name="confirm_password" placeholder="Confirm Password" class="form-control">
	       	   	</div>	                
            <input type="submit" name="submit_edit" value="Edit User" class="btn btn-primary">

       	   </form>


  
</div>




<?php 


}



}



ob_end_flush();

?>

<script type="text/javascript" src = "js_css/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src = "js_css/bootstrap.min.js"></script>
</body>
</html>


