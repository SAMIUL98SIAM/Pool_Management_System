<?php
	require_once "controllers/Manager_controller.php" ;
	$managers = getAllManagers();
?>

<html>
    <head> 
	     <title>Updated Manager</title></head>
	<body>
		<center><h1>Updatede Manager </h1></center>
		     
	<center>			
		<table border="1" style="border-collapse:collapse;">
		<thead>
				<th>Serial</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Username</th>
				<th>Password</th>
				<th>Gender</th>
				<th>Email</th>
				<th>Address</th>
				<th>Phone Number</th>
				<th>Role</th>
				<th>About</th>
                <th>Update</th>
				
			</thead>
			<tbody>
				<?php
					foreach($managers as $manager)
					{
						echo "<tr>" ;
							echo "<td>".$manager["id"]."</td>" ;
							echo "<td>".$manager["fname"]."</td>" ;
							echo "<td>".$manager["lname"]."</td>" ;
							echo "<td>".$manager["username"]."</td>" ;
							echo "<td>".$manager["password"]."</td>" ;
							echo "<td>".$manager["gender"]."</td>" ;
							echo "<td>".$manager["email"]."</td>" ;
							echo "<td>".$manager["address"]."</td>" ;
							echo "<td>".$manager["number"]."</td>" ;
							echo "<td>".$manager["role"]."</td>" ;
							echo "<td>".$manager["about"]."</td>" ;
							echo '<td><a href="updatemanager.php?id='.$manager["id"].'">Edit</a></td>';
						echo "</tr>" ;
					}
				?>
		   </tbody>
			
			
			
		</table>
	<center>    
        </body>
</html>