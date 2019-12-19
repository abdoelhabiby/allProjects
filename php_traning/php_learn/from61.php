<?php
                                         //include
/*
include "inclode.php";
    echo "<br>" . "cr7";

include_once "inclode.php";      
                                     //[include_once] to use this just[1] in this file

*/

                                           //require  this beter than include because  If the [file] does not exist
                                             // i cant echo any thing after this 
/*
require "inclode.php";

require_once "inclode.php";             

include_once "51addslashes.php";

*/
                                       
                                         //switch      [like if]
/*

$var ="real";

switch($var){

	case "real":
	case "real m":
	echo "hala real";
	break;

		case "real":
		echo "hala madrid";
		break;

			case "barcelona":
			echo "hala tahkem";
			break;

	 default:
	echo "go to parise";
}

*/
                                                        
                                                          // file_exists

 // echo dirname(__file__);    to know the path 
/*

$var='C:\xampp\htdocs\php_learn\omar.txt';

if(file_exists($var)){

	echo "yes";
}else {
	echo "no";
}


                                                   //if i wnat add in this file  


$var ='C:\xampp\htdocs\php_learn\omars.txt';

if(file_exists($var)){
	echo 'yes here';
	file_put_contents($var,'cr7');

}else {
	echo "not here";
 file_put_contents($var,"hala madrid");       //add this fle in the pass and add this ["hala madrid"]
}
          */

                        //fle_writable
/*
$var='omar.txt';

 if(is_writable($var)){

 	echo 'yes this file [' . $var . ']is writable';

 	file_put_content($var,'dfghg');                     //if i want add anything to this file

 }else{

 	echo 'no this file [' . $var . '] is not writable';
 }
    */
                         // [mkdir] to make folder  [rmdir]to remove folder [is_dir] to serch

/*
$var='omar';

if(is_dir($var)){

	rmdir($var);
	echo 'removed it';
}else{

	mkdir($var);
	echo 'created it';
}


     $var='hamda';

     mkdir($var);
     echo 'yes';
*/

  
     $var='sayed';

     if(is_dir($var)){
           rmdir($var);
     	echo 'yes this folder [' . $var . '] is here and remove ';
     }else{
    mkdir($var);
  echo 'he wasn\'t here this folder [' . $var . '] and created it';



     }