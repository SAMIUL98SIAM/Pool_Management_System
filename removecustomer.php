<?php
	require "controllers/Customer_controller.php" ;
	$id = $_GET["id"];
	$customer = getCustomers($id) ;

?>

<html>
      <head>
	  <title>Remove Customer</title>
	      <style>
		  .r-div
				{
					
				border:1px solid black;
				margin:auto;
				width:30%;
				margin-top:13%;
				
				}
		  
	       </style>
	  <head>
	  
	     <body>
		 <div class="r-div">
		 <fieldset>
        <legend align="center"><h1>Remove Customer</h1></legend>
		 
		    <form action="" method="post">
			   <table align="center">
			   <tr>
			         <td><input type="hidden" name="id" value="<?php echo $customer["id"];?>"></td> 
					 </tr>
					    
                     <tr>
				           <td><span><b>Username:<b></span></td>
					       <td><input type="text" name="username" value="<?php echo $customer["username"];?>" placeholder="Username"><br>
						    <span><?php echo $err_username;?></span></td>
			          </tr>

				        
					    <tr>
				             <td><input type="submit" name="remove_customer" value="Remove Customer"></td>
				        </tr>    
							
					       
				</table>
             </form>
			 <div>
		  </fieldset>
		 </body>
		 
</html>