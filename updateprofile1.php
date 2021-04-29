<?php
    require "controllers/updatecontroller.php" ;
	  
?>

<html>
      <head>
	  <title>Update Customer</title>
	      
	  <head>
	  
	     <body>
		 
		<fieldset>
        <legend align="center"><h1>Update Your Profile</h1></legend>
		 
		    <form action="" method="post">
			   <table align="center">
			  <span align="center"><h1> <?php echo $name; ?> </h1> <span>
                  
					  <tr>
				           <td><span><b>Name:<b></span></td>
					       <td><input type="text" name="name" value="<?php echo $name;?>" placeholder="Name"><br>
						    <span><?php echo $err_name;?></span></td>
			          </tr>

	
	
					   <tr>
				           <td><span><b>Username:<b></span></td>
					       <td><input type="text" name="uname" value="<?php echo $uname;?>" placeholder="Username"><br>
						    <span><?php echo $err_uname;?></span></td>
			          </tr>
					  
					    
						<tr>
					        <td><span><b>Email:<b></span></td>
							<td><input type="text" size="" name="mail" value="<?php echo $mail;?>" placeholder="Email"><br>
							<span><?php echo $err_mail;?></span></td>
					   </tr>
					   
				        
					<tr>
				             <td><input type="submit" name="update_customer" value="Update customer"></td>
				    </tr>    
							
					       
				</table>
             </form>
			 
		 </fieldset>
		 </body>
		 
</html>