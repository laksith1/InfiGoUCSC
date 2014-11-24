<?php

require_once("./connect.php"); 


$query="SELECT text FROM article

ORDER BY id DESC LIMIT 1;";
		
$result=mysql_query($query);
if (!$result){
print(mysql_error());
exit;
}


$row=mysql_fetch_row($result);
echo $row[0];



?>

