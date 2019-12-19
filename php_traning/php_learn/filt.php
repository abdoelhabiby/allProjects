<?php

/*

      $var= $_POST['user'];
echo filter_var($var,FILTER_SANITIZE_STRING);
*/
      //FILTER_VALIDATE_EMAIL
/*
 $var= $_POST['user'];
 if(filter_var($var,FILTER_VALIDATE_EMAIL) == TRUE){

 	echo "your [" . $var . "] is email";
 }else{


 	echo "your [". $_POST['user'] . "] is not email so you cant continue";
 }
*/
             //FILTER_VALIDATE_INT
/*
$var=$_POST['user'];

if(filter_var($var,FILTER_VALIDATE_INT) ==TRUE){

	echo "yes [" . $_POST['user'] . "] is integr";
}else{
	echo "no[" . $_POST['user'] . "]is not integer";
}
*/
             //FILTER_VALIDATE_IP
/*
$var= $_POST['user'];

if(filter_var($var,FILTER_VALIDATE_IP) == TRUE){

	echo "yes this ip: " . $var . "true";
}else {
	echo "thisip: " . $var . "not true";
}
*/
     //FILTER_VALIDATE_URL
/*
$var=$_POST['user'];

if(filter_var($var,FILTER_VALIDATE_URL) == TRUE){

	echo "yes";
}else{
	echo "this not link";
}
*/

/*
$var=$_POST['user'];
                      
                                                                          //or FILTER_FLAG_IPV6               
if(filter_var($var,FILTER_VALIDATE_IP,FILTER_FLAG_IPV4) == TRUE){

echo "your ip[". $var . "] iss good";

}else{
	echo "your ip[" . $var . "] is wrong";
}
*/
/*
$var=$_POST['user'];

$opt=array("options" => array("min_range" => 1,"max_range" => 900)

	//  ,flag [if i write flage here]

);

if(filter_var($var,FILTER_VALIDATE_INT,$opt) == TRUE){


echo "yes your int [" . $var . "] from 1 to 900";

}else{
	echo "sorry your int [" . $var . "] not from 1 to 900";
}

*/

          //FILTER_SANITIZE_NUMBER_INT      {mean delete anything without integer}


/*
$var=$_POST['user'];


$filt=filter_var($var,FILTER_SANITIZE_NUMBER_INT);

echo $filt;

*/

                   //FILTER_SANITIZE_EMAIL     [mean Remove all characters except letters, digits and !#$%&'*+-=?^_`{|}~@.[].]
/*
$var=$_POST['user'];

$filt=filter_var($var,FILTER_SANITIZE_EMAIL);

echo $filt;
*/


                          //simple traning



?>
 
 <form action='<?php echo $_SERVER["PHP_SELF"]; ?>' method="POST">

<input type='txt' name='user'>
<input type="submit" value ="login">

 </form>


<?php

/*
$var= @ $_POST['user'] or exit ("enter your ip please ya 7iwan");


/*
$filt=filter_var($var,FILTER_SANITIZE_NUMBER_INT);

$arrayint=array("options" => array("min_range" => 1, 'max_range' => 200));



		if(filter_var($filt,FILTER_VALIDATE_INT,$arrayint) == TRUE){

		echo "yes your int is [" . $filt . "] after sanitize and between 1 to 200";

		}else {
			echo "sorry your int is [" . $filt . "] not betwwen 1 to 200";
		}

*/
/*

	if	(filter_var($var,FILTER_VALIDATE_IP,FILTER_FLAG_IPV6) !== FALSE){


 echo "yes this ip [" . $var . "] ipv6";

} else{
	echo 'sorry this ip [' . $var . "]not ipv6"; 
}

*/
 $var=$_POST['user'];

echo filter_var($var ,FILTER_SANITIZE_STRING);



