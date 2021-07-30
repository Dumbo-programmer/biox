<?php

$username="root";  
$password="fC84d3dIawW5@V*p";  
$hostname = "localhost";  
$dbhandle = mysqli_connect($hostname, $username, $password) or die("unable to connect to database")
//mysqli_select_db('biobook',mysqli_connect($hostname,$username,$password))or die(mysql_error());
$selected = mysqli_select_db($dbhandle, "biobook")or die(mysqli_error());
?>
