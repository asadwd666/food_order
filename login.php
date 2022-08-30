<h2>Login</h2>
<br>
<fieldset >
<legend>Enter Login Details</legend>
<br>

<table align=center width=500px cellpadding=15px>
<tr>
<td colspan=2>
<?php
			session_start();
			include("connection.php");
			$uname=$_POST['username'];
			$upass=$_POST['password'];
			if(!empty($uname) || !empty($upass)){
			$check=mysql_query("select * from customers where username='".$uname."' AND password='".sha1($upass)."'");
			$fetch=mysql_fetch_array($check);
			$count=mysql_num_rows($check);
			if(mysql_num_rows($check)>0){
				$_SESSION['uname']=$fetch['username'];
				$_SESSION['cust_id']=$fetch['cust_id'];
				$_SESSION['name']=$fetch['name'];
				if($_REQUEST['flage']=='process'){
						?>
						<script>
						window.location="index.php?page=shopping_cart";
						</script>
				<?php
				}else{
					?>
					<script>
					window.location="index.php";
					</script>
				<?php
				}
			}else{
				echo"<font color='red'>User Not Exist....</font>";
			}
			}else{
				echo"<font color=green>Please Fill All fields..</font>";
			}
			
			?>

</td>
</tr>
<form method="POST" action="">
<tr>
<td align=right>User Name &nbsp;<font color=red>*</font></td><td><input type="text" name="username" class="txt"></td>
</tr>
<tr>
<td align=right>Password &nbsp;<font color=red>*</font></td><td><input type="password" name="password" class="txt">
<br>
<span style="font-size:12px;"><font color=red>&nbsp;&nbsp;&nbsp;&nbsp;Password Should be between 6 and 15 character</font></span>
</td>

</tr>


<tr>
<td colspan=2 align=center><input type="submit" value="login" class="subbtn"></td>
</tr>
<tr>
<td colspan=2 align=right><a href="index.php?page=login_info">Register</a></td>
</form>
</tr>
</table>

<br><br>
</fieldset>
<br><br><br>