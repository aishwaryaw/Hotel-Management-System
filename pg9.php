<?php

$conn=mysqli_connect("localhost","root","","clg");

$nm=$_REQUEST['id'];
$name=$_POST['name'];
$rev=$_POST['rev'];
$str=strtotime('today');
$date=date('yyyy-mm-dd',$str);


echo $date;
$sql="insert into reiview values('$name','$nm','$rev',$date)";
if(mysqli_query($conn,$sql))
{
echo"<script type='text/javascript'>";
echo "alert('review added')";
echo "</script>";

}

?>