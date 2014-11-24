<?php
//contributors registration//


if (isset($_POST["submit1"])){

require_once("./connect.php");

if(isset($_POST["mail"])){
$em=$_POST["mail"];

$q1="SELECT email From contributors WHERE email='$em'";

$res=mysql_query($q1);

if (!$res){
echo(mysql_error()); }

$E=mysql_num_rows($res);
if ($E!=0){

        echo ('<script type="text/javascript">
				alert("Email is already taken. try again")
				window.location= "../index.php"
				</script>');
exit;
}
}

$uname=$_POST["uname"];
$email=$_POST["mail"];
$pass=md5($_POST["password"]);

$query="INSERT INTO contributors(user_name, email, password)
VALUES
('$uname', '$email', '$pass')";

$result=mysql_query($query);

if (!$result){
echo (mysql_error());
exit;
}
        echo ('<script type="text/javascript">
				alert("You have successfully registerd as contributor")
				window.location= "../login.php"
				</script>');
        
exit;


}

//Subscribers registration//

if (isset($_POST["submit2"])){

require_once("./connect.php");

if(isset($_POST["email"])){
$em=$_POST["email"];

$q1="SELECT email From subscribers WHERE email='$em'";

$res=mysql_query($q1);

if (!$res){
echo(mysql_error()); }

$E=mysql_num_rows($res);
if ($E!=0){

        echo ('<script type="text/javascript">
				alert("Email is already exist. try again")
				window.location= "../index.php"
				</script>');
        

exit;
}
}

$email=$_POST["email"];


$query="INSERT INTO subscribers( email) VALUES ('$email')";

$result=mysql_query($query);

if (!$result){
echo (mysql_error());
exit;
}

        echo ('<script type="text/javascript">
				alert("You have successfully subscribed with our newsletter")
				window.location= "../index.php"
				</script>');
     
exit;


}


?>
