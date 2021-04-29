<?php
	//require_once 'controllers/Login_controller.php';
    require_once 'controllers/Employee_controller.php';
	$username=$_GET["username"];
	$res = checkUsernameValidity($username);
	echo $res;

?>