<?php
require_once("function.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width , initial-scale=1, shrink-to-fit=no">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">


</head>
<body>



<div class="container login">
	<form action="submit.php?do=<?php echo h(u('login'));?>" method="POST">
<?php
 
if(isset($_SESSION['error'])){	echo $_SESSION['error']; unset($_SESSION['error']); }
if(isset($_SESSION['success'])){echo $_SESSION['success']; unset($_SESSION['success']); }


?>


		
		<h2 class="text-center h1">Login</h2>
		<div class="form-group">
			<label for="username">username</label>
			<input type="text" name="username" class="form-control" id="username">
		</div>

		<div class="form-group">
			<label for="password">password</label>
			<input type="password" name="password" class="form-control" id="password">
		</div>

		<input type="submit" name="login" value="Login" class="btn btn-primary">
		<span><a href="signup.php">Or Sign up ?</a></span>

	</form>
</div>







<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>	
<script type="text/javascript" src="js/bootstrap.min.js"></script>	
<script type="text/javascript" src="js/custom.js"></script>	


</body>
</html>