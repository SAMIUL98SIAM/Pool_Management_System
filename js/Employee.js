function get(id){
    return document.getElementById(id);
}
function validate(){
    cleanUp();
    var hasError=false;
    if(get("username").value == ""){
        get("username").focus();
        get("err_username").innerHTML="Username Required";
        get("err_username").style.color="red";
        hasError=true;
    }
    if(get("password").value == ""){
        get("password").focus();
        get("err_password").innerHTML="Password Required";
        get("err_password").style.color="red";
        hasError=true;
    }
    if(get("Male").checked == false && get("Female").checked == false){
        get("err_gender").innerHTML="Gender Required";
        get("err_gender").style.color="red";
        hasError=true;
    }
    if(get("email").value == ""){
        get("email").focus();
        get("err_email").innerHTML="Email Required";
        get("err_email").style.color="red";
        hasError=true;
    }
    if(get("address").value == ""){
        get("address").focus();
        get("err_address").innerHTML="Address Required";
        get("err_address").style.color="red";
        hasError=true;
    }
    if(get("number").value == ""){
        get("number").focus();
        get("err_number").innerHTML="Number Required";
        get("err_number").style.color="red";
        hasError=true;
    }
    if(get("working_time").value == ""){
        get("working_time").focus();
        get("err_working_time").innerHTML="Working time Required";
        get("err_working_time").style.color="red";
        hasError=true;
    }
    if(get("role").selected == false && get("role1").selected == false && get("role2").selected == false){
        get("role").focus();
        get("err_role").innerHTML="Role Required";
        get("err_role").style.color="red";
        hasError=true;
    }
    if(!hasError){
        return true;
    }
    return false;
    
}
function cleanUp(){


    get("err_username").innerHTML="";
    get("err_password").innerHTML="";
    get("err_gender").innerHTML="";
    get("err_email").innerHTML="";
    get("err_address").innerHTML="";
    get("err_number").innerHTML="";
    get("err_working_time").innerHTML="";
    get("err_role").innerHTML="";
}

//Ajax

function checkUsername(control)
    {
        var username = control.value;
        
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange=function(){
            if(this.readyState == 4 && this.status == 200){
                var rsp = this.responseText;
                if(rsp == "false"){
                    document.getElementById("err_username").innerHTML = "<br>Not Valid Username";
                    document.getElementById("err_username").style.color = "blue";
                }else{

                    if(get("username").value == ""){
                        get("username").focus();
                        get("username").style.border="0.2px solid blue";
                        get("err_username").innerHTML="Username Required";
                        get("err_username").style.color="red";
                        hasError=true;
                    }
                    else{
                        document.getElementById("err_username").innerHTML = "<br>";
                
                    }
                }
            }
        };
        xhttp.open("GET","checkusernameForEmployee.php?username="+username,true);
        xhttp.send();
    }
    function checkUemail(control)
    {
        var email = control.value;
        
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange=function(){
            if(this.readyState == 4 && this.status == 200){
                var rsp = this.responseText;
                if(rsp == "false"){
                    document.getElementById("err_email").innerHTML = "<br>This email has already exists";
                    document.getElementById("err_email").style.color = "blue";
                }else{

                    if(get("email").value == ""){
                        //get("email").focus();
                        get("email").style.border="0.2px solid blue";
                        get("err_email").innerHTML="Email Required";
                        get("err_email").style.color="red";
                        hasError=true;
                    }
                    else
                    {
                        document.getElementById("err_email").innerHTML = "<br>";
                    }
                    
                }
            }
        };
        xhttp.open("GET","checkmailForEmployee.php?email="+email,true);
        xhttp.send();
    }