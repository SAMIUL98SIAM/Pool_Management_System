<?php
	require_once "controllers/Employee_controllerForManager.php" ;
	$employees = getAllEmployees() ;
?>

<html>
    <head> 
	     <title>All Employee</title></head>
	<body>
		<center><h1>ALL Employee</h1></center>
		      <h2 align="center">
			       
                    <span><a  style="text-decoration:none" href="updateemployeeMForManager.php" target="_self" >Update Employee &nbsp</a> </span>
					
					<span><a  style="text-decoration:none" href="Manager.php" target="_self" >Back &nbsp</a> </span>
              </h2>
	<center>			
	<table border="1" style="border-collapse:collapse;">
			<thead>
				<th>Serial</th>
				<th>User Name</th>
				<th>Gender</th>
				<th>Email</th>
				<th>Phone Number</th>
				<th>Working Schedule</th>
				<th>Role</th>
				<th>Address</th>
				
			</thead>
			<tbody>
				<?php
					foreach($employees as $employee)
					{
						echo "<tr>" ;
							echo "<td>".$employee["id"]."</td>" ;
							echo "<td>".$employee["username"]."</td>" ;
							echo "<td>".$employee["gender"]."</td>" ;
							echo "<td>".$employee["email"]."</td>" ;
							echo "<td>".$employee["number"]."</td>" ;
							echo "<td>".$employee["working_time"]."</td>" ;
							echo "<td>".$employee["role"]."</td>" ;
							echo "<td>".$employee["address"]."</td>" ;
							//echo '<td><a href="updateemployee.php?id='.$employee["id"].'">Edit</a></td>';
						echo "</tr>" ;
					}
				?>
		   </tbody>
			
		</table>
	<center>    
        </body>
</html>