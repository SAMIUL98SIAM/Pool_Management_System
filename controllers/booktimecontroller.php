<?php
     require_once 'models/db_config.php';
	
	$day="";
	$err_day="";
	$month="";
	$err_month="";
	$year="";
	$err_year="";
	$hour="";
	$err_hour="";
    $min="";
	$err_min="";
	$hasError = false;
	
	if(isset($_POST["book"]))
	{
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
			if (!isset($_POST["u_hour"]))
			{
				$err_hour="hour must be selected";
				$hasError = true;
			}
			else
			{
				$hour=$_POST["u_hour"];
			}
			if (!isset($_POST["u_min"]))
			{
				$err_min="miniute must be selected";
				$hasError = true;
			}
			else
			{
				$min=$_POST["u_min"];
			}
			if(!$hasError){
			insertBooktime($day,$month,$year,$hour,$min);
		}
	}
	function insertBooktime($day,$month,$year,$hour,$min){
		$query = "INSERT INTO booktime VALUES (NULL,'$day','$month','$year','$hour','$min')";
		execute($query);
		}
?>		