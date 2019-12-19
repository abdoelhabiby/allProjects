<?php 

session_start();


require_once("person.php");


//-------------------------------submit_new---------------------------------

if(isset($_POST['submit_new'])){


$username = $_POST['username'] ?? "";
$username = checkinput($username);
checkempty($username);

$email = $_POST['email'] ?? "";
checkempty($email);

$password = $_POST['password'] ?? "";
checkempty($password);

$confirm_password = $_POST['confirm_password'] ?? "";


$allerror = checkerror($error);

// echo $username . "<br>". $email . "<br>" . $password . "<br> .$confirm_password ;


if($allerror == true){

$_SESSION['error'] = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>FAILED</strong> FAILED TO ADD NEW USER. PLEASE SOLVE ERROR <br> ' . $allerror .'
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';

header("location:index1.php");



}else{






 $create = $person->create($username,$email,$password);

if($create){

$_SESSION['success'] = '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>SUCCESS</strong> SUCCESS TO ADD NEW USER.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';

header("location:index1.php");


}else{
	echo "failed to inserte";
}


}


}














//-------------------------------------------------------------










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
    	table tr:nth-child(even){

           background: #333;
    	}

    	table thead tr{background: #2b2121;}
    	.tohov{cursor: pointer;}
    	h5 i:hover{color:green;}
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

<!-- ----------------------------form new user ---------------------------------------------->

<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg">  Large modal
</button> -->

<div class="modal fade " id="modal-lg" tabindex="-1" role="dialog" 
       aria-labelledby="myLargeModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-lg">
    <div class="modal-content">
       <div class="modal-header">
       	   <div class="modal-title"> Add New User</div>
       </div>  
       <div class="modal-body">
       	   
       	   <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

	       	   	<div class="form-group">
	       	   		<label>Username</label>
	       	   		<input type="text" name="username" placeholder="username" class="form-control">
	       	   	</div>

	       	   	<div class="form-group">
	       	   		<label>E-mail</label>
	       	   		<input type="email" name="email" placeholder="email" class="form-control">
	       	   	</div>

	       	   	<div class="form-group">
	       	   		<label>Password</label>
	       	   		<input type="password" name="password" placeholder="password" class="form-control">
	       	   	</div>	       	   		       	   	
                

	       	   	<div class="form-group">
	       	   		<label>Confirm Password</label>
	       	   		<input type="password" name="confirm_password" placeholder="Confirm Password" class="form-control">
	       	   	</div>	                
            <input type="submit" name="submit_new" value="Create New User" class="btn btn-primary">

       	   </form>
       </div>    

       <div class="modal-footer">
       	 <button class="btn btn-danger" data-dismiss = "modal">Cancel</button>
       </div>
    </div>
  </div>
</div>


<!-- ----------------------------end form new user ---------------------------------------------->







<div class="container mt-5">

<?php

 if(isset($_SESSION['success'])){echo $_SESSION['success'];
          $_SESSION['success'] = null;
          //unset($_SESSION['success']);
  } 
  if(isset($_SESSION['error'])){echo $_SESSION['error'];
       $_SESSION['error'] = null;
       //unset($_SESSION['error']);
  } 


 ?>

	
	<h2 class="h1 text-center mb-4">All Users</h2>
	<h5 class="mb-4"><a class='tohov' data-toggle="modal" data-target="#modal-lg"><i class="fa fa-plus-circle"> Create New User</i></a></h5>

<table class="table table-bordered table-dark text-center table-hover">
	<thead class="thead-dark">
		<tr>
			<td>ID</td>
			<td>Username</td>
			<td>E-mail</td>
			<td>password to test just HHH</td>
			<td>Control</td>
		</tr>
	</thead>
	<tbody>

<?php 

$getdata = $person->viewdata();

if($getdata == true){

 while($key = $getdata->fetch(PDO::FETCH_ASSOC)){ ?>

		<tr>
			<td><?php echo $key['id']; ?></td>
			<td><?php echo $key['username']; ?></td>
			<td><?php echo $key['email']; ?></td>
			<td><?php echo $key['password']; ?></td>
			<td>
				<a href="edit.php?id=<?php echo u(h($key['id'])); ?>" class="btn btn-primary btn-sm mr-2">
				    <li class="fa fa-edit fa-lg"></li>
			    </a>

			    <a href="delete.php?id=<?php echo u(h($key['id'])); ?>"
			         class="confirm btn btn-danger btn-sm"><li class="fa fa-trash fa-lg"></li>
			    </a>
		  </td>
		</tr>

<?php		

	}


}



?>

</tbody>
</table>



</div>



<script type="text/javascript" src = "js_css/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src = "js_css/bootstrap.min.js"></script>
<script type="text/javascript">
	$(function(){


$('.confirm').click(function(e){


var answer = confirm("Are You Shoore To Delete");

 
 if(answer == false){
 	e.preventDefault();
 }




})



	});
</script>

</body>
</html>
