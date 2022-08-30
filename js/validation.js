function validate(){
	
	var name=document.getElementById("name").value;

	
	var paddress=document.getElementById("address").value;
	
	var city=document.getElementById("city").value;
	var contact_no=document.getElementById("contact").value;
	var email=document.getElementById("email");
	var filter=/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if(name==''){
		alert("Please Enter Your Name..");
		document.getElementById('name').style.borderColor = "red";
		return false;
	}else if(Number(name)){
		alert("Name should not be number");
		document.getElementById('name').style.borderColor = "red";
		return false;
	}else if(contact_no==''){
		alert("Please Enter Contact No");
		document.getElementById('contact').style.borderColor = "red";
		return false;
	}else if(!Number(contact_no)){
		alert("Contact number should be number");
		document.getElementById('contact').style.borderColor = "red";
		return false;
	}else if(city==''){
		alert("Please Enter Your City Name");
		document.getElementById('city').style.borderColor = "red";
		return false;
	}else if(paddress==''){
		alert("Please Enter Permanent Address");
		document.getElementById('address').style.borderColor = "red";
		return false;
	}else if(Number(paddress)){
		alert("Address Should not be number");
		document.getElementById('address').style.borderColor = "red";
		return false;
	}else if(email==''){
		alert("Please Enter Email");
		document.getElementById('email').style.borderColor = "red";
		return false;
	}else if (!filter.test(email.value)) {
    alert('Please Enter a valid email address');
	document.getElementById('email').style.borderColor = "red";
   email.focus;
   return false;
	}
}