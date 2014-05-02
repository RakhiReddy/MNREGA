<!DOCTYPE html>
<head>
    <title>Login</title>
</head>

<body>
<?php

session_start();
$user="root";
$r=0;
$email = $_POST["email"];
$password = $_POST['password'];
$con=mysql_connect ('localhost',$user,"");
mysql_select_db('mnrega');
$query="select * from login where email='$email' and password='$password'";
$res=mysql_query($query,$con);



	if($res)
    {
	while($row=mysql_fetch_array($res,MYSQL_ASSOC))
	{
$_SESSION['email']=$email;
setcookie("email",$email);
header("Location:");
$r=1;
    }
}

if($r==0)
{
   
	echo "<h3>Kindly Check Username & Password.</h3>";
}

?>
    </body>
</html>