<?php
require_once("../../private/function.php");

$page_title = "staff";

?>

<!DOCTYPE html>
<html>
<head>
	<title>GBI - <?php echo htmlspecialchars($page_title); ?></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="stylesheet/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="stylesheet/style-staff.css">

    <style type="text/css">
      .topos p{display: inline;}
      .topos a{position: absolute; right: 50px; top:65px; font-size: 20px;}

    </style>

</head>
<body>

   <h1 class="bg-primary text-center">GBI Staff Area</h1>


  <div class="container">
     <div class="topos text-center mt-4 ">

      <p class="text-center"> USER ADMIN : <?PHP if(isset($_SESSION['user'])){echo $_SESSION['user'];} ?> </p>
      <a class="text-center" href="logout.php">logout</a>
      



    
     </div>

</div>





 


<div class="content">
	

    <div class="container mt-5">
    	  
    	  <h2 class="h3">Main Menu</h2>
    	  <ul class="list-group nav">
    	  	<li class="nav-item"><a href="subject/index.php">Subject</li>

    	  	<li class="nav-item"><a href="page/index.php">Page</li>
          <li class="nav-item"><a href="admin/index.php">Admins</li>

    	  </ul>



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

<?php ob_end_flush(); ?>
