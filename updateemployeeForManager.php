<?php
    require_once "controllers/Employee_controllerForManager.php" ;
	$id = $_GET["id"];
	$employee = getEmployees($id);
?>
<script src="js/Employee.js"></script>
<html>
      <head>
	  <title>Update Employee</title>
	      <style>
		  .ed-div
				{
					
				border:1px solid black;
				margin:auto;
				width:30%;
				margin-top:13%;
				
				}
		  
	       </style>
	  <head>
	  
	     <body>
		 <div class="ed-div">
		<fieldset>
        <legend align="center"><h1>Update Employee</h1></legend>
		 
		    <form action="" method="post">
			   <table align="center">
			   <tr>
			         <td><input type="hidden" name="id" value="<?php echo $employee["id"];?>"></td> 
					 </tr>
			           
					   <tr>
				           <td><span><b>Empoloyee Name:<b></span></td>
					       <td><input type="text" name="username" id="username" onfocusout="checkUsername(this)" value="<?php echo $employee["username"];?>" placeholder="Username"><br>
						    <span id="err_username"><?php echo $err_username;?></span></td>
			          </tr>
					  
					   <tr>
					        <td><span><b>Address:<b></span></td>
					        <td><input type="text" name="address" value="<?php echo $employee["address"];?>" placeholder="Address"><br>
					        <span><?php echo $err_address;?></span></td>
					
				       </tr>
					<tr>
					        <td><span><b>Email:<b></span></td>
							<td><input type="text" size="" name="email" id="email" onfocusout="checkUemail(this)" value="<?php echo $employee["email"];?>" placeholder="Email"><br>
							<span id="err_email"><?php echo $err_email;?></span></td>
					</tr>
				     <tr>
					           <td><span><b>Number:</b></span></td>
							   <td><input type="text" size="" name="number" value="<?php echo $employee["number"];?>" placeholder="Contect Number"><br>
							    <span><?php echo $err_number;?></span></td>
					</tr>	
				
					<tr>
					       <td><span><b>Employee Role:</b></span></td>
						   <td>
						 <select name="role">
							           <option disabled selected>Choose Employee type</option>
							            <option>Sweeper</option> 
							            <option>Electrician</option>
										<option>Security Guard</option>	  
						</select>
						       <span><?php echo $err_role;?></span></td>
					</tr>
					
					
					   
				        
					<tr>
				             <td><input type="submit" name="update_employee" value="Update Employee"></td>
				    </tr>    
							
					       
				</table>
             </form>
			 <div>
		 </fieldset>

		 <script>
		 		
		 </script>
		 </body>
		 
</html>