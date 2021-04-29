<?php 
	  require_once 'controllers/paymentcontroller.php';
?>

<html>
<head>

  <title>ipool-Payment</title>
   
</head>

<body>
  

    <form action="" onsubmit="return validate()" method="post">
    
      <table align = "center" >
      <tr>
      <td><h1>Payment Method (Visa Card)</h1></td>
      </tr>
      </table>
      
      
      <table align = "center">
        <tr>
          <td><lebel>Name</lebel></td>
          <td>:</td>
          <td><input type="text" name="u_name" id="uname" placeholder="Username" value="<?php echo $name;?>"><td><span id= "err_name" ><?php echo $err_name;?></span></td>
        </tr>
        <tr>
          <td><span>Phone</span></td>
          <td>:</td>
          <td><input type="text" name="u_code" id="code" value="<?php echo $code;?>" placeholder="Code" size="3">-<input type="text" name="u_number" id="number" value="<?php echo $number;?>" placeholder = "Number" size="10"> </td><td><span id="err_code"><?php echo $err_code;?></span><span id="err_number" ><?php echo $err_number;?></span></td>
        </tr>
        <tr>
          <td><lebel>Visa Card No</lebel></td>
          <td>:</td>
          <td><input type="text" name="u_card" id="card" placeholder="Card No" value="<?php echo $card;?>"><td><span id="err_card" ><?php echo $err_card;?></span></td>
        </tr>
        <tr>
            <td><lebel>Validation Date</lebel></td>
            <td>:</td>
            <td>
            <select name="u_day">
              <option disabled selected>Day</option>
              <?php
                for($i=1;$i<=31;$i++)
                {
                  echo "<option>$i</option>";
                }
              ?>
              </select>
              <select name="u_month">
              <option disabled selected>Month</option>
              <?php
                $mont= array("January","February","March","April","May","June","July","August","September","October","November","December");
                for($j=0;$j<=count($mont);$j++)
                {
                  
                  echo "<option>$mont[$j]</option>";
                
                }
                
              ?>
            </select>
            <select name="u_year">
              <option disabled selected>Year</option>
              <?php
                for($k=1971;$k<=2040;$k++)
                {
                  echo "<option>$k</option>";
                }
              ?>
            </select>
            </td>
			<td><?php echo "$err_day"."</br>  "."$err_month"." </br> "."$err_year"."</br>"?></td>
        </tr>     


        <tr class="trsbmt">
             <td><input type="submit" name="pay" value="Pay"></td>
        </tr>
      </table>

  <table align = "center" >
      <tr>
      <td><img src="img/payment/visacard.png"/></td>
      </tr>
      </table>
     </form>
    </body>
	<script>
	function get(id){
			return document.getElementById(id);
		}
	function validate(){
			cleanUp();
			var hasError=false;
			
			if(get("uname").value == ""){
				get("err_name").innerHTML="Username Required";
				hasError=true;
				//err_msg += "*Username Required<br>";
			}
			if(get("code").value == ""){
				get("err_code").innerHTML="codes Required";
				hasError=true;
				//err_msg += "*Password Required<br>";
			}
			if(get("number").value == ""){
				get("err_number").innerHTML="number Required";
				hasError=true;
				//err_msg += "*Password Required<br>";
			}
			if(get("card").value == ""){
				get("err_card").innerHTML="card no Required";
				hasError=true;
				//err_msg += "*Password Required<br>";
			}
			if(!hasError){
				return true;
			}
			return false;
			
		}
		function cleanUp(){
			
			get("err_name").innerHTML="";
			get("err_code").innerHTML="";
			get("err_number").innerHTML="";
			get("err_card").innerHTML="";
		}
	</script>
</html>
