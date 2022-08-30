<?php
include("connection.php");
session_start();
$check=mysql_query("select * from customers where cust_id='".$_SESSION['cust_id']."'");
$fetch=mysql_fetch_array($check);


?>

<fieldset >
<legend>Update Details</legend>

<form method="POST" action="update_query.php" onSubmit="return validate()">
<table align=center width=550px cellpadding=15px>

<tr>
<td align=right>Name &nbsp;<font color=red>*</font></td><td><input type="text" name="name" value="<?php echo $fetch['name'];?>" id="name" class="txt"></td>
</tr>
<tr>
<td align=right>Contact Number &nbsp;<font color=red>*</font></td><td><input type="text" name="contact" value="<?php echo $fetch['contact_no'];?>" id="contact" class="txt"></td>
</tr>
<tr>
<td align=right>City: </td>
<td>
<b>Buner</b><i style="color:gray;"> (Orders restricted only to Buner)</i>
</td>
</tr>

<tr>
<td align=right>Shipping Address &nbsp;<font color=red>*</font></td><td><textarea name="address"  id="address" class="txt" cols="40" rows="5"><?php echo $fetch['address'];?></textarea></td>
</tr>
<tr>
<td align=right>Email Address &nbsp;<font color=red>*</font></td><td><input type="text" name="email" id="email"  value="<?php echo $fetch['email'];?>" class="txt"></td>
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

if($_REQUEST['flage']=='updated'){
	?>
	<script>
	
	alert("Account is Updated");
	</script>
	<?php
}
?>