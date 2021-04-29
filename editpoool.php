  <?php
        $pool_name="";
        $err_poolname="";
        
        $email="";
        $err_email="";
		$price="";
		$err_price="";
        $stad="";
	    $err_stad="";
	    $city="";
	    $err_city="";
		$Typesofpool="";
		$err_Typesofpool="";
		
		if($_SERVER['REQUEST_METHOD']=='POST'){
            
            if(empty($_POST["pool_name"])){
                $err_poolname="*Pool name Required";
                
            }
            else if(strlen($_POST["pool_name"]) <8){
                $err_poolname="*Pool name should be at least 8 characters";
                ;
            }
            else{
                $poolname=htmlspecialchars($_POST["pool_name"]);
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

           

            if(empty($_POST["stad"]))
		    {
			 $err_stad="Street Name Required";
			 $hasError=true;
		   }
		   else
		   {
			 $stad=htmlspecialchars($_POST["stad"]);
		   }
	       if(empty($_POST["price"]))
		   {
			 $err_price="* Price Required";
			 $hasError=true;
		   }
		   else
		   {
			 $city=htmlspecialchars($_POST["price"]);
		   }



            if(($_POST["day"])=="Day"){
				$err_Rday="*Please select Day";
			}
            else{
                $Rday=$_POST["day"];
            }

            if(($_POST["month"])=="Month"){
				$err_Rmonth="*Please select Month";
			}
            else{
                $Rmonth=$_POST["month"];
            }

            if(($_POST["year"])=="Year"){
				$err_Ryear="*Please select Year";
			}
            else{
                $Ryear=$_POST["year"];
            }
			 if(!isset($_POST["Typesofpool"]))
		 {
			 $err_Typesofpool="[This field can not be skipped]";
		 }
		 else
		 {
			 $Typesofpool=$_POST["Typesofpool"];
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
			
			if(get("pool_name").value == ""){
				get("err_poolname").innerHTML = "*Pool name Required";
				get("err_poolname").style.color = "red";
				hasError = true;
			}
			if(get("address").value == ""){
				get("err_address").innerHTML = "*Pool Address Required";
				get("err_address").style.color = "blue";
				hasError = true;
			}
			if(get("price").value == ""){
				get("err_price").innerHTML = "*Price Required";
				get("err_price").style.color = "blue";
				hasError = true;
			}
			
			if(get("email").value == ""){
				get("err_email").innerHTML = "*Owner's Email Required";
				get("err_email").style.color = "red";
				hasError = true;
			}
			
			return !hasError;
				
		}
		function refresh(){
			get("err_poolname").innerHTML = "";
			get("err_address").innerHTML = "";
			get("err_price").innerHTML = "";
			get("err_email").innerHTML = "";
			
		}
	</script>
 


    <fieldset>
        <legend align="center"><h1>Edit Pool </h1></legend>
 <?php
include '../Model/db_con.php';
  $conn=mysqli_connect('localhost','root','','adminaddpool');
  if (isset($_GET['edit'])){
	  $edit_id=$_GET['edit'];
	  $select=" SELECT * FROM  ipooladdpool WHERE id='$edit_id'";
	$run=mysqli_query($conn,$select);
	$row_user= mysqli_fetch_array($run,MYSQLI_ASSOC);
	
	 $user_name=$row_user['pool_name'];
	 $user_email=$row_user['owner_email'];
	 
	  $user_price=$row_user['price'];
  }
 
  
  ?>

		
		
		
		
        
            <table>
                <form action="" onsubmit="return validate()" method="post">
			        Pool Name:<input type="text" name="pool_name" id="pool_name" value=" <?php echo $pool_name; ?>"><span id="err_poolname"><?php echo $err_poolname; ?></span><br>
			        Pool Address:<input type="text" name="address" id="address" value="<?php echo $stad;?>"><span id="err_address"><?php echo $err_stad;?></span><br>
			        Price: <input type="text" name="price" id="price"value="<?php echo $price;?>"> <span id="err_price"><?php echo $err_price;?></span><br>
                    <label for="pool">Types of Pool:</label>
	                <select id="type_pool" name="Typesofpool">
	                     <option disabled selected>Chose One</option>
	                     <option>Fiberglass pool</option>
	                     <option>Concrete pool</option>
	                     <option>Vinyl pool</option>
		                 <option>Variuos</option>
	                  </select><br>
			
			     Owner's Email:<input type="text" name="email" id="email"value="<?php echo $email;?>"> <span id="err_email"><?php echo $err_email;?> </span><br>
			   
			
					<tr>
						<td align="center" colspan="2"><input type="submit" name="insert" value="Add Pool"></td>
				</tr>

		</form>
            </table>
        </form>
        
  <?php
  
  $conn=mysqli_connect('localhost','root','','adminaddpool');
  if (isset($_POST['insert']))
  {
	  $epool_name=$_POST['pool_name'];
	  $eemail=$_POST['email'];
	  $eprice=$_POST['price'];
	  
	  
	  $update="UPDATE ipooladdpool  SET pool_name='$epool_name',owner_email='$eemail',price='$eprice'  WHERE id='$edit_id'";
	  $run_insert=mysqli_query($conn,$update);
	  
	  
  }
  
  
  
  ?>
		
		
		
		
		
		
		<a class =" btn btn-primary" href="Viewuser.php">View User</a>
    </fieldset>
   

</body>
</html>