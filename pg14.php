<?php

$nm=$_REQUEST['nm'];
$ph=$_REQUEST['ph'];

$conn=mysqli_connect("localhost","root","","clg");

$sql="insert into book values('$nm','$ph')";

$result=mysqli_query($conn,$sql);

if($result)
{
echo"<script type='text/javascript'>";
echo "alert('hiii')";
echo "</script>";
}
?>