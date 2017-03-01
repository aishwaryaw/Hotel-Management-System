<?php

$var1=$_GET['something'];

$conn=mysqli_connect("localhost","root","","clg");

$sql="select * from des where nm='$var1'";
$result=mysqli_query($conn,$sql);
if($row=mysqli_fetch_array($result))
{
echo "<img src='".$var1."'></img>";
echo"<h2 style='color:blue;'><i>Overview</i></h2>";
echo "<div>Opening hours:".$row['phno']."</div><br>";
echo "<div>Cuisines:".$row['cuisines']."</div><br>";
echo "<div>Opening hours:".$row['hrs']."</div><br>";
echo "<div>Address:".$row['addr']."</div><br>";
echo "<div>Highlights:".$row['highlights']."</div><br>";
echo "<div>Cost:".$row['cost']."</div>";
echo"<div>menu</div>";
echo"<img src='menu14.jpg'/>";
echo"<img src='menu15.jpg'/>";
}

echo "<h2 style='color:red;'><i>Reviews</i></h2>";

$sql="select * from reiview where id='$var1'";

$result=mysqli_query($conn,$sql);
if(mysqli_query($conn,$sql))
{
while($row=mysqli_fetch_array($result))
{

echo "<b>".$row['name'].":</b>";
echo"<div style='height:100px;width:200px;'>";
echo "<div style='height:40px;width:150px;'>".$row['review']."</div>";
}
}
else
{
	echo "no reviews";
}
echo "</br>";
echo "</br>";
echo"<a href='pg7.php?id=".$var1."'>add review</a>";
?>