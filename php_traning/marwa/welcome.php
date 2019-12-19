<?php


require_once "function.php";



if(isset($_SESSION['id'])){

require_once "connect.php";


$id = $_SESSION['id'];


$query = "SELECT img,uername FROM users ";
$query.="WHERE id = '{$id}'";

$result = mysqli_query($connect,$query);

if(mysqli_num_rows($result) > 0){
 
 $key = mysqli_fetch_assoc($result);


}else{
	echo "no id";
	sleep(6);
}




echo "<img src='images/". $key['img'] . "'>";




}
















?>