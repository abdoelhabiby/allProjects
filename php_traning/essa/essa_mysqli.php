<?php

$hostname="localhost";
$username='root';
$password="";
$dbname="pop";

$con=mysqli_connect($hostname,$username,$password,$dbname);

if(!$con){
die("ERROR NO: "  . mysqli_connect_errno()); 

}else{

//echo "conected" . "<br>";
}


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


  $id= 12; 
   $lname="zaher's dodqe";
   $lname2=mysqli_real_escape_string($con,$lname);
   $lday=225;
   $lsalary=54;


$fromdata="DELETE FROM client WHERE id in(11,12)";
//echo $fromdata;


 if (mysqli_query($con,$fromdata) && mysqli_affected_rows($con) > 0){

  echo "updated successfuly: " . mysqli_affected_rows($con); 
 }else {
  echo "updated not successfuly: " . mysqli_connect_errno($con);
 }





 mysqli_close($con);


?>
