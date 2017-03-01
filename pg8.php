<?php

$nm=$_REQUEST['id'];

$conn=mysqli_connect("localhost","root","","clg");

$sql="select * from des where nm='$nm'";
$result=mysqli_query($conn,$sql);
if($row=mysqli_fetch_array($result))

{
echo '<img src='.$nm.'></img>';
echo"<h2 style='color:blue;'><i>Overview</i></h2>";
echo "<div>Opening hours:".$row['phno']."</div><br>";
echo "<div>Cuisines:".$row['cuisines']."</div><br>";
echo "<div>Opening hours:".$row['hrs']."</div><br>";
echo "<div>Address:".$row['addr']."</div><br>";
echo "<div>Highlights:".$row['highlights']."</div><br>";
echo "<div>Cost:".$row['cost']."</div>";
}

echo "<h2 style='color:red;'><i>Reviews</i></h2>";

$sql="select * from reiview where id='$nm'";

$result=mysqli_query($conn,$sql);
if(mysqli_query($conn,$sql))
{
while($row=mysqli_fetch_array($result))
{

echo "<b>".$row['name'].":</b>";
echo "<div style='height:40px;width:150px;border:1px solid black;'>".$row['review']."</div>";
echo "<div style='padding-left:40px;height:50px;width:100px;'>".$row['date']."</div>";
}
}
else
{
	echo "no reviews";
}
echo "</br>";
echo "</br>";
echo"<a href='pg7.php?id=".$nm."'>add review</a>";

?>