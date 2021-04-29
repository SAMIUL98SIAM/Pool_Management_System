<!DOCTYPE html>
<html lang="en">
<head>
  <title>View Salary Distribution</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<br><br>
<div class="container">
  <h2>View Distributed Salary</h2>
  <?php
  include '../Model/db_con.php';
  $conn=mysqli_connect('localhost','root','','adminaddpool');
  if (isset($_GET['del'])){
	  $del_id=$_GET['del'];
	  $delete="DELETE FROM SALARY_DIS where id='$del_id'";
	  $run_delete=mysqli_query($conn,$delete);
	    
  }
 
  
  ?>
            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Employee Name</th>
        <th>Paid Amount</th>
		<th>Designation</th>
		<th>Email</th>
		<th>Month number</th>
		<th>Remove </th>
		<th>Edit  </th>
      </tr>
    </thead>
    <tbody>
	<?php

	$conn=mysqli_connect('localhost','root','','adminaddpool');
	$select=" SELECT * FROM SALARY_DIS";
	$run=mysqli_query($conn,$select);
	while($row_user=mysqli_fetch_array($run,MYSQLI_ASSOC)){
	 $user_id=$row_user['id'];
	 $user_name=$row_user['employee_name'];
	 $user_amount=$row_user['paid_amount'];
	 $user_designation=$row_user['designation'];
	 $user_email=$row_user['email'];
	 
	 
	 $user_month=$row_user['month'];
	
	?>

      <tr>
        <td><?php echo $user_id ;?></td>
        <td><?php echo $user_name ;?></td>
		<td><?php echo $user_amount ;?></td>
		<td><?php echo $user_designation ;?></td>
        <td><?php echo $user_email ;?></td>
		<td><?php echo $user_month ;?></td>
		<td><a class="btn btn-danger" href ="viewsalary.php?del=<?php echo $user_id;?>" >Delete</a></td>
		<td><a class="btn btn-success" href ="editsalary.php?edit=<?php echo $user_id;?>" >Edit</a></td>
      </tr>
	<?php }?>
      
    </tbody>
  </table>
</div>
</body>
</html>
