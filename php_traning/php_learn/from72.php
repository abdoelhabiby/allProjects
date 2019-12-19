<?php 
                                         //unlink        {to remove file}

    //unlink('page.txt');                                  
/*
$var ="page.txt";

if(file_exists($var) && is_writable($var)){
echo "here and f5 to delete";

unlink($var);

}else{
         echo "not here and do f5 to creat or to be writable";	
	file_put_contents($var,'is writable');
	chmod($var,0755);
}

*/                                      //scandir

/*
$vart =__dir__ . '/inc';
$vare =scandir(__dir__ . '/inc');
echo "<pre>";
print_r($vare);
echo "</pre>";

       */

/*   $var=__dir__ . "/inc";

   $var1=scandir($var,SCANDIR_SORT_DESCENDING);

   echo "<pre>";
   print_r($var1);
   echo "</pre>";
*/

/*
foreach($vare as $varu){

if(is_file($vart . '/' . $varu)){
	echo "yes";
	unlink($vart . '/' . $varu);
}else{
	echo 'no';
}

}     */

                         //[74] fopen
/*
fopen('pages.txt',"r"); //ready to read just
fopen("pages.txt","r+"); // ready to read and write  {and the file just be exist}
_____________________________________

	fopen("page.txt","w");   //ready to write only     {and Create a file if it does not exist} and remove the data
	fopen("page.txt","w+");  //ready to write and read {and Create a file if it does not exist} and remove the data
	______________________________________

 //fopen("page.txt",'a');     //ready to write only     {and Create a file if it does not exist} without remove the data
 fopen("page.txt",'a+');     //ready to write and read  {and Create a file if it does not exist} and remove the data
_______________________________________

	fopen("page.txt","x");  //write only       [and creat a new file + file must be exist or give error]
	fopen("name.txt","x+")  //write and read   [and creat a new file + file must be exist or give error]
*/
                 
   /*                                           //[75] fread

$var= fopen("page.txt",'r');

$var2=fread($var,32);
echo $var2;

//$fast =fread($var,filesize('page.txt'))
*/
    /*                                           //[76]fwrite
$var=fopen('page.txt',"r+");

$vart=fread($var,filesize("page.txt"));
echo $vart;

$varf=fwrite($var,"welcomy to mt page hala bekom");
________________________________________________
   $var=fopen("pages.txt","a+");
   
   fwrite($var,"madrid",3);  // [3] mean write firts 3 character just
____________________________________________

*/

                                               //[77]fseek
/*
$var=fopen("page.txt","r+");

fseek($var,3,SEEK_SET);         //or fseek($var,3); same {SEEK_SET}  

fwrite($var,"c");

fseek($var,11,SEEK_CUR);
fwrite($var,"ag");
_______________________________

  $var=fopen("page.txt","r+");

  fseek($var,-6,SEEK_END);
  fwrite($var,"y ");
_______________________________________________
                                //fclose
$var =fopen('page.txt','r+');

fseek($var,-1,SEEK_END);
fwrite($var,"o");
fclose($var);
*/

  $var=fopen('page.txt',"r+");
  fseek($var,-5,SEEK_END);
  fwrite($var,'dr');

