<?php
	require_once 'controllers/Employee_controller.php';
    //require_once 'controllers/Customer_controller.php';
	$email=$_GET["email"];
	$res = checkUemailValidity($email);
	echo $res;

?>