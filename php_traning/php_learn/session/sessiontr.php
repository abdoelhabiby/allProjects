<?php
/* (1)
session_start();

$_SESSION['username']='mohaned';

include "coun.php";
echo "<br>" . "<a href='cc.php'>click</a>";

*/

session_start();

$admin=array("ahmed", "omar", "mohamed", "sayed");

if($_SERVER['REQUEST_METHOD'] == "POST"){

 $var= $_POST['username'];
if(in_array($var,$admin)){
$var2=$_SESSION['admin']= $var;
echo "welcome admin " . $_SESSION['admin'] . " to your page" . "<br>" . "wait some seconde to move to your data ";
header('REFRESH:5,URL=cc.php');
}else{
	echo "sorry you are not admin";
}

}else{

echo "sorry you can browse this page directly ";

}




