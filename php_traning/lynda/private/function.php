<?php

ob_start();

session_start();







require_once "connect.php";


function error_404(){
  
  header($_SERVER['SERVER_PROTOCOL'] . "404 NOT FOUND");
  exit;

}


function error_500(){
  
  header($_SERVER['SERVER_PROTOCOL'] . "500 INTERNAL SERVER ERROR");
  exit;

}


//----------------------------------------------

function redirect_to($location){
  
  header("Location:" .$location);
  exit();

}


//------------------------------------------------


function h($funco){
   
   return htmlspecialchars($funco);

}

//----------------------------------------

function MRES($mys){
   
   global $connect;
  return $mys = mysqli_real_escape_string($connect,$mys);

}


function u($urli){

  return urlencode($urli);
}

//----------------------------------------------------------

 function checkname($input){
   $input = trim($input);
   $input = strip_tags($input);
   $input = addslashes($input);
   $input = h($input);
   return $input;
 }


//-----------------------------------this functions to admins----------------------------

function checkempty($input,$url){


if(strlen($input) == ''){

  $_SESSION['empty']= '
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                   <strong>FAILED!</strong>  THE FAILED MUST NO BE EMPTY
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                  </div>';
  redirect_to($url);  } }



function checklenght($input,$url){


if(strlen($input) < 3 || strlen($input) > 15){

  $_SESSION['chars']= '
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                   <strong>FAILED!</strong>  the chasr must be big than 2 and less than 15
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                  </div>';
  redirect_to($url);  } }


function checklenghtu($input,$url){


if(strlen($input) < 5 || strlen($input) > 15){

  $_SESSION['charsu']= '
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                   <strong>FAILED!</strong>  the chasr must be big than 5 and less than 15
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                  </div>';
  redirect_to($url); 
   } }


function checklenpa($input,$url){

 if(strlen($input) < 9){

  $_SESSION['charpass']= '
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                   <strong>FAILED!</strong>  the chasr must be big than 8 
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                  </div>';
  redirect_to($url); 
   }


}



function confirm_pass($pass1,$pass2,$url){

  if($pass1 !== $pass2){
 $_SESSION['passerr']= '
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                   <strong>FAILED!</strong>  THE PASSWORD NOT SAME CONFIRM PASSWORD
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                  </div>';
  redirect_to($url);


  }
}


//----------------------------------------------------------------------------------------------


function thesession($s_key){

    $_SESSION['user'] = $s_key['username'];
    $_SESSION['user_id'] = $s_key['id'];

    redirect_to('index.php');

}



?>