<script>
function validate(){
	var uname=document.getElementById("username").value;
	var upass=document.getElementById("password").value;
	var cpass=document.getElementById("cpassword").value;
	if(uname==''){
		alert("Please Enter Username");
		document.getElementById('username').style.borderColor = "red";
		return false;
	}else if(Number(uname)){
		alert("Username name should not be number");
		document.getElementById('username').style.borderColor = "red";
		return false;
	}else if(upass==''){
		alert("please Enter password");
		document.getElementById('password').style.borderColor = "red";
		return false;
	}else if(upass.length<6 || upass.length>15){
		alert("Password will between 6 and 15 characers");
		document.getElementById('password').style.borderColor = "red";
		return false;
	}else if(upass !=cpass){
		alert("Password and cofirm Password should be the same");
		document.getElementById('password').style.borderColor = "red";
		document.getElementById('cpassword').style.borderColor = "red";
		return false;
	}
}

</script>
<h2>Registration</h2>
<br>
<fieldset >
<legend>Login Information</legend>
<br>
<form method="POST" action="index.php?page=shipping_info" onSubmit="return validate()">
<table align=center width=500px cellpadding=15px>
<tr>
<td align=right>User Name &nbsp;<font color=red>*</font></td><td><input type="text" name="username" id="username" class="txt"></td>
</tr>
<tr>
<td align=right>Password &nbsp;<font color=red>*</font></td><td><input type="password"  name="password" id="password"  class="txt"><br>
<span style="font-size:12px;"><font color=red>&nbsp;&nbsp;&nbsp;&nbsp;Password Should be between 6 and 15 character</font></span>
</td>

</tr>

<tr>
<td align=right>Confirm Password &nbsp;<font color=red>*</font></td><td><input type="password" name="cpassword" id="cpassword" class="txt"></td>
</tr>

<tr>
<td colspan=2 align=center><input type="submit" value="Submit" class="subbtn"></td>
</tr>
</table>
</form>
<br><br>
</fieldset>
<br><br><br>
<?php

if($_REQUEST['flage']=='exist'){
	?>
	<script>
	
	alert("username is already exist..");
	</script>
	<?php
}
?>