  <?php
        $em_name="";
        $err_emname="";
        $email="";
        $err_email="";
		$amount="";
		$err_amount="";
		$month="";
		$err_month="";
		$designation="";
		$err_designation="";
        
		
		if($_SERVER['REQUEST_METHOD']=='POST'){
            
            if(empty($_POST["em_name"])){
                $err_emname="*Employee name Required";
                
            }
            else if(strlen($_POST["em_name"]) <8){
                $err_emname="*Employee name should be at least 8 characters";
                ;
            }
            else{
                $emname=htmlspecialchars($_POST["em_name"]);
            }
            

            if(empty($_POST["email"])){
               $err_email="*Please enter email";
            }

            else{
                $s=strpos($_POST["email"],"@");
                if($s!=false){
                    $t=strpos($_POST["email"],".", $s+1);
                    if($t!=false){
                        $email=$_POST["email"];
                    }
                    else{
                        $err_email="*Invalid email";
                    }
                }
                else{
                    $err_email="*Invalid email";
                }
            }

           

           
	       if(empty($_POST["amount"]))
		   {
			 $err_amount="*Paid Amount Required";
			 $hasError=true;
		   }
		   else
		   {
			 $amount=htmlspecialchars($_POST["amount"]);
		   }
             
			 
			 
			 
			 if(empty($_POST["month"]))
		   {
			 $err_month="*Paid Month Required";
			 $hasError=true;
		   }
		   else
		   {
			 $month=htmlspecialchars($_POST["month"]);
		   }
             if(empty($_POST["designation"]))
		   {
			 $err_designation="* Designation Required";
			 $hasError=true;
		   }
		   else
		   {
			 $designation=htmlspecialchars($_POST["designation"]);
		   }




           
        }
    ?>


<html>
<body>
<script>
function get(id){
			return document.getElementById(id);
		}
		function validate(){
			refresh();
			var hasError=false;
			
			if(get("em_name").value == ""){
				get("err_emname").innerHTML = "*Employee name Required";
				get("err_emlname").style.color = "red";
				hasError = true;
			}
			if(get("amount").value == ""){
				get("err_amount").innerHTML = "*Paid Amount Required";
				get("err_amount").style.color = "blue";
				hasError = true;
			}
			if(get("designation").value == ""){
				get("err_designation").innerHTML = "*Designation Required";
				get("err_designation").style.color = "blue";
				hasError = true;
			}
			
			if(get("email").value == ""){
				get("err_email").innerHTML = "*Employees Email Required";
				get("err_email").style.color = "red";
				hasError = true;
			}
				if(get("month").value == ""){
				get("err_month").innerHTML = "*Paid Month Required";
				get("err_month").style.color = "blue";
				hasError = true;
			}
			
			return !hasError;
				
		}
		function refresh(){
			get("err_emname").innerHTML = "";
			get("err_amount").innerHTML = "";
			get("err_designation").innerHTML = "";
			get("err_email").innerHTML = "";
			get("err_month").innerHTML = "";
		}
	</script>
    
    <fieldset>
        <legend align="center"><h1>Salary Distribution </h1></legend>
       
            <table>
			<form action="" onsubmit="return validate()" method="post">
			        Employee Name:<input type="text" name="em_name" id="em_name" value=" <?php echo $em_name; ?>"><span id="err_emname"><?php echo $err_emname; ?></span><br>
			        Paid Amount:<input type="text" name="amount" id="amount" value="<?php echo $amount;?>"><span id="err_amount"><?php echo $err_amount;?></span><br>
			        
                    Designation:<input type="text" name="designation" id="designation" value="<?php echo $designation;?>"><span id="err_designation"><?php echo $err_designation;?></span><br>
			
			     Employee's Email:<input type="text" name="email" id="email"value="<?php echo $email;?>"> <span id="err_email"><?php echo $err_email;?> </span><br>
			   
              Paid Month in number:<input type="text" name="month" id="month"value="<?php echo $month;?>"> <span id="err_month"><?php echo $err_month;?> </span><br>
                
					<tr>
						<td align="center" colspan="2"><input type="submit" name="insert" value="Submit"></td>
				</tr>



            </table>
        </form>
        
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
  <?php
 
  $conn=mysqli_connect('localhost','root','','adminaddpool');
  if (isset($_POST['insert']))
  {
	  $em_name=$_POST['em_name'];
	  $amount=$_POST['amount'];
	  $designation=$_POST['designation'];
	  $email=$_POST['email'];
	  $month=$_POST['month'];
	  $insert="INSERT INTO SALARY_DIS (employee_name,paid_amount,designation,email,month) VALUES ('$em_name','$amount','$designation','$email',$month)";
	  $run_insert=mysqli_query($conn,$insert);
	  
	  
  }
  
  
  
  ?>
		
		
		
    </fieldset>
   

</body>
</html>