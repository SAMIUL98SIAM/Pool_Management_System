<?php

require_once 'models/db_config.php' ;	
     $fname="";
	 $err_fname="";
     $lname="";
	 $err_lname="";
	 $username=""; 
	 $err_username="";
	 $password="";
	 $err_password="";
	 $gender="";
	 $err_gender="";
	 $email="";
	 $err_email="";
	 $address = "" ;
	 $err_address = "" ;
	 $number="";
	 $err_number="";
	 $role="";
	 $err_role="";
	 $about="";
	 $err_about="";
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
	 
	  
	 
	 if (isset($_POST["manager"])){
		
			if (empty($_POST["fname"])){
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
			 $err_address="Address Name Required";
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
		   if($hasError)
		   {
			
		   }
		   insertManager($fname,$lname,$username,$password,$gender,$email,$address,$number,$role,$about);
            

	 }


     //Insert
     function insertManager($fname,$lname,$username,$password,$gender,$email,$address,$number,$role,$about)
     {
        $query = "INSERT INTO manager VALUES (NULL,'$fname','$lname','$username','$password','$gender','$email','$address','$number','$role','$about')" ;
        echo $query ;
        execute($query) ;
        header("Location: allmanager.php");
     }
  
     
     //Update  
	if(isset($_POST["update_manager"])){
		editManager($_POST["id"],$_POST["fname"],$_POST["lname"],$_POST["username"],$_POST["password"],$_POST["gender"],$_POST["email"],$_POST["address"],$_POST["number"],$_POST["role"],$_POST["about"]);
	}
	function editManager($id,$fname,$lname,$username,$password,$gender,$email,$address,$number,$role,$about){
		$query = "update manager set fname = '$fname', lname ='$lname', username ='$username',password ='$password' ,gender = '$gender', email ='$email', address ='$address', number = '$number' , role = '$role', about ='$about' where id = $id";
		echo $query ;
		execute($query);
		header("Location: allmanager.php");
	} 

   //Delete
   if(isset($_POST["remove_manager"]))
	{
		deleteManager($_POST["id"]); 
	} 
    function deleteManager($id)
	{
		$query = "DELETE FROM manager WHERE id=$id;";
		echo $query;
		execute($query);
		header("Location: allmanager.php");
	} 

    //Viewe
    function getManagers($id)
    {
        $query = "select * from manager where id='$id'" ;
        $result = get($query) ;
        if(count($result)){
            return $result[0] ;
        }
        return false ;
    }
    function getAllManagers()
    {
        $query = "select * from manager" ;
        $result = get($query) ;
        return $result ;
    }
   
    ///Ajax
	function checkUsernameValidity($username){
		$query = "select * from manager where username='$username'";
		$result=get($query);
		if(count($result) > 0){
			return "false";
		}
		return "true";
	}
	function checkUemailValidity($email){
		$query = "select * from manager where email='$email'";
		$result=get($query);
		if(count($result) > 0){
			return "false";
		}
		return "true";
	}
    
	 ////Search
	 function searchManager($key)
	 {
		 $query = "select id,username from manager where username like '%$key%'";
		 $result = get($query) ;
		 return $result ; 
	 }

?>