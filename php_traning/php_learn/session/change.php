<?php

session_start();


echo $_SESSION['username'] . "<br>";
echo $_SESSION['yourclub']. "<br>";

echo "<pre>";
print_r($_SESSION);
echo "</pre>";
echo $_SESSION['ubuntu'];


echo "<a href='close.php'>exit</a> ";


/*
 //to close

 on new file or here 

 session_start();
 session_unset();
session_destroy();
*/