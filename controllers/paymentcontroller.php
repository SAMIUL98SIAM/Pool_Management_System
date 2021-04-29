<?php
      require_once 'models/db_config.php';
    
      $name="";
      $err_name="";
  
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
	  $hasError = false;
	
	
	
		if(isset($_POST["pay"]))
		{
			
			if (empty($_POST["u_name"]))
          {
            $err_name="**Name Required";
			$hasError = true;
          }
          else
          {
            $name=$_POST["u_name"];
          }
          if(!is_numeric($_POST["u_code"]))
          {
            $err_code="Code should be numeric";
			$hasError = true;
          }
          else 
          {
            $code=$_POST["u_code"];
          }
          if(!is_numeric($_POST["u_number"]))
          {
            $err_number="Number should be numeric";
			$hasError = true;
          }
          else
          {
            $number = $_POST["u_number"];
          }
          if (!isset($_POST["u_day"]))
          {
            $err_day="Day must be selected";
			$hasError = true;
          }
          else
          {
            $day=$_POST["u_day"];
          }
          if (!isset($_POST["u_month"]))
          {
            $err_month="Month must be selected";
			$hasError = true;
          }
          else
          {
            $month=$_POST["u_month"];
          }
          if (!isset($_POST["u_year"]))
          {
            $err_year="Year must be selected";
			$hasError = true;
          }
          else
          {
            $year=$_POST["u_year"];
          }
              
          if(!is_numeric($_POST["u_card"]))
            {
              $err_card="Card No should be numeric";
			  $hasError = true;
            }
            else 
            {
              $card=$_POST["u_card"];
            }
			
			
		if(!$hasError){
			insertPayment($name,$code,$number,$day,$month,$year,$card);
		}
		
		}
		
		function insertPayment($name,$code,$number,$day,$month,$year,$card){
		$query = "INSERT INTO payment VALUES (NULL,'$name','$code','$number','$day','$month','$year','$card')";
		execute($query);
		}