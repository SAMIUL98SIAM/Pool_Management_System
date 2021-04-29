<?php
	require_once "controllers/Customer_controller.php" ;
	$customers = getAllcustomers();
?>
<html>
    <head> 
	     <title>Remove Customers</title></head>
	<body>
		<center><h1>Removed Customer</h1></center>
		      
	<center>			
		<table border="1" style="border-collapse:collapse;">
			<thead>
				<th>Serial</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Username</th>
				<th>Gender</th>
				<th>Email</th>
				<th>Address</th>
				<th>Phone Number</th>
				<th>About</th>
				<th>Remove</th>
			</thead>
			<tbody>
				<?php
					foreach($customers as $customer)
					{
						echo "<tr>" ;
							echo "<td>".$customer["id"]."</td>" ;
							echo "<td>".$customer["fname"]."</td>" ;
							echo "<td>".$customer["lname"]."</td>" ;
							echo "<td>".$customer["username"]."</td>" ;
							echo "<td>".$customer["gender"]."</td>" ;
							echo "<td>".$customer["email"]."</td>" ;
							echo "<td>".$customer["address"]."</td>" ;
							echo "<td>".$customer["number"]."</td>" ;
							echo "<td>".$customer["about"]."</td>" ;
							echo '<td><a href="removecustomer.php?id='.$customer["id"].'">Delete</a></td>';
						echo "</tr>" ;
					}
				?>
		   </tbody>
			
		</table>
	<center>    
        </body>
</html>