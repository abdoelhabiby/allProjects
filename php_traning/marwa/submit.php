<?php

require_once "function.php";


if($_SERVER['REQUEST_METHOD'] == 'POST'){


require_once "connect.php";


$do = $_GET['do'] ?? 'none';

$do = h(u($do));

if($do == 'none'){
		header("location:login.php");
	exit();
}





if($do == 'login'){

$username = $_POST['username'] ?? '';
$username = checkinput($username);
$username = MRES($username);
 chempty($username);


//----------------------------------------------

$password = $_POST['password'] ?? '';
$password = MRES($password);
chempty($password);



$finderror = displayerror($errors);

if($finderror == true){

	$_SESSION['error'] = $finderror;

header("location:index.php");
exit;

}else{





$query = "SELECT id,uername,password_hash from users ";
$query.= "WHERE uername = '{$username}' LIMIT 1";
$result = mysqli_query($connect,$query);

if(mysqli_num_rows($result) > 0){

$key = mysqli_fetch_assoc($result);

if(password_verify($password, $key['password_hash'])){
    
    $_SESSION['id']  = u(h($key['id']));
    $_SESSION['user']  = u(h($key['uername']));
   
     redirect_to("welcome.php");

     
}else{
	$_SESSION['error'] = "<div class='alert alert-danger'>the password not correct<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
                  </button></div>"; 
	header("location:index.php");
    exit;

}




}else{

	$_SESSION['error'] = "<div class='alert alert-danger'>the username not correct<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
                  </button></div>"; 
	header("location:index.php");
    exit;
}





}





//-----------------------------------------------------------------------------------------------

}elseif($do == 'signup'){


//--------------name---------------------



$name = $_POST['name'] ?? '';
$name = checkinput($name);
$name = MRES($name);
 chempty($name);
 checklen($name);

//--------------username-------------------

$username = $_POST['username'] ?? '';
$username = checkinput($username);
$username = MRES($username);
 chempty($username);
 checklen($username);



//--------------email---------------------


$email = $_POST['email'] ?? '';
$email = MRES($email);
chempty($email);

 $preg = '/\A[A-Z0-9._%=-]+@[A-Z0-9.-]+\.[A-Z]{2,}\Z/i';


 if(preg_match($preg, $email) !== 1){

  $errors[] = "this email not corrcet";

}


//---------------------password-------------------------

$password = $_POST['password'] ?? '';
$password = MRES($password);
chempty($password);
passlen($password);

$confirm_password = $_POST['confirm_password'] ?? '';
$confirm_password = MRES($confirm_password);
chempty($confirm_password);
passlen($confirm_password);

confirm_pass($password,$confirm_password);


//echo $password . "<br>" . $confirm_password;



//--------------------image-----------------------------------


$getfile = $_FILES['image'];

if($getfile['error'] != 0){ 


 $errors[] = "please upload the image"; 


}else{

$img_name = $getfile['name'];

$theextension = array('png','jpg','gif','jpeg');

$findexte = @strtolower(end(explode(".", $img_name)));

if(!in_array($findexte, $theextension)){

	$errors[] = "SORRY THIS FILE NOT IMG !!";
}



$img_size = $getfile['size'];


if($img_size === 0){
	$errors[] = "SORRY THIS FILE empty !!";}

if($img_size > 500000){
	$errors[] = "SORRY you cant upload img bigger than 500000!!";}


}




$img_tmp = $getfile['tmp_name'];


$newname =(microtime(true * 10)) . "." . $img_name;










//-------------------------------------------------


$finderror = displayerror($errors);

if($finderror == true){
	$_SESSION['error'] = $finderror;

header("location:signup.php");
exit;
}else{





//--------------------------------------------


$password_hash = password_hash($password, PASSWORD_DEFAULT);

//------------------------insert----------------------------------


$query = "INSERT INTO users(name,uername,email,img,password_hash) ";
$query.="VALUES('{$name}','{$username}','{$email}','{$newname}','{$password_hash}')";
$result = mysqli_query($connect,$query);

if(mysqli_affected_rows($connect) > 0){


     move_uploaded_file($img_tmp, '/opt/lampp/htdocs/marwa/images/'.$newname);


	$_SESSION['success'] = "<div clasa='alert alert-success'> 
	<strong>SUCCESS</strong> TO SIGN UP PLEASE LOGIN NOW<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
                  </button></div>";

     redirect_to("index.php");

	mysqli_free_result($result);

}else{

	$_SESSION['error'] = "<div clasa='alert alert-danger'>failed to add new user<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
                  </button></div>"; 
	header("location:signup.php");
    exit;
}





}









}else{



	header("location:index.php");
	exit();


}







mysqli_close($connect);


}else{
		header("location:index.php");
	exit();

}


?>