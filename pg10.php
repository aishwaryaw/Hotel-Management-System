<?php
$un=$_POST['un'];
$pwd=$_POST['pwd'];
$conn=mysqli_connect("localhost","","root","clg");

if($conn)
{
$sql="insrt into user values('$un','$pwd')";
$result=mysqli_query($conn,$sql);
if($result)
{
echo "u r added";
}
}
?>