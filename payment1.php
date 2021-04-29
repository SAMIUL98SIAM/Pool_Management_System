<html>
<head>

  <title>ipool-Payment</title>
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
                      <h2>-Payment (Master Card)</h2>
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
      $day="";
      $err_day="";
      $month="";
      $err_month="";
      $year="";
      $err_year="";
      $card = "";
      $err_card = "";
      
      
      
      
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
          if (empty($_POST["u_name"]))
          {
            $err_name="**Name Required";
          }
          else
          {
            $name=$_POST["u_name"];
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
          if (!isset($_POST["u_day"]))
          {
            $err_day="Day must be selected";
          }
          else
          {
            $day=$_POST["u_day"];
          }
          if (!isset($_POST["u_month"]))
          {
            $err_month="Month must be selected";
          }
          else
          {
            $month=$_POST["u_month"];
          }
          if (!isset($_POST["u_year"]))
          {
            $err_year="Year must be selected";
          }
          else
          {
            $year=$_POST["u_year"];
          }
              
          if(!is_numeric($_POST["u_card"]))
            {
              $err_card="Card No should be numeric";
            }
            else 
            {
              $card=$_POST["u_card"];
            } 
          
        echo "Name: ".htmlspecialchars($_POST["u_name"])."<br>";
        
        }
    ?>
  
    <div class="booking-div mastercrddiv">
    <!--<center>-->
    
    <!--<fieldset>-->
    <form class="form" action="" method="post">
    
      <table align = "center" >
      <tr>
      <td><h1 style="font-size: 20px;" align="center">Payment Method (Master Card) </h1></td>
      </tr>
      </table>
      
      
      <table align = "center">
        <tr>
          <td><lebel>Name</lebel></td>
          <td>:</td>
          <td><input type="text" name="u_name" placeholder="Username" value="<?php echo $name;?>"><td><lebel><?php echo $err_name;?></lebel></td>
        </tr>
        <tr>
          <td><span>Phone</span></td>
          <td>:</td>
          <td><input type="text" name="u_code" value="<?php echo $code;?>" placeholder="Code" size="4">-<input type="text" name="u_number" value="<?php echo $number;?>" placeholder = "Number" size="10"> </td><td><lebel><?php echo $err_code;?></lebel><lebel><?php echo $err_number;?></lebel></td>
        </tr>
        <tr>
          <td><lebel>Master Card No</lebel></td>
          <td>:</td>
          <td><input type="text" name="u_card" placeholder="Card No" value="<?php echo $card;?>"><td><lebel><?php echo $err_card;?></lebel></td>
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
        </tr>     


        <tr class="trsbmt">
             <td><input type="submit" id="submit_btn" name="Pay" value="Pay"></td>
        </tr>
      </table>
  <!--//</fieldset>-->
           <img src="img/payment/mastercard.png"/> 
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
