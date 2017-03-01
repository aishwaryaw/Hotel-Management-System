<?php
session_start();
$nm=$_REQUEST['id'];
if(isset($_SESSION['pwd']))
{
echo"<div style='align-left:50px;align-top:100px;'>";
echo "<form method='POST' action='pg9.php?id=".$nm."'>";
echo "REVIEW:<textarea style='resize:none' cols='16' rows='5' name='address'></textarea><br>";
echo "NAME:<input type='text' name='name'><br>";
echo "<input type='submit'>";
echo "</form>";
echo"</div>";
}
else
{
echo "login plz";
echo "Go to<a href='pg4.html'>login</a>";

}
?>