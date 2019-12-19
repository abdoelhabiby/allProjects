<?php
                                   //dirname

//echo dirname(__file__);
//require "c:/xampp/htdocs/inc/hh.php";

//include dirname(__file__) . '/../inc/hh.php';

 
//  require "/../dirname/cc.php";
   
                                                      //basename      (to echo just name the file without the path)


/*echo basename(__file__,".php");                                         //[.php] to remove this (.php)


 if(basename(__file__,'.php') === 'from66'){
 	echo 'yes';

 }else {
 	echo "no";
 }
*/
        /*      

   if(file_exists(__dir__ . '/incff')){

   	echo 'yes here';
   }else {
   	echo 'not here';
   	mkdir(__dir__ . "/incff");
   }

    $varsave = __dir__ . '/incff/';
    
    file_put_contents($varsave . 'bale.php',"hala bale");

    $thefile= $varsave . 'bale.php';
      
    if (is_writable($thefile)){

     chmod($thefile,0444);

    }else{

    	chmod($thefile,0755);
    	file_put_contents($thefile,'<?php echo"yes he is writable",') ;
    }

echo "<br>";
    include 'incff/bale.php';
                                 */

                                      //file_put_contents                   //to add the file

  //  file_Put_contents('page.txt'," welcome welcome hhh ",FILE_APPEND | LOCK_EX);


                                    //file_get_contents                     //tp get from the file

//echo file_get_contents('name.txt', false, null,5,10);

                                                        //copy  [to copy file in new file]

/*  copy('name.txt',"page.txt");

$var=__file__;

copy($var,$var .  'hhh.txt');

*/

        /*
if(!copy('name.txt',"mad.php")){

	echo ' not copy it before';
}else{
	echo "copy it before";
}

   */

//copy(__file__,__dir__ . '/inc/phhs.txt');
                                                    //rename  

//rename('welcome.txt',"page.txt");


                             // [71]pathinfo
/*
$varp=pathinfo(__file__);

echo "<pre>";
 print_r($varp);
echo "</pre>";
*/
/*
 $vare=pathinfo(__file__,PATHINFO_DIRNAME);         //THIS MEAN ECHO DIRNAMEJUST
echo $vare;
*/

/*
$var = pathinfo(__file__);

echo $var['extension'] . "<br />";
echo $var['dirname'] . "<br />";
echo $var['basename'] . "<br />";
echo $var['filename'] . "<br />";

*/

 $var=pathinfo(__file__);

 if($var['dirname'] == 'C:\xampp\htdocs\php_learn'){
 	echo "yes";
 }else {
 	echo "no";
 }


echo dirname(__file__);