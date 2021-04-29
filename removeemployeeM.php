<?php
	require_once "controllers/Employee_controller.php" ;
	$employees = getAllEmployees() ;
?>

<html>
    <head> 
	     <title>All Employee</title></head>
	<body>
		<center><h1>Updated Employee</h1></center>
		      
	<center>			
	<table border="1" style="border-collapse:collapse;">
			<thead>
				<th>Serial</th>
				<th>User Name</th>
				<th>Gender</th>
				<th>Phone Number</th>
				<th>Role</th>
				<th>Address</th>
				<th>Remove</th>
			</thead>
			<tbody>
				<?php
					foreach($employees as $employee)
					{
						echo "<tr>" ;
							echo "<td>".$employee["id"]."</td>" ;
							echo "<td>".$employee["username"]."</td>" ;
							echo "<td>".$employee["gender"]."</td>" ;
							echo "<td>".$employee["number"]."</td>" ;
							echo "<td>".$employee["role"]."</td>" ;
							echo "<td>".$employee["address"]."</td>" ;
							echo '<td><a href="removeemployee.php?id='.$employee["id"].'">Delete</a></td>';
						echo "</tr>" ;
					}
				?>
		   </tbody>
			
		</table>
	<center>    
        </body>
</html>