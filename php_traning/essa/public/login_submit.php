<?php
include_once 'conected-db.php';
include_once 'session.php';



if(isset($_POST['submit'])){

$username=htmlentities($_POST['uname']);
$password=htmlentities($_POST['password']);

$username1=mysqli_real_escape_string($connect,$username);
$password1=mysqli_real_escape_string($connect,$password);




$query="SELECT id,username,password from admins WHERE username='{$username1}' LIMIT 1";

$result=mysqli_query($connect,$query);


if($result && mysqli_num_rows($result) > 0){

$keyarray=mysqli_fetch_assoc($result);



//echo $username1 . "<br>";
//echo $password1 . "<br>";
//echo $result . "<br>";
//echo $keyarray['password'];
//echo $keyarray['username'] . "<br>";

//echo $keyarray['password'];

$_SESSION['user']=$keyarray['username'];
$_SESSION['id_user']=$keyarray['id'];




}




if($result && mysqli_num_rows($result) > 0){

if($password1 == password_verify($password1,$keyarray['password'])){

  header("location:admin.php"); 

}else{
		header("location:login.php");

} }


}else{
			header("location:login.php");

}  

