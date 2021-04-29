<?php
	require "controllers/Employee_controller.php" ;
	$id = $_GET["id"];
	$employee = getEmployees($id);
?>

<html>
      <head>
	  <title>Remove Employees</title>
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
        <legend align="center"><h1>Remove Employee</h1></legend>
		 
		    <form action="" method="post">
			   <table align="center">
			           
			   <tr>
			         <td><input type="hidden" name="id" value="<?php echo $employee["id"];?>"></td> 
					 </tr>
			           
					   <tr>
				           <td><span><b>Empoloyee Name:<b></span></td>
					       <td><input type="text" name="username" value="<?php echo $employee["username"];?>" placeholder="Username"><br>
						    <span><?php echo $err_username;?></span></td>
			          </tr>
					<tr>
				             <td><input type="submit" name="remove_employee" value="Remove Employee"></td>
				    </tr>    
							
					       
				</table>
             </form>
			 <div>
		  </fieldset>
		 </body>
		 
</html>