<?php
       
                                        //[92] sleep 
/*
echo "welcome to my page you will see my exprince after 5 seconde" . "<br>";
sleep(2);

echo "no thing now :)";
________________________________
			 function chek(){

			if(file_exists('bale.txt')){

			 echo "yes here";


			}else{
			 
			sleep(3);

			 chek();
			  }
			}

			chek();




  ___________________________________
                       //usleep   if i want use micrssconde [The second has 1 million microseconds]
$var="hala";
echo $var;

	usleep(500000);
	echo " madrid";
 ________________________________

                 //time_sleep_until

 function chek(){

if(file_exists('bale.txt')){

 echo "yes here";


}else{
 
time_sleep_until(time() +5);

 chek();
  }
}

chek();
*/
                   //[93] 
                             //exit  or die {the same jop}         (@ => to hide the error)
/*
echo "madrid";

   die;
         echo "no";

_______________________________
   
     $var='omar.txt';
   @fopen($var,"r")
   or exit("sorry this file not here");
    
    echo "welcome to my page";
*/
                                  
                                  //uniqid  

/*  
 echo uniqid();

echo uniqid("last1_",true) . "<br>";  


echo uniqid("last2_");

*/

                          //flter

?>

<form action="from_99.php" method="POST">

<input type="txt" name="user">
<input type="submit" value="login">

	</form>






