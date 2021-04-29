function get(id){
    return document.getElementById(id);
}


function validate(){
    cleanUp();
    var hasError=false;
    if(get("email").value == ""){
        get("email").focus();
        get("err_email").innerHTML="Email or Username Required";
        get("err_email").style.color="red";
        hasError=true;
    }
    if(get("password").value == ""){
        get("password").focus();
        get("err_password").innerHTML="Password Required";
        get("err_password").style.color="cyan";
        hasError=true;
    }
    if(!hasError){
        return true;
    }
    return false;
    
}




function cleanUp(){

    get("err_email").innerHTML="";
    get("err_password").innerHTML="";
}