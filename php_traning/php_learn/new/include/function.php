<?php 

function page(){

global $page_title;

if(isset($page_title)){
	return $page_title;
}else{
	return 'default';
} 
}


function checkinput($the_input){
 
 $the_input = str_replace("-", "", $the_input);
 $the_input = stripslashes($the_input);
 $the_input = trim($the_input);
 $the_input = strip_tags($the_input);
 
 return $the_input;

}



function mres($tovalidate){

	$tovalidate = mysqli_real_escape_string($connect,$tovalidate);
	
	return $tovalidate;
}


//==============================================get count members ========================================


function all($count){
 global $connect;

 $sql = "SELECT '{$count}' FROM users";
 $result = mysqli_query($connect,$sql);

  if(mysqli_affected_rows($connect) && mysqli_num_rows($result) > 0){

	$counts = mysqli_num_rows($result);

	return $counts;
 }else{
	return "0";
 }
}



//============================================= end get count members ========================================

//============================================= get count pending ========================================


function pending(){
 global $connect;

 $sql = "SELECT regstatus FROM users WHERE regstatus = 0";
 $result = mysqli_query($connect,$sql);

  if(mysqli_affected_rows($connect) && mysqli_num_rows($result) > 0){

	$counts = mysqli_num_rows($result);

	return $counts;
 }else{
	return "0";
 }
}








?>