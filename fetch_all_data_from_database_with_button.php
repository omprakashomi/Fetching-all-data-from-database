<!DOCTYPE html>
<html>
<head>
	<title>Fetching all data from database</title>
</head>
<body>
	<h1>Showing all data from database</h1>
	<form method="post">
	<input type="submit" name="submit" value="Click to Show all data from database">
	</form>
	<?php
	if (isset($_POST(submit))) 
	{
		echo "
		    <table border='black'>
		       <tr style='border: red;'>
			      <th>Student's Name&ensp;</th>
			      <th>Mother's Name&ensp;</th>
			      <th>Father's Name&ensp;</th>
                  <th>Date of birth&ensp;</th>
			      <th>Gender&ensp;</th>
			      <th>Nationality&ensp;</th>
			      <th>Religion&ensp;</th>
			      <th>Compulsary Subject 1&ensp;</th>
			      <th>Compulsary Subject 2&ensp;</th>
			      <th>Main Subject 1&ensp;</th>
			      <th>Main Subject 2&ensp;</th>
			      <th>Optional Subject 1&ensp;</th>
		       </tr> 
		   </table>";


	   $con=mysqli_connect("localhost","root","","form");
	    if ($con) 
	    {
	        $r="SELECT * FROM `reg_form`";
	        $s=mysqli_query($con,$r);
	        while ($t=mysqli_fetch_array($s)) 
	       {
	            echo"
	            <table>
	                <tr style='border: red; text-align: center;'>
	                   <td>$t[0]</td>
	                   <td>$t[1]</td>
	                   <td>$t[2]</td>
	                   <td>$t[3]</td>
	                   <td>$t[4]</td>
	                   <td>$t[5]</td>
	                   <td>$t[6]</td>
	                   <td>$t[7]</td>
	                   <td>$t[8]</td>
	                   <td>$t[9]</td>
	                   <td>$t[10]</td>
	                   <td>$t[11]</td>
	                </tr>
	            </table>";
	        }
	    }  
	    else
	    {
          echo "Not connected";
	    }
	    mysqli_close($con);
    }
	else
	{
	 echo("Press button to see data");
	}
	?>
</body>
</html>