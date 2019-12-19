
<?php
/*
$sdn='mysql:host=localhost;dbname=real madrid';
$user='root';
$pass="";
$opt=array(

PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8',

);


try {

$db= new PDO($sdn,$user,$pass,$opt);

$db->setattribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$f="INSERT INTO items (id, name) VALUES (11, 'مدريد')";

$db->exec($f);

 echo "you are concted";




} 
catch(PDOexception $r){


echo 'faild ' . $r->getmessage();


}

*/

/*
$sdn='mysql:host=localhost;dbname=real madrid';

$user='root';
$pass='';
$opt=array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",);




try{

$db=new PDO($sdn,$user,$pass,$opt);

$db->setattribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$f='INSERT INTO items(id,name) VALUES (10,"madrid")';
$db->exec($f);

echo "you are concted";


} catch(PDOexception $y){


echo "faild " . $y->getmessage(); 

*/


