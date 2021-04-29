<?php
    require_once "controllers/Manager_controller.php" ;
	$id = $_GET["id"];
	$manager = getManagers($id) ;
?>
<script src="js/Manager.js"></script> 
<html>
      <head>
	  <title>Update Manager</title>
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
        <legend align="center"><h1>Update Managers</h1></legend>
		 
		    <form action="" method="post">
			   <table align="center">
			   <tr>
			         <td><input type="hidden" name="id" value="<?php echo $manager["id"];?>"></td> 
				</tr>
			           <tr>
					        <td><span><b>First Name:<b></span></td>
							<td><input type="text" name="fname" value="<?php echo $manager["fname"];?>" size="" placeholder="First Name"><br>
							<span><?php echo $err_fname;?></span></td>
					    </tr>
						
					     <tr>
					        <td><span><b>Last Name:<b></span></td>
							<td><input type="text" name="lname" value="<?php echo $manager["lname"];?>" size="" placeholder="Last Name"><br>
							<span><?php echo $err_lname;?></span></td>
					    </tr>
					   
					   <tr>
				           <td><span><b>Username:<b></span></td>
					       <td><input type="text" name="username" id="username" onfocusout="checkUsername(this)" value="<?php echo $manager["username"];?>" placeholder="Username"><br>
						    <span id="err_username"><?php echo $err_username;?></span></td>
			          </tr>
					  <tr>
						<td><span><b>Password:</b></span></td>
						<td><input type="password" id="password" name="password" value="<?php echo $manager["password"];?>" placeholder="Password"><br>
						<span id="err_password"><?php echo $err_password;?></span></td>
				    </tr>
					<tr>
					         <td><span><b>Gender<b></span></td>
					         <td><input type="radio"  name="gender" value="<?php echo "Male";?>"> <span>Male</span>
					             <input type="radio"  name="gender" value="<?php echo "Female";?>"> <span>Female</span><br>
								 <span><?php echo $err_gender;?></span></td>
				  	   </tr>
						<tr>
					        <td><span><b>Email:<b></span></td>
							<td><input type="text" size="" name="email" id="email" onfocusout="checkUemail(this)" value="<?php echo $manager["email"];?>" placeholder="Email"><br>
							<span id="err_email"><?php echo $err_email;?></span></td>
					   </tr>
					   <tr>
					        <td><span><b>Address:<b></span></td>
					        <td><input type="text" name="address" value="<?php echo $manager["address"];?>" placeholder="Address"><br>
					        <span><?php echo $err_address;?></span></td>
					
				       </tr>
				     <tr>
					           <td><span><b>Number:</b></span></td>
							   <td><input type="text" size="" name="number" value="<?php echo $manager["number"];?>" placeholder="Contect Number"><br>
							    <span><?php echo $err_number;?></span></td>
					</tr>	
				
					<tr>
					       <td><span><b>Manager Role:</b></span></td>
						   <td>
						 <select name="role">
							           <option disabled selected>Choose Manager type</option>
									   <option>Regular Manager</option> 
							            <option>Accountant</option>
										<option>Pool Agent</option>	  
										<option>Editor Manager</option> 
						</select>
						       <span><?php echo $err_role;?></span></td>
						</tr>
					
					<tr>
					          <td><span><b>About:<b></span></td>
					           <td><textarea name="about" placeholder="Info"><?php echo $manager["about"];?></textarea><br>
					          <span><?php echo $err_about ?></span></td>
				                 </tr>
					   
				        
					<tr>
				             <td><input type="submit" name="update_manager" value="Update Manager"></td>
				    </tr>    
							
					       
				</table>
             </form>
			 <div>
		 </fieldset>
		 <script>
		 			
              //Ajax
              /*function checkUsername(control)
					{
						var username = control.value;
						
						var xhttp = new XMLHttpRequest();
						xhttp.onreadystatechange=function(){
							if(this.readyState == 4 && this.status == 200){
								var rsp = this.responseText;
								if(rsp == "false"){
									document.getElementById("err_username").innerHTML = "<br>Not Valid Username";
									document.getElementById("err_username").style.color = "blue";
								}
								else{

									document.getElementById("err_username").innerHTML = "<br>";
									
								}
							}
						};
						xhttp.open("GET","checkusernameForManager.php?username="+username,true);
						xhttp.send();
					}
				
					function checkUemail(control)
					{
						var email = control.value;
						
						var xhttp = new XMLHttpRequest();
						xhttp.onreadystatechange=function(){
							if(this.readyState == 4 && this.status == 200){
								var rsp = this.responseText;
								if(rsp == "false"){
									document.getElementById("err_email").innerHTML = "<br>This email has already exists";
									document.getElementById("err_email").style.color = "blue";
								}
								else{

									document.getElementById("err_email").innerHTML = "<br>";
								}
							}
						};
						xhttp.open("GET","checkmailForManager.php?email="+email,true);
						xhttp.send();
					}
	*/

	    </script> 
		 </script>
		 </body>
		 
</html>