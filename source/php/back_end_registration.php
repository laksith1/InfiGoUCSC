<?php
session_start();

if(!isset($_SESSION["admin"])){
echo "<a href=./index/fl.php><input type=button value=HOME></a>";
echo "<h2></center>Unauthorized Access..!</center></h2>";
exit;

}


if (isset($_POST["submit"])){


require_once("./connect.php");  

//===========================================================Admin register======================================================//

if(isset($_POST["utype"])){
$type=$_POST["utype"];

if ($type=="admin"){

if(isset($_POST["mail"])){
$em=$_POST["mail"];

$q1="SELECT email From admin WHERE email='$em'";

$res=mysql_query($q1);

if (!$res){
echo(mysql_error()); }

$E=mysql_num_rows($res);
if ($E!=0){
        echo ('<script type="text/javascript">
				alert("Email is already taken. try again")
				window.location= ""../admin/add_users.php"
				</script>');
exit;
}
}

$fname=$_POST["fname"];
$lname=$_POST["lname"];
$mail=$_POST["mail"];
$tp=$_POST["tp"];
$uname=$_POST["uname"];
$pass=md5($_POST["password"]);

$query="INSERT INTO admin(first_name, last_name, email, tp, user_name, password)
VALUES
('$fname', '$lname', '$mail', '$tp', '$uname', '$pass')";

$result=mysql_query($query);

if (!$result){
echo (mysql_error());
exit;
}
echo ('<script type="text/javascript">
				alert("You have successfully registerd as Admin")
				window.location= "../admin/add_users.php"
				</script>');
exit;

}

//===============================================================CE register===================================================//


if ($type=="ceditor"){


if(isset($_POST["mail"])){
$em=$_POST["mail"];

$q1="SELECT email From chief_editor WHERE email='$em'";

$res=mysql_query($q1);

if (!$res){
echo(mysql_error()); }

$E=mysql_num_rows($res);
if ($E!=0){
        echo ('<script type="text/javascript">
				alert("Email is already taken. try again")
				window.location= "../admin/add_users.php"
				</script>');
exit;
}
}

$fname=$_POST["fname"];
$lname=$_POST["lname"];
$mail=$_POST["mail"];
$tp=$_POST["tp"];
$uname=$_POST["uname"];
$pass=md5($_POST["password"]);

$query="INSERT INTO chief_editor (first_name, last_name, email, tp, user_name, password)
VALUES
('$fname', '$lname', '$mail', '$tp', '$uname', '$pass')";

$result=mysql_query($query);

if (!$result){
echo (mysql_error());
exit;
}
echo ('<script type="text/javascript">
				alert("You have successfully registerd as Chief Editor")
				window.location= "../admin/add_users.php"
				</script>');
exit;

}

//==============================================Editor register==================================================================//


if ($type=="editor"){

if(isset($_POST["mail"])){
$em=$_POST["mail"];

$q1="SELECT email From editors WHERE email='$em'";

$res=mysql_query($q1);

if (!$res){
echo(mysql_error()); }

$E=mysql_num_rows($res);
if ($E!=0){
        echo ('<script type="text/javascript">
				alert("Email is already taken. try again")
				window.location= "../admin/add_users.php"
				</script>');
exit;
}
}

$fname=$_POST["fname"];
$lname=$_POST["lname"];
$mail=$_POST["mail"];
$tp=$_POST["tp"];
$uname=$_POST["uname"];
$pass=md5($_POST["password"]);

$query="INSERT INTO editors(first_name, last_name, email, tp, user_name, password)
VALUES
('$fname', '$lname', '$mail', '$tp', '$uname', '$pass')";

$result=mysql_query($query);

if (!$result){
echo (mysql_error());
exit;
}
echo ('<script type="text/javascript">
				alert("You have successfully registerd as Editor")
				window.location= "../admin/add_users.php"
				</script>');
exit;

}


//=========================================data entry register====================================================================//


if ($type=="data"){

if(isset($_POST["mail"])){
$em=$_POST["mail"];

$q1="SELECT email From data_entry WHERE email='$em'";

$res=mysql_query($q1);

if (!$res){
echo(mysql_error()); }

$E=mysql_num_rows($res);
if ($E!=0){
        echo ('<script type="text/javascript">
				alert("Email is already taken. try again")
				window.location= "../admin/add_users.php"
				</script>');
exit;
}
}

$fname=$_POST["fname"];
$lname=$_POST["lname"];
$mail=$_POST["mail"];
$tp=$_POST["tp"];
$uname=$_POST["uname"];
$pass=md5($_POST["password"]);

$query="INSERT INTO data_entry(first_name, last_name, email, tp, user_name, password)
VALUES
('$fname', '$lname', '$mail', '$tp', '$uname', '$pass')";

$result=mysql_query($query);

if (!$result){
echo (mysql_error());
exit;
}
echo ('<script type="text/javascript">
				alert("You have successfully registerd as Data Entry")
				window.location= "../admin/add_users.php"
				</script>');
exit;

}
}
}
?>
