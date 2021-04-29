<?php
	require_once "controllers/Employee_controller.php" ;
?>
<script src="js/Employee.js"></script>
<html>
      <head>
	  <title>Add Employees</title>
	      <style>
		  .adduser-div
				{			
					border:1px solid black;
					margin:auto;
					width:30%;
					margin-top:13%;	
				}  
	       </style>
	  <head>
	  
	     <body>
		 <div class="adduser-div">
      <fieldset>
		<legend align="center"><h1>Add Employees</h1></legend>
		 
		    <form action="" method="post" onsubmit="return validate()">
			   <table align="center">
					   <tr>
				           <td><span><b>Employee Name:</b></span></td>
					       <td><input type="text" id="username" name="username" onfocusout="checkUsername(this)" value="<?php echo $username;?>" placeholder="Username"><br>
						    <span id="err_username"><?php echo $err_username;?></span></td>
			          </tr>
					  <tr>
						<td><span><b>Password:</b></span></td>
						<td><input type="password" id="password" name="password" value="<?php echo $password;?>" placeholder="Password"><br>
						<span id="err_password"><?php echo $err_password;?></span></td>
					  </tr>
					    <tr>
					         <td><span><b>gender</b></span></td>
					         <td><input type="radio" id="Male" name="gender" value="<?php echo "Male";?>"> <span>Male</span>
					        <input type="radio" id="Female" name="gender" value="<?php echo "Female";?>"> <span>Female</span><br>
						    <span id="err_gender"><?php echo $err_gender;?></span></td>
				  	   </tr>
						 <tr>
					        <td><span><b>Email:</b></span></td>
							<td><input type="text" size="" id="email" name="email" onfocusout="checkUemail(this)" value="<?php echo $email;?>" placeholder="Email"><br>
							<span id="err_email"><?php echo $err_email;?></span></td>
					   </tr>
					   
					   <tr>
					        <td><span><b>Address:</b></span></td>
					        <td><input type="text" id="address" name="address" value="<?php echo $address;?>" placeholder="Address"><br>
					        <span id="err_address"><?php echo $err_address;?></span></td>
					
				       </tr>

				
				     <tr>
					           <td><span><b>Number:</b></span></td>
							   <td><input type="text" size="" id="number" name="number" value="<?php echo $number;?>" placeholder="Contect Number"><br>
							    <span id="err_number"><?php echo $err_number;?></span></td>
					</tr>	
                    
				     <tr>
					           <td><span><b>Working Time:</b></span></td>
							   <td><input type="datetime-local" id="working_time" size="" name="working_time" value="<?php echo $working_time;?>" placeholder="Time"><br>
							    <span id="err_working_time"><?php echo $err_working_time;?></span></td>
					</tr>	
					<tr>
					    <td><span><b>Employee Role:</b></span></td>
						   <td>
						 <select name="role">
							           <option disabled selected>Choose Employee type</option>
							            <option id="role">Sweeper</option> 
							            <option id="role1">Electrician</option>
										<option id="role2">Security Guard</option>	  
						</select>
						<span id="err_role"><?php echo $err_role;?></span></td>
						</tr>
					   <tr>
					  
				             <td><input type="submit" name="employee" value="Add Employee"></td>
				        </tr>    
							
					       
				</table>
             </form>
			 <div>
		 </fieldset>
		
		 </body>
		 
</html>