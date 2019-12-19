<?php

session_start();


function page(){
 echo 'Login';}


 

include 'include/header.php';

if(isset($_SESSION['error_user'])){

	echo $_SESSION['error_user'];

	unset($_SESSION['error_user']);

}elseif(isset($_SESSION['error_pass'])){

	echo $_SESSION['error_pass'];

	unset($_SESSION['error_pass']);
}


?>


<h1 class="thetitle">Login</h1>

<form class="login" action="<?php echo urldecode('login_submit.php')?>" method='POST'>
<input type="text" name="username" required autocomplete="off" placeholder="username" class="inputs" id="input1">
<input type="password" name="password" autocomplete="new-password" class="inputs" required placeholder="password" id="input2">
	<input type="submit" name="submit" value="login" class="submit">
</form>


<?php
include 'include/footer2.php';
?>