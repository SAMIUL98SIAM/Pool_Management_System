<script>
		function get(id){
			return document.getElementById(id);
		}
		
		
		function validate(){
			cleanUp();
			var hasError=false;
			if(get("fname").value == ""){
				get("fname").focus();
				get("err_fname").innerHTML="First name Required";
				get("err_fname").style.color="red";
				hasError=true;
			}
			if(get("lname").value == ""){
				get("lname").focus();
				get("err_lname").innerHTML="Last name Required";
				get("err_lname").style.color="red";
				hasError=true;
			}
			if(get("username").value == ""){
				get("username").focus();
				get("err_username").innerHTML="Username Required";
				get("err_username").style.color="red";
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
			if(get("about").value == ""){
				get("about").focus();
				get("err_about").innerHTML="Information Required";
				get("err_about").style.color="red";
				hasError=true;
			}

			if(!hasError){
				return true;
			}
			return false;
			
		}
		function cleanUp(){
		
		    get("err_fname").innerHTML="";
		    get("err_lname").innerHTML="";
			get("err_username").innerHTML="";
			get("err_email").innerHTML="";
			get("err_address").innerHTML="";
			get("err_number").innerHTML="";
			get("err_about").innerHTML="";
		}
	</script>