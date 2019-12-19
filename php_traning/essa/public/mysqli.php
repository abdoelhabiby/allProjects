<?php

$hostname="localhost";
$username='root';
$password="";
$dbname="pop";

$con=mysqli_connect($hostname,$username,$password,$dbname);

if(!$con){
die("ERROR NO: "  . mysqli_connect_errno()); 

}else{

echo "conected" . "<br>";
}

/*
 $query="SELECT * FROM client WHERE 1";

$result=mysqli_query($con,$query);

      echo  "all information the clients from clients table" . "<br>" .
            "_____________________________________" .  "<br>";

   if(mysqli_num_rows($result) > 0 )
{
		while($row=mysqli_fetch_assoc($result)){

			 echo 	
			      "id: " . $row['id'] 
                 . " -name: " . $row['name'] . " " 
                 . " -days: " . $row['days'] . " "
                 . " -salary: "  . $row['salary'] . " "
                 .  "<br>" .  "_____________________________________"
                  . "<br>";


		}


} else {
          echo "no records";
       }


  $id=11 ; 
     $lname= "israa";
     $dayss= 55;
     $salarys= 800;  


$fromdata= "INSERT INTO client"

//echo $database;


 if (mysqli_query($con,$database)){

 	echo "new record";
 }else {
 	echo mysqli_connect_error();
 }

*/



 mysqli_close($con);


?>
