<?php

$un=$_REQUEST['nm'];
$pwd=$_REQUEST['pwd'];


$conn=mysqli_connect("localhost","root","","clg");
if($conn)
{
$sql="insert into user values('$un','$pwd')";

$result=mysqli_query($conn,$sql);

if($result)
{
echo"You r added to our site";
}
}
?>