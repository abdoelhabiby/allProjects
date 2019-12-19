<?php
require_once("function.php");



?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width , initial-scale=1, shrink-to-fit=no">
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">


</head>
<body>



<div class="container sigup">
	<form  method="POST" action="submit.php?do=<?php echo h(u('signup'));?>" enctype="multipart/form-data">

<?php
 
if(isset($_SESSION['error'])){
	echo $_SESSION['error'];
	unset($_SESSION['error']);
}

?>



		<h2 class="text-center h1">Sign Up</h2>
    
    <div class="row">
		<div class="form-group col-sm-6 col-xs-12">
			<label for="name">Name</label>
			<input type="text" name="name" class="form-control" id="name">
		</div>

		<div class="form-group col-sm-6 col-xs-12">
			<label for="username">Username</label>
			<input type="text" name="username" class="form-control" id="username">
		</div>

		<div class="form-group col-sm-6 col-xs-12">
			<label for="email">Email</label>
			<input type="text" name="email" class="form-control" id="email">
		</div>


		<div class="form-group col-sm-6 col-xs-12">
			<label for="image">Choose Your Image</label>
			<input type="file" name="image" class="form-control" id="image">
		</div>		



		<div class="form-group col-sm-6 col-xs-12">
			<label for="password">Password</label>
			<input type="password" name="password" class="form-control" id="password">
		</div>

		<div class="form-group col-sm-6 col-xs-12">
			<label for="confirm_password">Confirm Password</label>
			<input type="password" name="confirm_password" class="form-control" id="confirm_password">
		</div>

</div>

		<input type="submit" name="login" value="Sign Up" class="btn btn-primary">

	</form>
</div>







<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>	
<script type="text/javascript" src="js/bootstrap.min.js"></script>	
<script type="text/javascript" src="js/custom.js"></script>	


</body>
</html>