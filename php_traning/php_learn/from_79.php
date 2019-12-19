<?php
                                    //[79] GLOBALS
/*

$age=20;

function madrid(){

 echo $GLOBALS['age'];                                 //if i want use this variable {$age} in the function

}madrid();
_____________________________________________________________________
                                                      //if i wnat use variable from function
function names(){

    $GLOBALS['yourname']="ahmed";

} 
names();

     echo $yourname;
*/
                                  //[80] server       [information about the server]


/*
<a href="<?php echo $_SERVER['PHP_SELF']; ? open </a>  //mean Go to the page where I work
         ______________________________

     echo $_SERVER['SERVER_ADDR'];       //mean echo my ip
___________________________
   //echo $_SERVER['SERVER_NAME']; 
_______________________________________
echo $_SERVER['QUERY_STRING'];     
       //mean echo all data from the link after [?] lik this [ http://localhostphp_learn/from_79.php?&madrd=%20name?&hala%20mdty=ok&bb=cc]
_______________________________________
*/
//echo $_SERVER['HTTP_REFERER'];

//echo $_SERVER['SERVER_PORT'];

//echo $_SERVER['DOCUMENT_ROOT'];

//echo $_SERVER['REQUEST_METHOD'];
                                              //[81]     get
/*
$var=array("ahmed","omar","hamada");

$vart=$_GET['username'];


if(in_array($vart,$var)){

echo "welcome to your page " . $_GET['username'];


}else {
	echo 'sorry your name and password error';
}

*/

/*

  $var=array("ahmed","mohamed","ibrahim");

  $varp= $_POST['username'];

  if(in_array($varp,$var)){

echo "welcome to our page mr: " , $_POST['username'];

  }else {
  	echo "sorry your name Not with us mr: " . $_POST['username'];
  }



echo $_SERVER['REQUEST_METHOD'];
*/
/*
?>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method='GET' />

<input type="text" name ="username">
<input type="submit" value='login'>

	</form>

<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){


echo $_REQUEST['username'];

}else {
	echo "sigin your name and password";
}

*/

   /*                                                //[84] cookie
setcookie("omar","test" ,time() + 3600, "/");

if(count($_COOKIE) > 0){

echo 'good';
}else {
	echo "not here";
}
echo count($_COOKIE);
*/

//setcookie("kkk",'uuuuu', time() + 86400,"/",TRUE,TRUE);
/*
echo "<pre>";
 print_r($_COOKIE);
 echo "</pre>";
*/

?>
<?php
setcookie("touser", "", time() - 86400, "/");
$color="#fff";

if($_SERVER['REQUEST_METHOD'] == "POST"){

 $color=$_POST['color'];

 setcookie("user",$color,time() + 86400 ,"/");

}

      if(isset($_COOKIE['user'])){

      	$var=$_COOKIE['user'];
      }else
     {
     	$var=$color;
     }


?>


<!DOCKTYPE html>
<html>
   <head>
   	<meta charset="UTF_8">
<title>my page </title>
</head>
<body style="background-color: <?php echo $var; ?>">
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
<input type="color" name="color">
<input type="submit" value="chose">

</form>
</body>


</html>

























