<?php
	require_once "controllers/Login_controller.php" ;
?>
<script src="js/Login.js"></script>
<html>
    <head>
	<title>ipool-Login</title>

    	


		
	<div class="">
	
	<fieldset>
		<form action="" method="post" onsubmit="return validate()">
		<legend align="center"><h1>Login</h1></legend>
	
				<table align="center">
				<tr>
					<td><span><b>Email/Username:</b></span></td>
					<td><input type="text" id="email" value="<?php echo $email;?>" name="email" placeholder="Mail Address/username">
						<span id="err_email"><?php echo $err_email;?></span></td>
				</tr>
				<tr>
					<td><span><b>Password:</b></span></td>
					<td><input type="password" id="password" name="password" value="<?php echo $password;?>" placeholder="Password"><br>
						<span id="err_password"><?php echo $err_password;?></span></td>
				</tr>
				
				<tr>
					<td><input type="submit" name="login" value="Login"></td>
				</tr>
			</table>
	</form>	
	</fieldset>
		</div>
      </div> 	
    </div>

</div>

<script>
		/*function get(id){
			return document.getElementById(id);
		}
		
		
		function validate(){
			cleanUp();
			var hasError=false;
			if(get("email").value == ""){
				get("email").focus();
				get("err_email").innerHTML="Email or Username Required";
				get("err_email").style.color="red";
				hasError=true;
			}
			if(get("password").value == ""){
				get("password").focus();
				get("err_password").innerHTML="Password Required";
				get("err_password").style.color="red";
				hasError=true;
			}
			if(!hasError){
				return true;
			}
			return false;
			
		}
		function cleanUp(){
		
			get("err_email").innerHTML="";
			get("err_password").innerHTML="";
		}*/
	</script>

</body>




</html>
