<?php
session_start();
$name=$_REQUEST['nm'];
$pwd=$_REQUEST['pwd'];

$conn=mysqli_connect("localhost","root","","clg");
$sql="select * from user where un='$name'and pwd='$pwd'";

$_SESSION['nm']=$name;
$_SESSION['pwd']=$pwd;

$result=mysqli_query($conn,$sql);

if(mysqli_fetch_array($result)>0)
{
	echo "u r our user";
}
else
{
echo"You have to register first";
}
?>