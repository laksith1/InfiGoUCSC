
<?php


session_start();

if (isset($_POST["submit"])){


require_once("./connect.php");  
//============================================getting value for loggin============================================================//


$name=$_POST["name"]; // email is received as name//
$enc=md5($_POST["password"]);
$pass=substr($enc,0,30);



$_SESSION["query"]=$name;
$_SESSION["query2"]=$pass;

//=========================================Admin login checking===================================================================//

$query="SELECT email FROM admin WHERE email = '$name' AND password='$pass'";
		
$result=mysql_query($query);
if (!$result){
print(mysql_error());
exit;
}
$array=mysql_fetch_array($result);
$user=$array["email"];


$row=mysql_num_rows($result);
if ($row==1){
$_SESSION["admin"]=$user;
header("Location:../admin/index.php");
exit;}


if ($row !=1){


$name=$_SESSION["query"];
$pass=$_SESSION["query2"];
//================================================CE login checking================================================================//

$query="SELECT email FROM chief_editor WHERE email = '$name' AND password='$pass'";
		
$result=mysql_query($query);
if (!$result){
print(mysql_error());
exit;
}
$array=mysql_fetch_array($result);

$user=$array["email"];

$row=mysql_num_rows($result);

if ($row==1){
$_SESSION["chief_editor"]=$user;
header("Location:../admin/index.php");

exit;}

}

if ($row !=1){

$name=$_SESSION["query"];
$pass=$_SESSION["query2"];
//===============================data entry login checking=======================================================================//

$query="SELECT email FROM data_entry WHERE email = '$name' AND password='$pass'";
		
$result=mysql_query($query);
if (!$result){
print(mysql_error());
exit;
}
$array=mysql_fetch_array($result);

$user=$array["email"];
$row=mysql_num_rows($result);

if ($row==1){
$_SESSION["data_entry"]=$user;
header("Location:../admin/index.php");
exit;}

}

if ($row !=1){

$name=$_SESSION["query"];
$pass=$_SESSION["query2"];

//======================================Editors login checking=====================================================================//

$query="SELECT email FROM editors WHERE email = '$name' AND password='$pass'";
		
$result=mysql_query($query);
if (!$result){
print(mysql_error());
exit;
}
$array=mysql_fetch_array($result);

$user=$array["email"];
$row=mysql_num_rows($result);
if ($row==1){
$_SESSION["editor"]=$user;
header("Location:../admin/index.php");

exit;}

}
if ($row !=1){

$name=$_SESSION["query"];
$pass=$_SESSION["query2"];
//==================================contributors login checking==================================================================//

$query="SELECT email FROM contributors WHERE email = '$name' AND password='$pass'";
		
$result=mysql_query($query);
if (!$result){
print(mysql_error());
exit;
}
$array=mysql_fetch_array($result);
$user=$array["email"];

$row=mysql_num_rows($result);
if ($row==1){
$_SESSION["contributor"]=$user;
header("Location:../contributor/index.php");

exit;}

}
if ($row !=1){
        echo ('<script type="text/javascript">
				alert("Invalid E-mail or Password")
				window.location= "../login.php"
				</script>');
exit;}

}

/*
history.go(-1)
$key = 'password to (en/de)crypt';
$string = 'string to be encrypted';

$encrypted = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $string, MCRYPT_MODE_CBC, md5(md5($key))));
$decrypted = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode($encrypted), MCRYPT_MODE_CBC, md5(md5($key))), "\0");

var_dump($encrypted);
var_dump($decrypted);
*/
?>
