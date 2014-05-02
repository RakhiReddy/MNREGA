<!DOCTYPE html>
<html>
<body>
 
<?php


$con=mysql_connect("localhost","root","") or die("Unable to connect to MySql");
$db=mysql_select_db("mnrega");

$fname=$_POST['First Name'];
$lname=$_POST['Last Name'];
$address = $_POST['Address'];
$dob=$_POST['Date of Birth'];
$village=$_POST['Village'];
$card=$_POST['Aadhar Card No'];

$query="insert into signup(fname,lname,address,dob,village,card) values ('$fname','$lname','$address','$dob','$village','$card')";
$res=mysql_query($query,$con);
if($res)
{
    ?>
    <script type="text/javascript">
        alert("Applied");
	window.open("");
    </script>
    <?php
}
else
{
	echo "values are not inserted";
}
mysql_close();
?>

</body>
</html>
