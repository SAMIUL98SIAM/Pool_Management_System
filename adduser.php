<?php


     $fname="";
	 $err_fname="";
     $lname="";
	 $err_lname="";
	 $uname=""; 
	 $err_uname="";
	 $gender="";
	 $err_gender="";
	 $email="";
	 $err_email="";
	 $stad="";
	 $err_stad="";
	 $city="";
	 $err_city="";
	 $num="";
	 $err_num="";
	 $role="";
	 $err_role="";
	 $about="";
	 $err_about="";
	 $hasError=false;
	 
	 
	 
	 function validEmail($email)
	 {
		 $pos_at=strpos($email,"@");
		 $pos_dot=strpos($email,".",$pos_at+1);
		   if($pos_at < $pos_dot)
		   {
			   return true;
		   }
		 
	 }
	 
	  
	 
	 if ($_SERVER["REQUEST_METHOD"] == "POST"){
		
			if (empty($_POST["fname"])){
				$err_fname="First name required";
				$hasError=true;
			}
			else{
				$fname=htmlspecialchars($_POST["fname"]);
			}
			If (empty($_POST["lname"])){
				$err_lname="Last name required";
				$hasError=true;
			}
			else{
				$lname=htmlspecialchars($_POST["lname"]);
			}
            if (empty($_POST["uname"])){
				$err_uname="Username Required";
				$hasError=true;
			}
			elseif (strlen($_POST["uname"])<6){
				$err_uname="Username must contain at least 6 characters ";
				$hasError=true;
			}
            elseif (strpos($_POST["uname"]," ")) {
				$err_uname="space is not allowed";
				$hasError=true;
			}
			else
			{
				$uname=htmlspecialchars($_POST["uname"]);
				
			}
             if(!isset($_POST["gender"]))
			 {
				$err_gender="Gender Required";
				$hasError=true;
			 }
			else
			{
				$gender=htmlspecialchars($_POST["gender"]);
			 }
			 if(empty($_POST["email"]))
		    {
			 $err_email="Email Required";
			 $hasError=true;
		    }
		     elseif(!validEmail($_POST["email"]))
		    {
			 $err_email="Not a valid Email";
			 $hasError=true;
		    }
            else
		   {
			$email=htmlspecialchars($_POST["email"]);
		   }
			 if(empty($_POST["stad"]))
		    {
			 $err_stad="Street Name Required";
			 $hasError=true;
		   }
		   else
		   {
			 $stad=htmlspecialchars($_POST["stad"]);
		   }
	       if(empty($_POST["city"]))
		   {
			 $err_city="City Name Required";
			 $hasError=true;
		   }
		   else
		   {
			 $city=htmlspecialchars($_POST["city"]);
		   }
			 if(empty($_POST["num"]))
		    {
			 $err_num="Number Required";
			 $hasError=true;
		    }
		    elseif(!is_numeric($_POST["num"]))
		   {
			 $err_num="Numaric Value required";
			 $hasError=true;
		    }
		   else
		    {
			 $num=htmlspecialchars($_POST["num"]);
		    }
			if(!isset($_POST["role"]))
		    {
			$err_role="Role required";
			$hasError=true;
		    }
		    else
		    {
		     $role=htmlspecialchars($_POST["role"]);
		    }
			if(empty($_POST["about"]))
			{
			$err_about="Information Required";
			$hasError=true;
		    }
		    else
			{
		    $about=htmlspecialchars($_POST["about"]);
		     }
			 
			if(!$hasError)
		   {
			  header("Location:alluser.php");
		   }



	 }




?>

<html>
      <head>
	  <title>Add User</title>
	      <style>
		  .adduser-div
				{
					
				border:1px solid black;
				margin:auto;
				width:30%;
				margin-top:13%;
				
				}
		  
	       </style>
	  <head>
	  
	     <body>
		 <div class="adduser-div">
      <fieldset>
		<legend align="center"><h1>Add User</h1></legend>
		 
		    <form action="" method="post">
			   <table align="center">
			           <tr>
					        <td><span><b>First Name:</b></span></td>
							<td><input type="text" name="fname" value="<?php echo $fname;?>" size="" placeholder="First Name"><br>
							<span><?php echo $err_fname;?></span></td>
					    </tr>
						
					     <tr>
					        <td><span><b>Last Name:</b></span></td>
							<td><input type="text" name="lname" value="<?php echo $lname;?>" size="" placeholder="Last Name"><br>
							<span><?php echo $err_lname;?></span></td>
					    </tr>
					   
					   <tr>
				           <td><span><b>Username:</b></span></td>
					       <td><input type="text" name="uname" value="<?php echo $uname;?>" placeholder="Username"><br>
						    <span><?php echo $err_uname;?></span></td>
			          </tr>
					  
					    <tr>
					         <td><span><b>gender</b></span></td>
					         <td><input type="radio"  name="gender" value="<?php echo $gender;?>"> <span>Male</span>
					             <input type="radio"  name="gender" value="<?php echo $gender;?>"> <span>Female</span><br>
								 <span><?php echo $err_gender;?></span></td>
				  	   </tr>
					   
						<tr>
					        <td><span><b>Email:</b></span></td>
							<td><input type="text" size="" name="email" value="<?php echo $email;?>" placeholder="Email"><br>
							<span><?php echo $err_email;?></span></td>
					   </tr>
					   <tr>
					        <td><span><b>Address:</b></span></td>
					        <td><input type="text" name="stad" value="<?php echo $stad;?>" placeholder="Street Address"><br>
					        <span><?php echo $err_stad;?></span></td>
					
				       </tr>
				 <tr>
					   <td></td>
					   <td><input type="text" name="city" placeholder = "City" value="<?php echo $city;?>" placeholder = "City" size=""><br>
                           <span><?php echo $err_city;?></span></td>
				</tr>
				
				     <tr>
					           <td><span><b>Number:</b></span></td>
							   <td><input type="text" size="" name="num" value="<?php echo $num;?>" placeholder="Contect Number"><br>
							    <span><?php echo $err_num;?></span></td>
					</tr>	
				
					   <tr>
					       <td><span><b>Role:</b></span></td>
						   <td>
						 <select name="role">
							           <option disabled selected>Choose One</option>
							            <option>Regular User</option> 
							            <option>Administrator</option>
										<option>Modurator</option>	  
										<option>Editor</option>
						</select>
						       <span><?php echo $err_role;?></span></td>
						</tr>
					   <tr>
					          <td><span><b>About:</b></span></td>
					           <td><textarea name="about" placeholder="Info"><?php echo $about;?></textarea><br>
					          <span><?php echo $err_about ?></span></td>
				                 </tr>
					   
				        
					    <tr>
				             <td><input type="submit" name="submit "value="Add User"></td>
				        </tr>    
							
					       
				</table>
             </form>
			 <div>
		 </fieldset>
		 </body>
		 
</html>