<?php

require_once("../../private/function.php");

$page_title = "login";





?>

<!DOCTYPE html>
<html>
<head>
	<title>GBI - <?php echo h($page_title); ?></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="stylesheet/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="stylesheet/style-staff.css">
    <style type="text/css">
    	form{max-width: 400px; margin: 50px auto; }
    	form input{margin-bottom: 30px;}
    	.tocenter a{font-size: 20px;}
    </style>



</head>
<body>

   <h1 class="bg-primary text-center">GBI Staff Area</h1>




<div class="content">
   
   <div class="container">







   	<h2 class="text-center mt-4">Login</h2>

    	<?php

    	if(isset($_SESSION['emptyuser'])){ echo $_SESSION['emptyuser']; unset($_SESSION['emptyuser']); }
    	if(isset($_SESSION['notfound'])){ echo $_SESSION['notfound']; unset($_SESSION['notfound']); }
    	if(isset($_SESSION['notcorrect'])){ echo $_SESSION['notcorrect']; unset($_SESSION['notcorrect']); }

 
   	?>

 <form action="<?php echo h('submit_log.php'); ?>" method='POST' class='form-group'>

    <div class="row">
	    <label for="username" class="col-4 col-form-label">USERNAME</label>
	    <input type="text" name="username" id="username" class="col-8 form-control" required autocomplete="off">
    </div>

    <div class="row">
	    <label for="password" class="col-4 col-form-label">PASSWORD</label>
	    <input type="text" name="password" id="password" class="col-8 form-control" required autocomplete="off">
    </div>

    <input type="submit" name="submit" value="LOGIN" class="btn btn-primary">
 	
 </form>



</div>



</div>


<footer class="bg-primary text-center h2">
	&copy; <?php echo Date('Y'); ?>
</footer>


<script type="text/javascript" src="stylesheet/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script type="text/javascript" src="stylesheet/bootstrap.min.js"></script>





</body>
</html>
 