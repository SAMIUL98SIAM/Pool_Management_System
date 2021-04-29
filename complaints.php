	<?php
	require_once 'model.php';
			$name="";
			$nameErr="";
			$email="";
			$emailErr="";
			$complaint="";
			$complaintErr="";
			
			 if ($_SERVER ["REQUEST_METHOD"] =="POST"){
                  if(empty($_POST["name"])){
                      $nameErr="*Name required";
                     }
                   else{
                         $name=$_POST["name"];
                        }
				if(empty($_POST["email"])){
					$emailErr="*Email Required";
				}
				else{
					$email=$_POST["email"];
				}
				
				
				if(empty($_POST["complaint"])){
					$complaintErr="Enter a complaints ";
				}
				
				else{
					$complaint=$_POST["complaint"];
				}

				

  if (isset($_POST['submit'])) {
  $data['name'] = $_POST['name'];
  $data['email'] = $_POST['email'];
  $data['complaint'] = $_POST['complaint'];
  
  

  if (addComplaint($data)) {
    echo 'Successfully added!!';
  }
} 
  else {
      echo 'You are not allowed to access this page.';
}
}


  

			

			
		?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method="post">
			<table border="3">
				<tr>
					<td align="center"><span><font color="green" size="25">Complaint</font></span></td>
				</tr>
				<tr>
  <td>Name</td>
  <td>:</td> 
  <td><input type="text" name="name" id="name" onkeyup="checkName()" onblur="checkName()" value="<?php echo $name?>"></td>
  <td><span class="error" id="nameErr">* <?php echo $nameErr;?></span></td>
</tr>
					
			  <tr>
  <td>E-mail</td>
  <td>:</td>
  <td><input type="email" name="email" id="email" onkeyup="checkEmail()" onblur="checkEmail()" value="<?php echo $email?>"></td>
  <td><span class="error" id="emailErr">* <?php echo $emailErr;?></span></td>
</tr>
				
				<tr>
					<td><span>Complaint </span></td>
					<td>:</td>

						<td><textarea id="complaint" name="complaint" onkeyup="checkComplaint()" onblur="checkComplaint()"  value="<?php echo $complaint;?>" ></textarea></td>
					<td><span  class="error" id="complaintErr">* <?php echo $complaintErr;?></span></td>
					
					
				</tr>
				<tr>
					<td align="center" colspan="2"><input type="submit" name="submit" value="Submit"></td>
				</tr>
				
			</table>
			 
			
		</form>
		<script >
   function checkName() {
  if (document.getElementById("name").value == "") {
        document.getElementById("nameErr").innerHTML = "Name can't be blank";
        document.getElementById("nameErr").style.color = "red";
        document.getElementById("name").style.borderColor = "red";
  }else{
        document.getElementById("nameErr").innerHTML = "";
        document.getElementById("name").style.borderColor = "green";
  }
  
}

function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(document.myform.email.value);
}
function checkEmail() {
   
    if (document.getElementById("email").value == "") 
    {
          document.getElementById("emailErr").innerHTML = "Email can't be blank";
          document.getElementById("emailErr").style.color = "red";
          document.getElementById("email").style.borderColor = "red";
    }
   
    else if(!isEmail(document.getElementById("email").value))
    {
        document.getElementById("emailErr").innerHTML = "Invaild mail";
        document.getElementById("emailErr").style.color = "red";
        document.getElementById("email").style.borderColor = "red";
    }
    else
    {
        document.getElementById("emailErr").innerHTML = "";
        document.getElementById("email").style.borderColor = "green";
    }
    
  }

  function checkComplaint() {
   
    if (document.getElementById("complaint").value == "") 
    {
          document.getElementById("complaintErr").innerHTML = "complaints can't be blank";
          document.getElementById("complaintErr").style.color = "red";
          document.getElementById("complaint").style.borderColor = "red";
    }
  
    else
    {
        document.getElementById("complaintErr").innerHTML = "";
        document.getElementById("complaint").style.borderColor = "green";
    }
    
  }

</script>
</center>
</body>
</html>