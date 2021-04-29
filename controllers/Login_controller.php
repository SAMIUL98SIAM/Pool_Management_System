<?php
    require_once 'models/db_config.php' ;	
	$fname="";
	 $err_fname="";
     $lname="";
	 $err_lname="";
	 $username=""; 
	 $err_username="";
	 $gender="";
	 $err_gender="";
	 $email="";
	 $err_email="";
	 $stad="";
	 $err_stad="";
	 $city="";
	 $err_city="";
	 $number="";
	 $err_number="";
	 $role="";
	 $err_role="";
	 $about="";
	 $err_about="";
     $address = "" ;
     $err_address = "";
	 $password="";
	 $err_password="";
	 $hasError=false;
	 
	function validateEmail($email)
	{
		$pos_at = strpos($email,"@");
		$pos_dot = strpos($email,".",$pos_at+1);
		if($pos_at < $pos_dot)
		{
			return true;
		}
		return false;
	}
		
	
	
		if (isset($_POST["sign_up"])){
			
            if (empty($_POST["username"])){
				$err_username="Username Required";
				$hasError=true;
			}
			elseif (strlen($_POST["username"])<6){
				$err_username="Username must contain at least 6 characters ";
				$hasError=true;
			}
            elseif (strpos($_POST["username"]," ")) {
				$err_username="space is not allowed";
				$hasError=true;
			}
			else
			{
				$username=htmlspecialchars($_POST["username"]);
				
			}
			if(empty($_POST["password"]))
			{
				$hasError = true ;
				$err_password = "Password required!" ;
			}
			else 
			{
				$password = $_POST["password"] ;
			}
			if(empty($_POST["email"]))
		    {
			 $err_email="Email Required";
			 $hasError=true;
		    }
		    elseif(!validateEmail($_POST["email"]))
		    {
			 $err_email="Not a valid Email";
			 $hasError=true;
		    }
            else
		    {
				$email=htmlspecialchars($_POST["email"]);
		    }
		    /* if (empty($_POST["fname"])){
			$err_fname="First name required";
			$hasError=true;
			    }
				else{
					$fname=htmlspecialchars($_POST["fname"]);
				}
				If (empty($_POST["lname"])){
					$err_lname="Last name required";
					$hasError=true; 
				}
				else{
					$lname=htmlspecialchars($_POST["lname"]);
				}

             if(!isset($_POST["gender"]))
			 {
				$err_gender="Gender Required";
				$hasError=true;
			 }
			else
			{
				$gender=htmlspecialchars($_POST["gender"]);
			 }
			 
			 if(empty($_POST["address"]))
		    {
			 $err_address="address Name Required";
			 $hasError=true;
		   }
		   else
		   {
            $address=htmlspecialchars($_POST["address"]);
		   }
	       if(empty($_POST["city"]))
		   {
			 $err_city="City Name Required";
			 $hasError=true;
		   }
		   else
		   {
			 $city=htmlspecialchars($_POST["city"]);
		   }
			 if(empty($_POST["number"]))
		    {
			 $err_number="Number Required";
			 $hasError=true;
		    }
		    elseif(!is_numeric($_POST["number"]))
		   {
			 $err_number="Numaric Value required";
			 $hasError=true;
		    }
		   else
		    {
			 $number=htmlspecialchars($_POST["number"]);
		    }
	
			if(!isset($_POST["role"]))
		    {
			$err_role="Role required";
			$hasError=true;
		    }
		    else
		    {
		     $role=htmlspecialchars($_POST["role"]);
		    }
			if(empty($_POST["about"]))
			{
			$err_about="Information Required";
			$hasError=true;
		    }
		    else
			{
		        $about=htmlspecialchars($_POST["about"]);
		    }*/
		   if(!$hasError)
		   {
			
			
			  //insertUser($username,$email,$password,$type);
		   }
		   insertUser($fname,$lname,$username,$password,$gender,$email,$address,$number,$about);
		}


		if(isset($_POST["login"]))
		{
			if (empty($_POST["email"])){
				$err_email="Email Required";
				$hasError=true;
			 }
			elseif(!validateEmail($_POST["email"]))
			{
				$err_email="Not a valid email";
				$hasError=true;
			}
			else
			{
				$email=htmlspecialchars($_POST["email"]);
			}
			if(empty($_POST["password"]))
			{
				$hasError = true ;
				$err_password = "Password required!" ;
			}
			else 
			{
				$password = $_POST["password"] ;
			}
			if(isset($_POST['login']))
			{
				if(authentication($email,$password))
				{
					header("Location: admin.php") ;
				}
				if(authentication1($email,$password))
				{
					header("Location: Manager.php") ;
				}
				if(authentication2($email,$password))
				{
					header("Location: Customer.php") ;
				}
				echo "Invalid username or password" ;
			}
		}



	function insertUser($fname,$lname,$username,$password,$gender,$email,$address,$number,$about)
		{
			$query = "INSERT INTO customer VALUES (NULL,'$fname','$lname','$username','$password','$gender','$email','$address','$number','$about')" ;
			echo $query ;
			execute($query) ;
			header("Location: login.php");
		} 
	/*function insertUser($username,$email,$password,$type)
    {
        $query = "INSERT INTO user VALUES (NULL,'$username','$email','$password','$type')" ;
        echo $query ;
        execute($query) ;
		header("Location: login.php");
    }*/
	function authentication($email,$password)
    {
        $query = "select * from user where email='$email' and password='$password'";
        $result = get($query) ;
        if(count($result)>0)
        {
            return $result[0] ;
        } 
        return false ;   
    }
	function authentication1($email,$password)
    {
        $query = "select * from manager where email='$email' and password='$password'";
        $result = get($query) ;
        if(count($result)>0)
        {
            return $result[0] ;
        } 
        return false ;   
    }
	function authentication2($email,$password)
    {
        $query = "select * from customer where email='$email' and password='$password'";
        $result = get($query) ;
        if(count($result)>0)
        {
            return $result[0] ;
        } 
        return false ;   
    }
	///Ajax
	function checkUsernameValidity($username)
	{
		$query = "select * from customer where username='$username'";
		$result=get($query);
		if(count($result) > 0){
			return "false";
		}
		return "true";
	}
	function checkUemailValidity($email){
		$query = "select * from customer where email='$email'";
		$result=get($query);
		if(count($result) > 0){
			return "false";
		}
		return "true";
	}
?>
