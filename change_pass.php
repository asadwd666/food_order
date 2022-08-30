<script>
function validate(){
	var npass=document.getElementById("npass").value;
	var cpass=document.getElementById("cpass").value;
	if(npass!=cpass){
		alert("New Password and Confirm new Password should be same");
		return false;
	}
}

</script>

<style>
#login{
	border:1px solid black;
	
	width:600px;
}
#login p{
	margin:0;
	padding:20px;
	font-size:22px;
	text-align:center;
	border-bottom:4px solid blue;
}

</style>
<?php
session_start();
include("connection.php");


?>

	
	<fieldset>
	<legend>Change Password</legend>
     <table align=center cellpadding=10px>
	 <tr>
	 <td colspan=2>
	 <?php
	 if(!empty($_POST['npass']) && !empty($_POST['cpass'])){
	 $change_pass=mysql_query("update customers set password='".sha1($_POST['npass'])."' where cust_id='".$_SESSION['cust_id']."'");
	 if($change_pass){
		 echo "<font color=green>Password is Changed</font>";
	 }
	 }else{
		 echo "<font color=red>Please Enter new and cpass</font>";
	 }
	 ?>
	 </td>
	 </tr>
	 <form method="post" action="" onsubmit="return validate()">
	 <?php
	 $select=mysql_query("select * from customers where cust_id='".$_SESSION['cust_id']."'");
	 $fetch=mysql_fetch_array($select);
	 
	 
	 ?>
	 <tr>
	 <td>Username : </td><td><input type="text" name="old_uname" class="txt" value="<?php echo $fetch['username'];?>" readonly=""></td>
	 </tr>
	 <tr>
	 <td>Old Password : </td><td><input type="text" name="old_upass" class="txt" value="<?php echo $fetch['password'];?>" readonly=""></td>
	 </tr>
	 <tr>
	 <td>Enter New Password : </td><td><input type="text" name="npass"  id="npass" class="txt"></td>
	 </tr>
	 <tr>
	 <td>Confirm New Password : </td><td><input type="text" name="cpass" id="cpass" class="txt"></td>
	 </tr>
	 <tr>
	 <td colspan=2 align=center><input type="submit" value="Change Password" class="subbtn"></td>
	 </tr>
	 
	 </table>
	</form>
</fieldset>