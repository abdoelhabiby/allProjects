<?php
/*
$pass='omar';
$salt=md5(uniqid(rand(),true));
$pass_salt=$pass . $salt;

echo $pass_salt;
echo "<br><br><br>";


$option=[
'cost'=> 12,];

 $hashpass=password_hash($pass_salt,CRYPT_BLOWFISH,$option)."\n";

echo $hashpass;
echo "<br>";
echo strlen($hashpass) . "<br>";


$hash='$2y$12$G1SBk3BtYF1SZ6T/l.AFn.SP1J2PcLxGYux5nNBIoUuILxmV25p7S';

if(password_verify($pass_salt,$hash)){
	echo "yes";
}else{
	echo "no";
}


*/



/*
$option=[
'cost'=> 12,];


$default=password_hash("ronaldo",CRYPT_BLOWFISH,$option)."\n";
echo $default . "<br> <br>";


echo strlen($default). "<br>";


$hash='$2y$12$t4UiHJLLVdxzRySXxCK.r.OoEjYAm/iTzqYgX5TFuXqPyIKbg6YBm';

if(password_verify("ronaldo",$hash)){

	echo "yes";
}else{
	echo "no";
}

*/


include_once 'conected-db.php';
include_once 'session.php';


$query="SELECT username,password from admins";
$result=mysqli_query($connect,$query);

$key=mysqli_fetch_assoc($result);
echo $key['password'];



?>


