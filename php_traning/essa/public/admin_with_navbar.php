
<?php include 'conected-db.php'; 


$query="SELECT * FROM website_navbar WHERE 1";

$result=mysqli_query($connect,$query);


if(mysqli_num_rows($result) > 0) {

?>







<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="static/css/bootstrap.min.css" >
  </head>
  
  <body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">

           <div class='container theme-showcase' role='main'>

      <a class="navbar-brand" href="admin.php">CMS</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
       


          <?php 

   while($keyarray=mysqli_fetch_assoc($result)){
echo "<li>" . "<a class='nav-link'>" .$keyarray["ITEM_NAME"].  "</a>" . "</li>"  ;

   }
   
}else{



}

mysqli_free_result($result);


?>


  <li class="nav-item dropdown" >
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" 
            aria-haspopup="true" aria-expanded="false"  ">about us</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
        </ul>
 </div>
      </div>
    </nav>
           <div class='container theme-showcase' role='main'>

<div class='jumbotron'>

<h1>Admins Area</h1>
<p>welcome to your control panel</p>

 <p> 

 <a type='button' class='btn btn-lg btn-danger' href='manage-content2.php'> manage content </a> 
 <a type='button' class='btn btn-lg btn-primary' href='admin.php'> admin </a> 
 <a type='button' class='btn btn-lg btn-success' href='logout.php'> logout </a> 



 </p>



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