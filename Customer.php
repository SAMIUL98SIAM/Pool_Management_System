<?php
	require_once "controllers/Customer_controller.php" ;
    //$username = $_POST["username"] ;
	
?>

<html>
    <head> 
	     <title>Customer</title>
	</head>
	
	    <body>
		<h2>
			<span style="float:right;"><a style="text-decoration:none" href="login.php" target="_self" >Log Out &nbsp</a> </span> 
			</h2><br><br>
			
		    <center><h1>Customer</h1><br/>
			    
			     <?php
				    echo "Hey Mr./Mrs" . $_GET["username"];
				 ?>
			</center>
	
		        
		      <h2 align="center">
					<span><a  style="text-decoration:none" href="updateemployee.php" target="_self" >Booking Pool &nbsp</a> </span>
				    <span><a  style="text-decoration:none" href="chnageworkchartemp.php" target="_self" >Check Payment &nbsp</a> </span>
                    <span><a  style="text-decoration:none" href="chnageworkchartemp.php" target="_self" >Pool Registration &nbsp</a> </span>
                </h2>
		        
		            
	
        </body>
</html>