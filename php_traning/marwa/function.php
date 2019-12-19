<?php
ob_start();

session_start();

$errors = array();

//--------------------------------------------------------------------------------

function h($input){

	return htmlspecialchars($input);
}


function u($input){

	return urlencode($input);

}

//-------------------------------checkinput------------------------------------------


function checkinput($input){
$input = trim($input);
$input = strip_tags($input);
$input = htmlspecialchars($input);
$input = stripslashes($input);
return $input;

}

//-------------------------------MRES------------------------------------------


function MRES($input){
  
  global $connect;

  return $input = mysqli_real_escape_string($connect,$input);


}

//-----------------------------chempty--------------------------------------------


function chempty($input){

 global $errors;
 if($input == ''){ $errors[] = "<div class='alert alert-danger'>The Faileds Must Not Be Empty<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
                  </button></div>"; } 
 
 }

//-------------------------------checklen------------------------------------------



function checklen($input){
	    global $errors;
	    if(strlen($input) < 4){ $errors[] = "<div class='alert alert-danger'>this character must not be less than 4 !!!<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
                  </button></div>"; }
	    if(strlen($input) > 20){ $errors[] = "<div class='alert alert-danger'>this character must not be big than 20 !!!<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
                  </button></div>"; }

}



//-------------------------------password------------------------------------------


function passlen($pass){
 global $errors;

 if(strlen($pass) < 8){
 	$errors[] = "<div class='alert alert-danger'>Sorry The PAss must be big than 8<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
                  </button></div>";
 }



}


function confirm_pass($pass1,$pass2){
		    global $errors;


	if($pass1 !== $pass2){
		$errors[] = "<div class='alert alert-danger'>The Password Not equal confirm password<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
                  </button></div>";
	}
}



//--------------------------------------------------------------------------------


 function displayerror($errors){
    
    if(!empty($errors)){
    	foreach ($errors as $value) {
    		return $value . "<br>";
    	}
    }
 }

//--------------------------------------------------------------------


 function redirect_to($url){
 	
 	header("location:".$url);
 	exit;
 }






?>