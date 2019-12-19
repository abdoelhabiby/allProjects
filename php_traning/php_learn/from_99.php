<?php
/*
                    //[99] date
//echo date_default_timezone_get();   /place the server and The time is the same as their time


          //so to Modification i use the next 
                                
 date_default_timezone_set("africa/cairo") . "<br>";              //all timezone on {list timezone php.net} all

$var= time() + (10 * 24 * 60 * 60);

echo date("Y-M-D h:i:s" , $var);
______________________________________________

echo date("l d F Y \of h:i:s:a") . "<br>";

echo date("j") ;

_________________________________________________
$var= time() + (180 * 24 * 60 * 60);

echo "hi 7iwan after 6 month from nowe the date will be " . date("l d F Y \& h:i:s:a ", $var) . "and this date will be not happy hhhhhhh deep web ya reaaa";

*/

                                                          //strtotime               //beterr than [  time() + ] 


/*
$var=strtotime('now', time() - 3600);                //optin [2] mean echo before 1 hour 

echo date("Y m d h:i:s" , $var);

*/

/*
$var=strtotime("last week");                               //dayes or months or weeks or hours or years or [next day or month or year or 
                                                                     //last year or last friday .........

echo date("l d F Y H:i:s:a",$var);

*/

/*
$var=  strtotime("+2 years 2 months 3 day 2 hours");
  echo date("Y m d H:i:s:a", $var);
*/


/*
$var=strtotime("+2 year 3 month 20 day 10 hours");

echo date("d/m/Y  H:i:s:a", $var);

echo "<br>";

$rr=strtotime("last day" , time() - 7200);
echo date("d m Y H:i:s:a" ,$rr);

*/

/*
    error_reporting(0);

$var="madr";
echo $varee;

*/


function nad($name , $age){


 echo "welcome mr:" . $name . " how are you" . "<br>";
 echo "your age is " . $age . " and ssorry you are virey old";


}
echo "<h3>the 1 </h3>";
nad("man",20) ;

echo "<br>";
echo "<br>" . "<h4>the 2</h4>" ;
nad("sayed",20);