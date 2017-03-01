<?php

$id=$_REQUEST['id'];

if(isset($_SESSION['pwd']))
{
echo"<table cellspacing='2' cellpadding='2' border='1'>";
echo"<form action='pg14.php'>";
echo"<tr>
          <td align='right'>
          no of seats
          </td>
          <td>
            <input type='text'/>
          </td>
        </tr>";
echo"<tr>
          <td align='right'>
           timing
          </td>
          <td>
            <input type='text'/>
          </td>
        </tr>";
echo"<tr>
          <td align='right'>
          type
        </td>
          <td>
            <input type='radio'name='ac'value='ac'/>ac</input>
			 <input type='radio'name='ac'value='ac'/>non-ac</input>
          </td>
        </tr>";


		echo"<tr>
          <td align='right'>
           name
          </td>
          <td>
            <input type='text' id='nm' name='nm'/>
          </td>
        </tr>";
		echo"<tr>
          <td align='right'>
          ph no
          </td>
          <td>
            <input type='text' id='ph' name='ph'>
          </td>
        </tr>";
		echo"<tr><td>
            <input type='submit' value='submit'/>
          </td>
        </tr>";
echo"</form>";
echo"</table>";
}
else
{
echo"<script type='text/javascript'>";
echo "alert('first login plz')";
echo "</script>";
}

?>