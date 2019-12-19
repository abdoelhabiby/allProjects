<?php

include_once 'session.php';


$_SESSION['user']=null;
$_SESSION['id_user']=null;

header("location:login.php");


