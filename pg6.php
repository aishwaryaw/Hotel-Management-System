<html>
<body style="background-color:black;">
<div style="margin-left:15%;"><img src="fl.jpg" style="height:20%;width:80%;border:1px solid black;"/></div>

<div style="height:4%;width:100%;border:1px solid black;background-color:maroon">

<div style="height:20px;width:100px; border:1px solid black; background-color:orange;float:left;"><a href="pg2.html"style="text-decoration:none;"><b>contact us</b></a></div><div style="height:30px;width:5px;float:left;"></div>
<div style="height:20px;width:100px; border:1px solid black; background-color:orange; float:left;"><a href="pg3.html"style="text-decoration:none;"><b>about us</b></a></div><div style="height:30px;width:10px;float:left;"></div>
<div style="height:20px;width:100px; border:1px solid black; background-color:orange; float:left;"><a href="pg10.html"style="text-decoration:none;"><b>register</b></a></div><div style="height:30px;width:10px;float:left;"></div>
<div style="height:20px;width:80px; border:1px solid black; background-color:orange; float:right;"><a href="pg4.html"style="text-decoration:none;"><b>signup</b></a></div>
</div> 
<img src="collage.jpg" style="height:70%;width:100%;"/>

<h2 style="color:white;">QUICK SEARCHES</h2>
<?php
echo"<link type='text/css' rel='stylesheet' href='mystyle.css'>";
$var1="l/d";
echo "<div class='box' style='height:30px;width:200px; border:1px solid black; background-color:pink;float:left;border-radius:5px;padding-left:120px;'><a href='pg5.php?id=".$var1."'style='text-decoration:none;font-family:georgia;'><b>lunch/dinner</b></a></div><div style='height:30px;width:10px;float:left;'></div>";
$var2="cafes";
echo"<div style='height:30px;width:200px; border:1px solid black; background-color:pink; float:left;padding-left:130px;border-radius:5px;'><a href='pg5.php?id=".$var2."'style='text-decoration:none;font-family:georgia;'><b>cafes</b></a></div><div style=height:30px;width:10px;float:left;'></div>";
$var3="ice-cream";
echo"<div style='height:30px;width:200px; border:1px solid black; background-color:pink;float:left;padding-left:90px;border-radius:5px;'><a href='pg5.php?id=".$var3."'style='text-decoration:none;font-family:georgia;'><b>ice-cream parlours</b></a></div><div style=height:30px;width:10px;float:left;'></div>";

echo"<div style='height:30px;width:200px; border:1px solid black; background-color:pink;float:left;padding-left:130px;border-radius:5px;'><a href='pg5.php?id=".$var2."'style='text-decoration:none;font-family:georgia;'><b>Snacks</b></a></div><div style=height:30px;width:10px;float:left;'></div>";

echo"<div style='height:30px;width:200px; border:1px solid black; background-color:pink; float:left;padding-left:110px;border-radius:5px;'><a href='pg5.php?id=".$var2."'style='text-decoration:none;font-family:georgia;'><b>pizza-coner</b></a></div><div style=height:30px;width:10px;float:left;'></div>";

echo"<div style='height:30px;width:200px; border:1px solid black; background-color:pink; float:left;padding-left:130px;border-radius:5px;'><a href='pg5.php?id=".$var2."'style='text-decoration:none;font-family:georgia;'><b>drinks</b></a></div><div style=height:30px;width:10px;float:left;'></div>";
echo"<div style='height:30px;width:200px; border:1px solid black; background-color:pink; float:left;padding-left:110px;border-radius:5px;'><a href='pg5.php?id=".$var2."'style='text-decoration:none;font-family:georgia;'><b>chinese-coner</b></a></div><div style=height:30px;width:10px;float:left;'></div>";

echo"<div style='height:30px;width:200px; border:1px solid black; background-color:pink; float:left;padding-left:110px;border-radius:5px;'><a href='pg5.php?id=".$var2."'style='text-decoration:none;font-family:georgia;'><b>franky special</b></a></div><div style=height:30px;width:10px;float:left;'></div>";
echo"</br>";
echo"</br>";
echo"<style>
.box
{
background:pink;
-webkit-transition:background-color 2s ease-out;
-moz-transition:background-color 2s ease-out;
-o-transition:background-color 2s ease-out;
transition:background-color 2s ease-out;
}

.box:hover
{
background-color:red;
cursor:pointer;
}
</style>";
?>
</br>
<h2 style="color:white;font-family:tahoma;">POPULAR PLACES</h2>
<div>
<form action="pg3.php">
<select name="something" style="height:40px;width:200px;background-color:red;color:white;font-type:bold;font-family:georgia;">
<option value=" ">Thane restaurants</option>
<option value="ms.jpg">Cantonese</option>
<option value="Burger King">Burger King</option>
<option value="Mantra">Mantra</option>
<option value="Mantra">Mantra</option>
<option value="Funtoo">Funtoo</option>
<option value="The Virgin cafe">The Virgin cafe</option>
<option value="Bikaner">Bikaner</option>
<option value="Jamaican">Jamaican</option>
<option value="dosa plaza">Dosa Plaza</option>
</select>
<input type='submit' value="search"></input>
</form>

<form action="pg3.php" method="GET">
<select name="something" style="height:40px;width:200px;background-color:red;color:white;">
<option value=" ">Dadar restaurants</option>
<option value="kunjvihar">kunjvihar</option>
<option value="kunjvihar">Alok Restaurant</option>
<option value="kunjvihar">Gomantak</option>
</select>
<input type='submit' value="search" />
</form>

<form action="pg3.php" method="GET">
<select name="something" style="height:40px;width:200px;background-color:red;color:white;">
<option value=" ">Vashi restaurants</option>
<option value="kunjvihar">Jamaican</option>
<option value="kunjvihar">The virgin Cafe</option>
<option value="kunjvihar">Funtoo</option>
</select>
<input type="submit" value="search"/>
</form>

<form action="pg3.php" method="GET">
<select name="something" style="height:40px;width:200px;background-color:red;color:white;">
<option value=" ">Nerul restaurants</option>
<option value="kunjvihar">Youtoo</option>
<option value="kunjvihar">Dosa plaza</option>
<option value="kunjvihar">Bikaner</option>
</select>
<input type="submit" value="search"/>
</form>
</div>
</body>
</html>
