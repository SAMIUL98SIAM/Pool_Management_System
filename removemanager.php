<?php

require_once "controllers/Manager_controller.php" ;
$id = $_GET["id"];
$manager = getManagers($id) ;
?>

<html>
      <head>
	  <title>Remove Manager</title>
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
        <legend align="center"><h1>Remove Manager</h1></legend>
		 
		    <form action="" method="post">
			   <table align="center">
			         
			   <tr>
			         <td><input type="hidden" name="id" value="<?php echo $manager["id"];?>"></td> 
					 </tr>
					    
                     <tr>
				           <td><span><b>Username:<b></span></td>
					       <td><input type="text" name="username" value="<?php echo $manager["username"];?>" placeholder="Username"><br>
						    <span><?php echo $err_username;?></span></td>
			          </tr>

				        
					   
				        
					    <tr>
				             <td><input type="submit" name="remove_manager" value="Remove Manager"></td>
				        </tr>    
							
					       
				</table>
             </form>
			 <div>
		  </fieldset>
		 </body>
		 
</html>