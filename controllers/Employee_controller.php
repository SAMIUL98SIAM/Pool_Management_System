<?php
    require_once 'models/db_config.php' ;		
	 $username=""; 
	 $err_username="";
	 $gender="";
	 $err_gender="";
     $email="" ;
     $err_email = "";
	 $password="";
	 $err_password="";
	 $number="";
	 $err_number="";
	 $role="";
	 $err_role="";
     $address = "" ;
     $err_address = "";
     $working_time = "" ;
     $err_working_time = "" ;
	 $hasError=false;
	 
	 
	 
	 function validEmail($email)
	 {
		 $pos_at=strpos($email,"@");
		 $pos_dot=strpos($email,".",$pos_at+1);
		   if($pos_at < $pos_dot)
		   {
			   return true;
		   }
		 
	 }
	 
	 
	 if(isset($_POST["employee"])){
		
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
             if(!isset($_POST["gender"]))
			 {
				$err_gender="Gender Required";
				$hasError=true;
			 }
			else
			{
				$gender=htmlspecialchars($_POST["gender"]);
			 }
			 

             if(!isset($_POST["working_time"]))
			 {
				$err_working_time="working time Required";
				$hasError=true;
			 }
			else
			{
				$working_time=htmlspecialchars($_POST["working_time"]);
			 }
			 if(empty($_POST["email"]))
		    {
			 $err_email="Email Required";
			 $hasError=true;
		    }
		     elseif(!validEmail($_POST["email"]))
		    {
			 $err_email="Not a valid Email";
			 $hasError=true;
		    }
            else
		   {
			$email=htmlspecialchars($_POST["email"]);
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
		    }
			if(!$hasError)
			{
				
			}
			insertEmployee($username,$password,$gender,$email,$number,$working_time,$role,$address);
             
	}

    //insert
    function insertEmployee($username,$password,$gender,$email,$number,$working_time,$role,$address)
    {
        $query = "INSERT INTO employe VALUES (NULL,'$username','$password','$gender','$email','$number','$working_time','$role','$address')" ;
        echo $query ;
        execute($query) ;
        header("Location: allemployee.php");
    }
    
	//update 
    if(isset($_POST["update_employee"])){
		editEmployee($_POST["id"],$_POST["username"],$_POST["password"],$_POST["number"],$_POST["gender"],$_POST["email"],$_POST["working_time"],$_POST["role"],$_POST["address"]);
	}
	function editEmployee($id,$username,$password,$number,$gender,$email,$working_time,$role,$address){
		$query = "update employe set username ='$username', password ='$password', number ='$number', gender ='$gender', email ='$email',  working_time = '$working_time', role = '$role', address ='$address' where id = $id";
		echo $query ;
		execute($query);
		header("Location: allemployee.php");
	}


	
    //delete
    if(isset($_POST["remove_employee"]))
	{
		deleteEmployee($_POST["id"]); 
	} 
    function deleteEmployee($id)
	{
		$query = "DELETE FROM employe WHERE id=$id;";
		echo $query;
		execute($query);
		header("Location: allemployee.php");
	} 

    //view
    function getEmployees($id)
    {
        $query = "select * from employe where id='$id'" ;
        $result = get($query) ;
        if(count($result)){
            return $result[0] ;
        }
        return false ;
    }
    function getAllEmployees()
    {
        $query = "select * from employe" ;
        $result = get($query) ;
        return $result ;
    }


	///Ajax
	function checkUsernameValidity($username){
		$query = "select * from employe where username='$username'";
		$result=get($query);
		if(count($result) > 0){
			return "false";
		}
		return "true";
	}
	function checkUemailValidity($email){
		$query = "select * from employe where email='$email'";
		$result=get($query);
		if(count($result) > 0){
			return "false";
		}
		return "true";
	}
	////Search
    function searchEmployee($key)
	{
		$query = "select id,username from employe where username like '%$key%'";
		$result = get($query) ;
		return $result ; 
	}


?>