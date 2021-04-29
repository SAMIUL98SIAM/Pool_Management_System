<html>
<head>

	<title>ipool-Booking</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div class="fix container_full">
		<div class="fix container">
			<header>
	                <div class="header">
	                    <div class="undrmnu_srch floatright">
	                            <input type="text" value="" name="s" id="input">
	                            <input type="submit" id="searchsubmit" value="Search">                  
	                    </div> 
  						<a href="ipool.html"><img id="header_logo" class="floatleft" src="img/logo.jpg" alt="logo_Image"/></a>
	                    <h2>-Pool Booking</h2>
	                    <img id="star_logo" src="img/star-k-logo.png" alt="Star_Logo"/><span>Certified</span>
  	                </div>
              </header>
		</div>
	</div>
	<div class="container_full">
		<div class="container">
	
		<?php
			$name="";
			$err_name="";
			
			$mail="";
			$err_mail="";
			$code="";
			$err_code="";
			$number="";
			$err_number="";
			$gender="";
			$err_gender="";
			
	
	
		if	($_SERVER["REQUEST_METHOD"]=="POST")
		{
			if (empty($_POST["u_name"]))
			{
				$err_name="**Name Required";
			}
			else
			{
				$name=$_POST["u_name"];
			}
			
			
			
			
			
			if(strpos($_POST["u_mail"],"@"))
			{
				if(strpos($_POST["u_mail"],"."))
				 {$mail=$_POST["u_mail"];}
			}
			else
			{
			 	$err_mail="Email should be contain '@' and '.' sequentially";
			}
			
			if(!is_numeric($_POST["u_code"]))
			{
				$err_code="Code should be numeric";
			}
			else 
			{
				$number=$_POST["u_number"];
			}
			if(!is_numeric($_POST["u_number"]))
			{
				$err_number="Number should be numeric";
			}
			else
			{
				$number = $_POST["u_number"];
			}
			
			
			
			if(!isset($_POST["u_gender"]))
			{
				$err_gender="Please select a gender";
			}
			else
			{
				$gender=$_POST["u_gender"];
			}
			
		echo "Name: ".htmlspecialchars($_POST["u_name"])."<br>";
		
		}
?>

	
		<div class="booking-div">
		<!--<center>-->
		
		<!--<fieldset>-->
		<form class="form" action="" method="post">
		
			<table align = "center" >
			<tr>
			<td><h1 style="font-size: 20px;" align="center">Booking Information</h1></td>
			</tr>
			</table>
			
			
			<table align = "center">
				<tr>
					<td><lebel>Name</lebel></td>
					<td>:</td>
					<td><input type="text" name="u_name" placeholder="Username" value="<?php echo $name;?>"><td><lebel><?php echo $err_name;?></lebel></td>
				</tr>
				<tr>
					<td><lebel>Email</lebel></td>
					<td>:</td>
					<td><input type="text" placeholder="email" name="u_mail" value="<?php echo $mail;?>"> </td><td><lebel><?php echo $err_mail;?></lebel></td>
				</tr>
				<tr>
					<td><span>Phone</span></td>
					<td>:</td>
					<td><input type="text" name="u_code" value="<?php echo $code;?>" placeholder="Code" size="4">-<input type="text" name="u_number" value="<?php echo $number;?>" placeholder = "Number" size="10"> </td><td><lebel><?php echo $err_code;?></lebel><lebel><?php echo $err_number;?></lebel></td>
				</tr>
				<tr>
					<td><lebel>Address</lebel></td>
					<td>:</td>
					<td><input type="text" name="sa" placeholder="Street Address"></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><input type="text" name="city" placeholder = "City" size="6">-<input type="text" name="state" placeholder = "State" size="8"></td>
				</tr>
				<tr>
					<td></td>
					<td><td>
					<input type="text" name="Pocode" placeholder = "Postal/Zip Code">
				</tr>
				<tr>
				<td><lebel>Gender</lebel></td>
				<td>:</td>
				<td><input type="radio" name="u_gender" value="Male"><lebel>Male</lebel>
				<input type="radio" name="u_gender" value="Female"><lebel>Female</lebel></td><td><lebel> <?php echo $err_gender;?></lebel></td><br>
				</tr>
				<tr class="trsbmt">
			       <td><input type="Submit" id="submit_btn" name="submit" value="submit"></td>
				</tr>
			</table>
	<!--//</fieldset>-->
		</form>
		</div>
		<!--</center>-->
	
		</div>
    </div>
    <div class="container_full">
		<div class="container">
			<footer>
				<div class="footer">
					<p>Copyright @2020. All Rights Reserved by ipools.com</p>
					<p>Contact us</p>
				</div>
			</footer>
		</div>
	</div>
<!--<div class="container_full">
	<div class="container">
		
	</div>
</div>--->

</div>

</body>
</html>
