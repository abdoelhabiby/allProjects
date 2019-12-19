<?php 


$errors=array();










function checkInput($data){

$data=str_replace("-"," ", $data);
$data=trim($data);
$data=strip_tags($data);
return $data;

}



	function checkEmpty($data){


		$data=trim($data);

	if(isset($data) === true && $data === ''){
   global $errors;
	
	   $errors['empty']= "the input empty!";

	}else{
		return $data;
	} }



		function check_length($data,$max,$min){

		 global $errors;
		if(strlen($data) > $max){

			$errors['long_chars']="the count chars biger than 20";
		}elseif($data < $min){
		$errors['short_chars']="the count chars smal than 4";
		}else {
			return $data;
		} }


function errorFunction($errors=array()){

foreach($errors as $key => $value){

  echo $key . " = " . $value . "<br />";
}

}

errorFunction($errors);
    





?>