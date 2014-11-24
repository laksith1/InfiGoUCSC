<?php

 require_once("./connect.php");
 
$title=$_POST["title"];
$type=$_POST["type"];
$upload=$_POST["upload"];
$current_date = date("Y-m-d H:i:s");
 
 
$query = "INSERT INTO article(title, category, status, received_date, text) 
VALUES
('$title', '$type', '$upload', '$current_date' ,'" . mysql_real_escape_string($_POST['editor']) . "')";
 
$result = mysql_query($query);
if(!$result) {
echo ( mysql_error());
exit;
}
else{
$mess="You have successfully uploaded article..!</center></h3>";
}
 
 

 
  /*$sql = "INSERT INTO article(text) VALUES( '" . mysql_real_escape_string($_POST['editor']) . "');";
  $queryResource = mysql_query($sql) or die(mysql_error());
  $mess="You have successfully uploaded article..!</center></h3>";
*/
?>
<html>
<head><title></title>
<style type="text/css">

body {
    background:url(../Infigo/index/v.jpg) ;

}

input[type=button] 
{padding:3px; border:3px solid green; 
border-radius: 7px;
}



</style>

</head>
<body>
<a href="../pro/profile.html"><input type="button" value="Back"></a>
<h2><center><?php echo $mess ?></center></h2>
</body>
</html>
