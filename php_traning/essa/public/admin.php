<?php 

include 'conected-db.php'; 
include_once 'session.php';


if(!isset($_SESSION['id_user'])){

  header("location:login.php");
}




?>







<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="static/css/bootstrap.min.css" >
    <style>
      .space1{
        margin-left:240px;

      }
    </style>
  </head>
  
  <body>





<div class="pos-f-t">

  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">






<ul style="list-style-type:none;">

<li> <a style="color:white;" href='#'><h4> CMS </h4></a> </li>

   <?php
$query="SELECT * FROM website_navbar WHERE VISIBLE =1";
$fromdata=mysqli_query($connect,$query);

if(mysqli_num_rows($fromdata) > 0) {

  while($keyarray=mysqli_fetch_assoc($fromdata)){
?>

<li> <a  style="color:white;" href="manage-content.php?menu=<?php echo mysqli_real_escape_string($connect,$keyarray['id']);?>"> <h4><?php echo $keyarray['ITEM_NAME']; ?>
  
</h4></a></li>


<?php

$query1="SELECT * FROM pages WHERE visible=1 AND `pages`. `item_name_id`= ".$keyarray['id'];
$fromdata1= mysqli_query($connect,$query1);

  if(mysqli_num_rows($fromdata1) > 0) {

    while($keyarray1=mysqli_fetch_assoc($fromdata1)){

?>

    <li> <a  style="color:white;" href="manage-content.php?page=<?php echo mysqli_real_escape_string($connect,$keyarray1['id']); ?>"> 
      <?php echo $keyarray1['page_name']; ?>  </a></li>

<?php

    }
  }

?>


<?php
  }
}
 mysqli_free_result($fromdata);
   ?>

</ul>



</div>
  </div>
  <nav class="navbar navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
</div>







           <div class='container theme-showcase' role='main'>


<div class='container-fluid space1'>
  <div class='col-sm-9'>
<div class='container'>

<h1>Admins Area</h1>
<p>welcome to your control panel</p>

 <p> 

 <a type='button' class='btn btn-lg btn-danger' href='manage-content.php'> Manage Content </a> 
 <a type='button' class='btn btn-lg btn-primary' href='admins_manage.php'> Admins Manage</a> 
 <a type='button' class='btn btn-lg btn-success' href='logout.php'> Logout </a> 





 </p>



</div>
</div>
</div>
</div>










<?php if(isset($connect))   {  mysqli_close($connect); } ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="static/js/bootstrap.min.js"></script>
  </body>
</html>

