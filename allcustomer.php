<?php
	require_once "controllers/Customer_controller.php" ;
	$customers = getAllcustomers();
?>
<html>
    <head> 
	     <title>All Customers</title></head>
	<body>
		<center><h1>ALL Customer</h1></center>
		    <h2 align="center">
			    <span><a  style="text-decoration:none" href="addcustomer.php" target="_self" >Add Customer &nbsp</a> </span> 
                <span><a  style="text-decoration:none" href="updatecustomerM.php" target="_self" >Update Customer &nbsp</a> </span>
				<span><a  style="text-decoration:none" href="removecustomerM.php" target="_self" >Remove Customer &nbsp</a> </span>
				<span><a  style="text-decoration:none" href="searchcustomer.php" target="_self" >Search Customer &nbsp</a> </span>
				<span><a  style="text-decoration:none" href="admin.php" target="_self" >Back &nbsp</a> </span>
            </h2>	
	<center>		  	
	<table  border="1" style="border-collapse:collapse;"> 
	     
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
				<th>About</th>
				
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
							echo "<td>".$customer["password"]."</td>" ;
							echo "<td>".$customer["gender"]."</td>" ;
							echo "<td>".$customer["email"]."</td>" ;
							echo "<td>".$customer["address"]."</td>" ;
							echo "<td>".$customer["number"]."</td>" ;
							echo "<td>".$customer["about"]."</td>" ;
							//echo '<td><a href="updatecustomer.php?id='.$customer["id"].'">Edit</a></td>';
						echo "</tr>" ;
					}
				?>
		   </tbody>
			
		</table>
	<center>    
    </body>
</html>