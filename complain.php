<?php 
	  require_once 'controllers/complaincontroller.php';
?>
<html>
	<head></head>
	<body>
		<center>
		<form action="" method="post">
		
		<legend align="center"><h1>Complaint Box</h1></legend>
			<table>
				
				<tr>
				<td><span>Complaint</span></td>
				<td>:</td>
				<td><textarea name="u_com" ></textarea></td>
				<td><span><?php echo $err_com;?></span></td>
				</tr>
				<tr>
				<td>
				<select name="pool_name">
              <option disabled selected>pool name</option>
              <?php
                $comagainst= array("1","2","3","4","5","6","7","8","9","10");
                for($j=0;$j<=count($comagainst);$j++)
                {
                  
                  echo "<option>$comagainst[$j]</option>";
                
                }
                
              ?>
            </select></td>
			<td><?php echo "$err_comagainst"?></td>
			</tr>
				
				
				<tr>
				<td><br></td>
				</tr>
				<tr>
				<td colspan="3" align="right">
				<input type="Submit" name="complain" value="Submit">
				</td>
				</tr>
			</table>
	
		</form>
		</center>
	</body>
</html>