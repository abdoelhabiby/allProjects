<?php
/* (1)
session_start();
echo "welcome " . $_SESSION['username'] . "<br>";

echo "you are vist this page " . $_SESSION['counter'];

*/


session_start();

if(isset($_SESSION['admin'])){

	echo "welcome to your data mr:" . $_SESSION['admin'];
}else{

	echo "you are not permitted to see this page";
}

echo "<pre>";
print_r($_SESSION);
echo "</pre>";

