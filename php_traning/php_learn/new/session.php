<?php

session_start();

if(!isset($_SESSION['user_id'])){


   header("refresh:3;url=index.php");

     echo "<h1 style = 'color:red; background:#DDD; margin:100px auto;text-align:center;'>Sorry You Cant Browse This Page Directly!<p>Before login</p></h1>";

  //header("location:index.php");
  exit;
}