<?php 

session_start();



function msg(){

if(isset($_SESSION['msg'])){
 $mmsg=$_SESSION['msg'];
 return $mmsg;

 $_SESSION['msg']=null;
 return $mmsg;
 
}}



function err(){

if(isset($_SESSION['errors'])){
 $mmsg=$_SESSION['errors'];
 return $mmsg;

 $_SESSION['errors']=null;
 return $mmsg;
 

}}


?>