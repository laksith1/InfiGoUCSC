<?php 


$server="localhost";
$user_name="root";
$password="";
$db="infigo";

$con=mysql_connect($server, $user_name, $password, $db) or die ("cann't connect to the server");
mysql_select_db($db,$con) or die ("cann't connect to the database");


?>