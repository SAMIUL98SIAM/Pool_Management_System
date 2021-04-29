<?php
    require_once 'models/db_config.php' ;		
      
	  $name="";
	$err_name="";
	  
	 $uname="";
	 $err_uname="";
	 $mail="";
	 $err_mail="";
	 $hasError=false;
	 
	 
	 session_start();
    $myid= $_SESSION["customerId"];


    $query="select * from users where id='$myid'";
    $result= get($query);
	$name=$result[0]["name"];
    $uname=$result[0]["uname"];
    $mail=$result[0]["mail"];
    
	
	 
	  function validEmail($mail)
	 {
		 $pos_at=strpos($mail,"@");
		 $pos_dot=strpos($mail,".",$pos_at+1);
		   if($pos_at < $pos_dot)
		   {
			   return true;
		   }
		 
	 }  
	 
	 if(isset($_POST["update_customer"]))
	 {
		if (empty($_POST["name"]))
			{
				$err_name="**Name Required";
				$hasError = true;
			}
			else
			{
				$name=$_POST["name"]; //$uname = htmlspecialchars($_POST["uname"]);
			}
			
            if (empty($_POST["uname"])){
				$err_uname="Username Required";
				$hasError=true;
			}
			elseif (strlen($_POST["uname"])<6){
				$err_uname="Username must contain at least 6 characters ";
				$hasError=true;
			}
            elseif (strpos($_POST["uname"]," ")) {
				$err_uname="space is not allowed";
				$hasError=true;
			}
			else
			{
				$uname=htmlspecialchars($_POST["uname"]);
				
			}
            
			 if(empty($_POST["mail"]))
		    {
			 $err_mail="Email Required";
			 $hasError=true;
		    }
		     elseif(!validEmail($_POST["mail"]))
		    {
			 $err_mail="Not a valid Email";
			 $hasError=true;
		    }
            else
		   {
			$mail=htmlspecialchars($_POST["mail"]);
		   }
			 

	
	if(!$hasError)
        {
            $query="UPDATE users SET name='$name', uname='$uname', mail ='$mail' WHERE id= '$myid'" ;
            
            if(!execute($query))
            {
                echo " Profile Updated";
            }
            else{
                echo "Can not update profile";
            }    
            
        }
	}
	

	 
?>