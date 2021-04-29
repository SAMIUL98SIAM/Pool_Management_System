<?php 
	  require_once 'controllers/booktimecontroller.php';
?>
<html>
	<head></head>
	<body>
		<center>
		<form action="" method="post">
		
		<legend align="center"><h1>Book Preferred Time</h1></legend>
			<table>
				
				
				<tr>
				<td><span>Date</span></td>
				<td>:</td>
				<td>
				<select name="u_day">
					<option disabled selected>Day</option>
					<?php
						for($i=1;$i<=31;$i++)
						{
							echo "<option>$i</option>";
						}
					?>
					</select>
					<select name="u_month">
					<option disabled selected>Month</option>
					<?php
						$month= array("January","February","March","April","May","June","July","August","September","October","November","December");
						for($j=0;$j<count($month);$j++)
						{
							echo "<option>$month[$j]</option>";
						}
					?>
				</select>
				<select name="u_year">
					<option disabled selected>Year</option>
					<?php
						for($k=1971;$k<=2040;$k++)
						{
							echo "<option>$k</option>";
						}
					?>
				</select>
				</td>
				<td><?php echo "$err_day"."</br>  "."$err_month"." </br> "."$err_year"."</br>"?></td>
				</tr>
				<tr>
				<td><span>Time</span></td>
				<td>:</td>
				<td>
				<select name="u_hour">
					<option disabled selected>hour</option>
					<?php
						for($k=01;$k<=24;$k++)
						{
							echo "<option>$k</option>";
						}
					?>
				</select>
				<select name="u_min">
					<option disabled selected>min</option>
					<?php
						for($k=01;$k<=59;$k++)
						{
							echo "<option>$k</option>";
						}
					?>
				</select>
				</td> 
				<td><?php echo "$err_hour"." </br>"."$err_min"?></td>
				</tr>
				
				<tr>
				<td><br></td>
				</tr>
				<tr>
				<td colspan="3" align="right">
				<input type="Submit" name="book" value="Book">
				</td>
				</tr>
			</table>
	
		</form>
		</center>
	</body>
</html>