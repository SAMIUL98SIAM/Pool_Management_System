<?php
	require_once "controllers/Manager_controller.php" ;
?>
<script src="js/Manager.js"></script> 
<html>
      <head>
	  <title>Add Manager</title>
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
		<legend align="center"><h1>Add Manager</h1></legend>
		 
		    <form action="" method="post" onsubmit="return validate()">
			   <table align="center">
			           <tr>
					        <td><span><b>First Name:</b></span></td>
							<td><input type="text" id="fname" name="fname" value="<?php echo $fname;?>" size="" placeholder="First Name"><br>
							<span id="err_fname"><?php echo $err_fname;?></span></td>
					    </tr>
						
					     <tr>
					        <td><span><b>Last Name:</b></span></td>
							<td><input type="text" id="lname" name="lname" value="<?php echo $lname;?>" size="" placeholder="Last Name"><br>
							<span id="err_lname"><?php echo $err_lname;?></span></td>
					    </tr>
					   
					   <tr>
				           <td><span><b>Username:</b></span></td>
					       <td><input type="text" id="username" onfocusout="checkUsername(this)" name="username" value="<?php echo $username;?>" placeholder="Username"><br>
						    <span id="err_username"><?php echo $err_username;?></span></td>
			          </tr>

					  <tr>
						<td><span><b>Password:</b></span></td>
						<td><input type="password" id="password" name="password" value="<?php echo $password;?>" placeholder="Password"><br>
						<span id="err_password"><?php echo $err_password;?></span></td>
					</tr>
					    <tr>
					         <td><span><b>gender</b></span></td>
					         <td><input type="radio" id="Male"  name="gender" value="<?php echo "Male";?>"> <span>Male</span>
					         <input type="radio" id="Female" name="gender" value="<?php echo "Female";?>"> <span>Female</span><br> <span  id="err_gender"><?php echo $err_gender;?></span></td>
				  	   </tr>
					   
						<tr>
					        <td><span><b>Email:</b></span></td>
							<td><input type="text" size="" id="email" onfocusout="checkUemail(this)" name="email" value="<?php echo $email;?>" placeholder="Email"><br>
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
					       <td><span><b>Manager Role:</b></span></td>
						   <td>
						 <select name="role">
							           <option disabled selected>Choose Manager type</option>
									    <option id="role">Regular Manager</option> 
							            <option id="role1">Accountant</option>
										<option id="role2">Pool Agent</option>	  
										<option id="role3">Editor Manager</option> 
						</select>
						       <span id="err_role"><?php echo $err_role;?></span></td>
						</tr>
					   
					   <tr>
					          <td><span><b>About:</b></span></td>
					           <td><textarea id="about" name="about" placeholder="Info"><?php echo $about;?></textarea><br>
					          <span id="err_about"><?php echo $err_about;?></span></td>
				        </tr>
					   
				        
					    <tr>
				             <td><input type="submit" name="manager" value="Add Customer"></td>
				        </tr>    
							
					       
				</table>
             </form>
			 <div>
		 </fieldset>

		 

		 </body>
		 
</html>