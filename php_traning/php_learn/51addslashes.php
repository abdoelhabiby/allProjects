<?php
/*

  $var="i'm 'a' programer";

  echo $var . "<br>";

  $varsecu=addslashes($var);           // because tha sinlge cod['] can do some problem in the security and[\]also :: so i do this to skip it
   echo $varsecu . "<br>";



     //stripslashes   if i want output without this addslashes


    $varclean =stripslashes($varsecu);

    echo $varclean . "<br>";

                                           //strip_tags  [to remove any tags] and i can select any tag to comblet



    $tag= "<h2>to learn php go to</h2> <a herf='php.net'>PHP.NET</a> <b>hala madrid</b>";

    echo $tag . "</br>";
$vartag=strip_tags($tag,"<h2>");

echo $vartag;  */
/*

 $var="HALA MADRID FOR EVER";

 $lower=strtolower($var);           //to output (small)
 echo $lower . "<br>" ;


 $var2 ="my name is abdoo";


 $upper=strtoupper($var2);   //to output captial
 echo $upper;

*/
/*

 $var= "HALA MADRID";

 $varlc=lcfirst($var);                          //outpout the first character small

 echo $varlc . "<br>";

 $var1 ="hala madrid";

$varuc=ucfirst($var1);                  //output the first character capital
echo $varuc  . "<br>";



$var3= "hal madrid for ever";

$varucw=ucwords($var3);            // outpout the first character capital from any words
   
echo $varucw .  "<br>";


                                  */

                 // [53]trim
/*


  $var = " \x0B hala madrid  ";
  echo var_dump($var)  . "<br>";


  $vart = rtrim($var);

  echo var_dump($vart) . "<br>";

 

 $varde ="hala madrid for ever";

 echo $varde  . "<br>";


 $vardelet =rtrim($varde,"hala ma er");

 echo $vardelet;


 */                                              // [54]str_word_count


 $var ="hala madrid & for ever";
echo $var . "<br>";
 /*
 $varcount=str_word_count($var);        
 echo $varcount;
*/

                  //if i want echo by array[indexed] i put [1]

 $vararr=str_word_count($var,1);

 echo "<pre>";
 print_r($vararr);
 echo "</pre>" . "<br>";
                                 
                  //if i want echo by array[associative] i put [2]

 $vararr=str_word_count($var,2);

 echo "<pre>";
 print_r($vararr);
 echo "</pre>";

                              //he dont echo [& or any same this] if i want echo this i used it



$vararr=str_word_count($var,2,"&");

 echo "<pre>";
 print_r($vararr);
 echo "</pre>" . "<br>";





  $var ="i love & fotball";
  $varc =str_word_count($var, 2, "&");
   echo "<pre>";
   print_r($varc);

   echo "</pre>";