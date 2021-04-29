<?php
	//require_once 'controllers/Login_controller.php';
    require_once 'controllers/Manager_controller.php';
	$email=$_GET["email"];
	$res = checkUemailValidity($email);
	echo $res;

?>