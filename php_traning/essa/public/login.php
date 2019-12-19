<?php 

include 'conected-db.php';
include_once 'session.php';

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
   
    </style>
  </head>
  
  <body>





<div class="container">
<div class='row'>
  <div class='col-sm-3'>


</div>

  <div class='col-sm-6'>
<br> <br>
 <h2>Admins Login  </h2>
 <br>


<form action='login_submit.php' method="POST">

 

  <div class="form-group">
    <label >user name:</label>
    <input type="text" class="form-control" name='uname' placeholder="username">
  </div>

  <div class="form-group">
    <label >password:</label>
    <input type="password" class="form-control" name='password' placeholder="password">
  </div>




  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>


  </div>

  <div class='col-sm-3'>


  </div>
  </div>





   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="static/js/bootstrap.min.js"></script>
  </body>
</html>
