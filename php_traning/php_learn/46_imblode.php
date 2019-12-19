<?php


/*
$var =array("ahmed", "mahmoud", "hamada", "ibrahim");

echo "<pre>";
 print_r($var) . "</br>";
 echo "</pre>";


  $variabule=implode(" & ", $var);

  echo "we have in our family " . $variabule;

                                                

$var="i learn php this time";

$vari=str_split($var, 4);

echo "<pre>";
print_r($vari);
echo "</pre>";

                                        //chunk_split :: 


$var= "go to real madrid";
echo $var . "<br>";


$real=chunk_split($var,3, " && ");

echo $real;
*/

                                                    //str_replace

/*

$sreal ="i love tea because tea is perfect";

echo $sreal . "</br>";


$var= explode(" ", $sreal);

echo "<pre>";
print_r($var);
echo "</pre>";

  $sreal = str_replace("tea","coffe",$var);

  echo "<pre>";

   print_r($sreal);
   echo "</pre>";


    $real=implode("__", $sreal);

    echo $real . "<br>";


      $sreal = str_replace("coffe","pepsi",$real);

      echo $sreal . "<br>";

$frind =str_replace("pepsi","tea",$sreal);

echo $frind . "<br>" . "hala madrid";
 

*/
      /*

       $varstr= "hala_madrid=he_nadmas=madrid*hala=madrid";

       echo $varstr . "<br>";

       $varstr=str_replace(array("_","*","="),array(",,","+","??"),$varstr);


       echo $varstr . "<br>";
*/
/*
       $real ="messi and leo and posk play in real madrid";

 echo $real . "<br>";


 $var=array("messi", "leo", "posk");
$var2 = array("bale","benz","luc");
 $var1=str_replace($var, $var2, $real);

 echo $var1 . "<br>";


   $new="bale\n benz\n\r isco\n ";
   echo $new;                           */


   $name ="benzema" . "</br>";
$var=str_repeat($name,10);

   echo $var . "<br>";


    $cr7="omar";

    $bale=str_shuffle($cr7);      // mix random letters
    echo $bale . "<br>";



    $vare="omar kareem";

    $varlen=strlen($vare);

    echo $varlen . "<br>";


    if($varlen < 5){
    	echo "yeas";
    }else{
    	echo "no";
    }