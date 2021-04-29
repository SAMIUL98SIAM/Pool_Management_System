 <?php
 include '../Model/db_con.php';
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
            else{
                $pool_name=htmlspecialchars($_POST["pool_name"]);
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

           

            if(empty($_POST["address"]))
		    {
			 $err_stad="Street Name Required";
			 $hasError=true;
		   }
		   else
		   {
			 $stad=htmlspecialchars($_POST["address"]);
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
		debugger;
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
        <legend align="center"><h1>Add Pool </h1></legend>
       
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

 
































 
  <?php
  
  $conn=mysqli_connect('localhost','root','','adminaddpool');
  if (isset($_POST['insert']))
  {
	  $pool_name=$_POST['pool_name'];
	  $email=$_POST['email'];
	  $price=$_POST['price'];
	  
	  
	  $insert="INSERT INTO ipooladdpool (pool_name,owner_email,price) VALUES ('$pool_name','$email','$price')";
	  $run_insert=mysqli_query($conn,$insert);
	  
	  
  }
  
  ?>
		
		
		
    </fieldset>
   
 	
</body>
</html>