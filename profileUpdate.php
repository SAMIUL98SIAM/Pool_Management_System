<?php

    $name="";
    $username="";
    $password="";
    $gender="";
    $age="";
    $address="";
    $err_name="";
    $err_username="";
    $err_password="";
    $err_gender="";
    $err_age="";
    $err_address="";


    if ($_SERVER ["REQUEST_METHOD"] =="POST"){
        if(empty($_POST["u_name"])){
            $err_name="*Name required";
        }
        else{
            $name=$_POST["u_name"];
        }
        if(empty($_POST["u_username"])){
            $err_username="*username required";
        }
        else{
            $username=$_POST["u_username"];
        }
        if(empty($_POST["password"])){
            $err_password="*password required";
        }
        else{
            $password=$_POST["u_password"];
        }

        if(empty($_POST["u_gender"])){
            $err_gender="*gender required";
        }
        else{
            $gender=$_POST["u_gender"];
        }

        if(empty($_POST["u_age"])){
            $err_age="*Age required";
        }
        else{
            $age=$_POST["u_age"];
        }

        if(empty($_POST["u_address"])){
            $err_address="*Address required";
        }
        else{
            $address=$_POST["u_address"];
        }
    }
?>
<html>
    <head>
    
    </head>
    <body>
    
        <form action="" method="post">
            <table border="2">
                <tr>
                    <td colspan="2" align="center"><span><font color="green" size="25" >Employee Update Profile</font></span></td>
                </tr>


                <tr>
                      <td><span>Name</span></td>
                     <td>:<input type="text" placeholder="Name" value="<?php echo $name;?>" name="u_name">
                    <span><?php echo $err_name;?></span></td>
                </tr>


                <tr>
                      <td><span>User Name</span></td>
                     <td>:<input type="text" placeholder="Username" value="<?php echo $username;?>" name="u_username">
                    <span><?php echo $err_username;?></span></td>
                </tr>

                <tr>
                    <td ><span>Password </span></td>
                    <td>:<input type="password" placeholder="Password" value="<?php echo $password;?>" name="u_password">
                    <span><?php echo $err_password;?></span></td>
                </tr>
                <tr>
                    <td><span>Gender</span></td>
                    <td>:<input type="radio" value="<?php echo $gender;?>" name="u_gender">Male<input type="radio" value="<?php echo $gender;?>" name="u_gender">Female
                    <span><?php echo $err_gender;?></span></td>
                </tr>

                
                    <tr>
                          <td><span>Age</span></td>
                     <td>:<input type="text" placeholder="Age" value="<?php echo $age;?>" name="u_age">
                    <span><?php echo $err_age;?></span></td>
                    </tr> 

                     <tr>
                          <td><span>Address</span></td>
                     <td>:<input type="text" placeholder="Address" value="<?php echo $address;?>" name="u_address">
                    <span><?php echo $err_address;?></span></td>
                     </tr>
                
               
               
                <tr>
                    <td align="center" colspan="2"><input type="submit" value="Update Profile"></td>
                </tr>
                
            </table>
             
            
        </form>







    </body>
</html>


                    