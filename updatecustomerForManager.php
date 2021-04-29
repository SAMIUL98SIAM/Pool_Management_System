<?php
    require_once "controllers/Customer_controllerForManager.php" ;
	$id = $_GET["id"];
	$customer = getCustomers($id) ;
?>
<script src="js/Customer.js"></script>
<html>
      <head>
	  <title>Update Customer</title>
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
        <legend align="center"><h1>Update Customers</h1></legend>
		 
		    <form action="" method="post">
			   <table align="center">
			   <tr>
			         <td><input type="hidden" name="id" value="<?php echo $customer["id"];?>"></td> 
					 </tr>
			           <tr>
					        <td><span><b>First Name:<b></span></td>
							<td><input type="text" name="fname" value="<?php echo $customer["fname"];?>" size="" placeholder="First Name"><br>
							<span><?php echo $err_fname;?></span></td>
					    </tr>
						
					     <tr>
					        <td><span><b>Last Name:<b></span></td>
							<td><input type="text" name="lname" value="<?php echo $customer["lname"];?>" size="" placeholder="Last Name"><br>
							<span><?php echo $err_lname;?></span></td>
					    </tr>
					   
					   <tr>
				           <td><span><b>Username:<b></span></td>
					       <td><input type="text" name="username" id="username" onfocusout="checkUsername(this)" value="<?php echo $customer["username"];?>" placeholder="Username"><br>
						    <span id="err_username"><?php echo $err_username;?></span></td>
			          </tr>
					  
					    <tr>
					         <td><span><b>Gender<b></span></td>
					         <td><input type="radio"  name="gender" value="<?php echo "Male";?>"> <span>Male</span>
					             <input type="radio"  name="gender" value="<?php echo "Female";?>"> <span>Female</span><br>
								 <span><?php echo $err_gender;?></span></td>
				  	   </tr>
					   
						<tr>
					        <td><span><b>Email:<b></span></td>
							<td><input type="text" size="" name="email" id="email" onfocusout="checkUemail(this)" value="<?php echo $customer["email"];?>" placeholder="Email"><br>
							<span id="err_email"><?php echo $err_email;?></span></td>
					   </tr>
					   <tr>
					        <td><span><b>Address:<b></span></td>
					        <td><input type="text" name="address" value="<?php echo $customer["address"];?>" placeholder="Address"><br>
					        <span><?php echo $err_address;?></span></td>
				    </tr>
				    <tr>
					           <td><span><b>Number:</b></span></td>
							   <td><input type="text" size="" name="number" value="<?php echo $customer["number"];?>" placeholder="Contect Number"><br>
							    <span><?php echo $err_number;?></span></td>
					</tr>	
				
					
					
					<tr>
					          <td><span><b>About:<b></span></td>
					           <td><textarea name="about" placeholder="Info"><?php echo $customer["about"];?></textarea><br>
					          <span><?php echo $err_about ?></span></td>
				    </tr>
					   
				        
					<tr>
				             <td><input type="submit" name="update_customer" value="Update Customer">"</td>
				    </tr>    
							
					       
				</table>
             </form>
			 <div>
		 </fieldset>
		 </body>
		 
</html>