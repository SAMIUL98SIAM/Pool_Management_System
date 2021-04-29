<?php
	require_once "controllers/Employee_controllerForManager.php" ;
	$employees = getAllEmployees() ;
?>

<html>
    <head> 
	     <title>Employee Work Chart</title></head>
	<body>
		<center><h1>Employee Work Chart</h1></center>
		      
	<center>			
	<table border="1" style="border-collapse:collapse;">
			<thead>
				<th>Serial</th>
				<th>User Name</th>
				<th>Working Schedule</th>
				<th>Update Working Schedule</th>
			</thead>
			<tbody>
				<?php
					foreach($employees as $employee)
					{
						echo "<tr>" ;
							echo "<td>".$employee["id"]."</td>" ;
							echo "<td>".$employee["username"]."</td>" ;
							echo "<td>".$employee["working_time"]."</td>" ;
							echo '<td><a href="chnageworkchartemp.php?id='.$employee["id"].'">Change Workchart</a></td>';
						echo "</tr>" ;
					}
				?>
		   </tbody>
			
		</table>
	<center>    
	</body>
</html>