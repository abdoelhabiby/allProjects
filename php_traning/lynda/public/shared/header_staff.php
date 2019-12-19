<?php 

if(!isset($_SESSION['user_id'])){


	header("location:../login.php");
	exit();
}



if(!isset($page_title)){$page_title = "staff area";}
?>
<!DOCTYPE html>
<html>
<head>
	<title>GBI - <?php echo htmlspecialchars($page_title); ?></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="../stylesheet/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="../stylesheet/style-staff.css">
<style type="text/css">

	.tohead li{display: inline-block !important; margin-right: 10px;}
	.tohead li .log{position: absolute; right:70px; top: 72px;}
</style>
  

</head>
<body>

   <h1 class="bg-primary text-center">GBI Staff Area</h1>
<div class="container tohead">
   <ul class="text-center mt-4">
    <li>USER ADMIN : <span style="color:green;"><?PHP echo $_SESSION['user'] ?? ''; ?> </span></li>
   	<li class="h5"><a href="<?php echo '../index.php'; ?>">Menu</a></li>
   	<li class="h5"><a class="log" href="<?php echo '../logout.php'; ?>">logout</a></li>

   </ul>
</div>