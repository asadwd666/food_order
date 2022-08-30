<?php
include("connection.php");
$check=mysql_query("select * from customers where username='".$_POST['username']."'");
$fetch=mysql_fetch_array($check);
if($fetch['username']==$_POST['username']){
	?>
	<script>
	window.location="index.php?page=login_info&flage=exist";

	</script>
	<?php
}


?>
<h2>Registration &nbsp;/&nbsp; Login Info &nbsp;/&nbsp; Shipping Info</h2><a href="index.php?page=login_info" style="color:red; float:right;">Go Back</a>

<fieldset >
<legend>Shipping Details</legend>

<form  method="POST" action="index.php?page=reg_process" onSubmit="validateForm()">
<table align=center width=550px cellpadding=15px>
<tr>
<td align=right>Name &nbsp;<font color=red>*</font></td><td><input type="text" name="name" id="name" class="txt" required></td>
</tr>
<tr>
<td align=right>Contact Number &nbsp;<font color=red>*</font></td><td><input type="tel" name="contact" id="contact" class="txt"  pattern="[0-9]{11}"required>
<br><small><font color=red> FORMAT :phone number should be 11 digit</font></small>
</td>
</tr>
<tr>
<td align=right>City :</td>
 <td>
  <b>Buner</b><i style="color:gray;"> (Orders restricted only to Buner)</i>
   </td>
</tr>

<tr>
<td align=right>Shipping Address &nbsp;<font color=red>*</font></td><td><textarea name="address" id="address" class="txt" cols="40" rows="5"required></textarea></td>
</tr>
<tr>
<td align=right>Email Address &nbsp;</td><td><input type="email" name="email" id="email" class="txt" required></td>
</tr>
<input type="hidden" name="username" value="<?php echo $_POST['username'];?>">
<input type="hidden" name="password" value="<?php echo $_POST['password'];?>">
<tr>
<td colspan=2 align=center><input type="submit" value="Submit" class="subbtn"></td>
</tr>

</table>
</form>
<br><br>
</fieldset>
<br><br><br>