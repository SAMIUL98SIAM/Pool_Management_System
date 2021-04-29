<?php
require_once 'models/db_config.php';


	
	$query="select * from complainss";
	$result = get($query);
	
?>
   <h1> Your Complains </h1>
	<table border="1" style="border-collapse:collapse;">
		<tr>
			
			<th>Complain</th>
			<th>Complain Against</th>
			
			
		</tr>
<?php
	foreach($result as $row){
		echo "<tr>";
		 echo "<td>".$row["complain"]."</td>";
		 echo "<td>".$row["comagainst"]."</td>";
		echo "</tr>";
	}
?>
	</table>



<?php
$complain="";
	$err_com="";
	$comagainst="";
	$err_comagainst="";
	$hasError = false;
	if(isset($_POST["complain"]))
		{
			
			
			if (empty($_POST["u_com"]))
			{
				$err_com="Plase fill the text area";
				$hasError = true;
			}
			else
			{
				$complain=$_POST["u_com"];
			}
			
		
			
			if (!isset($_POST["pool_name"]))
          {
            $err_comagainst="pool must be selected";
			$hasError = true;
          }
          else
          {
            $comagainst=$_POST["pool_name"];
          }
			if(!$hasError){
			insertcomplain($complain,$comagainst);
			//echo "inserted";
			
			
		    }
		}
			
			function insertcomplain($complain,$comagainst){
		$query = "INSERT INTO complainss VALUES (NULL,'$complain','$comagainst')";
		execute($query);
		}
	
?>