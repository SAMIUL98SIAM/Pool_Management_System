<?php

    require "controllers/Employee_controllerForManager.php" ;
	$id = $_GET["id"];
	$employee = getEmployees($id);
?>

<html>
      <head>
	  <title><h1>Change Work chart Employee<</title>
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
        <legend align="center"><h1>Change Work chart Employee</h1></legend>
		 
		    <form action="" method="post">
			   <table align="center">
			       
			   <tr>
			         <td><input type="hidden" name="id" value="<?php echo $employee["id"];?>"></td> 
					 </tr>
			           
					  
					  <tr>
					        <td><span><b>Working Time:</b></span></td>
							<td><input type="datetime-local" size="" name="working_time" value="<?php echo  $employee["working_time"];?>" placeholder="Time"><br>
							<span><?php echo $err_working_time;?></span></td>
					</tr>	

					<tr>
				             <td><input type="submit" name="employe_workchart"value="Update Employee Data"></td>
				    </tr>    
							
					       
				</table>
             </form>
			 <div>
		 </fieldset>
		 </body>
		 
</html>