<?php
	require_once "controllers/Login_controller.php" ;
?>
<script src="js/SignUp.js"></script>
<html>
       <title>SignUP</title>
	<head> 
	<style>
	.login-div{
		border:1px solid black;
		margin:auto;
		width:40%;
		margin-top:15%
	}
	</style>
	</head>
	<body>
	<div class="login-div">
		<fieldset>
		<form action="" method="post" onsubmit="return validate()">
		<legend align="center"><h1>Registration</h1></legend>
	
				<table align="center">
				<h2 align="center">Optional</h2>
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
					         <td><span><b>gender</b></span></td>
					         <td><input type="radio" id="Male" name="gender" value="<?php echo "Male";?>"> <span>Male</span>
					         <input type="radio" id="Female" name="gender" value="<?php echo "Female";?>"> <span>Female</span ><br> 
							 <span id="err_gender"><?php echo $err_gender;?></span></td>
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
					          <td><span><b>About:</b></span></td>
					           <td><textarea id="about" name="about" placeholder="Info"><?php echo $about;?></textarea><br>
					          <span id="err_about"><?php echo $err_about ?></span></td>
				        </tr>
	  				
	               				  <tr><td style="text-align=center;"><h2>Require</h2></td> </tr>


						<tr>
				           <td><span><b>Username:</b></span></td>
					       <td><input type="text" id="username" name="username" onfocusout="checkUsername(this)" value="<?php echo $username;?>" placeholder="Username"><br>
						    <span id="err_username"><?php echo $err_username;?></span></td>
			          </tr>
					  <tr>
					        <td><span><b>Email:</b></span></td>
							<td><input type="text" size="" id="email" name="email" onfocusout="checkUemail(this)"  value="<?php echo $email;?>" placeholder="Email"><br>
							<span id="err_email"><?php echo $err_email;?></span></td>
					   </tr>
					<tr>
						<td><span><b>Password:</b></span></td>
						<td><input type="password" id="password" name="password" value="<?php echo $password;?>" placeholder="Password"><br>
						<span id="err_password"><?php echo $err_password;?></span></td>
					</tr>
					   
				<tr>
					<td><input type="submit" name="sign_up"value="Sign Up"></td>
				</tr>
			</table>
	</form>	
	</fieldset>
	</div>
	
	<script>
			
	    </script>
	</body>
 </html>