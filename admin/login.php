<style>
#login{
	border:1px solid black;
	margin:200px auto;
	width:600px;
	border-radius:10px;
	
	overflow:hidden;
	box-shadow:1px 1px 10px black;
}
#login p{
	background:rgb(55,88,111);
	color:white;
	text-shadow:1px 1px 3px gold;
	margin:0;
	padding:10px;
	font-size:20px;
	border-bottom:4px solid rgb(200,200,200);
	text-align:center;
	border-top-right-radius:10px;
}

</style>
<?php
include("connection.php");

?>
<div id="login">
	<p>Admin Login</p>
	
     <table align=center cellpadding=10px>
	 <tr>
	 <td colspan=2>
	 <?php
	// error_reporting(0);
	 if(!empty($_POST['uname']) && !empty($_POST['upass'])){
	 $select="select * from users where user_name='".$_POST['uname']."' AND user_pass='".$_POST['upass']."'";
	 $query=mysql_query($select);
	 $fetch=mysql_fetch_array($query);
	 $count=mysql_num_rows($query);
	 if($count>=1){
		 session_start();
		 $_SESSION['user_id']=$fetch['user_id'];
		 $_SESSION['name']=$fetch['user_name'];
		 $_SESSION['pass']=$fetch['user_pass'];
		 header("location:index.php");
	 }else{
		 echo"<font color=red>User Not exist..</font>";
	 }
	 }else{
		 echo"<font color=green>Please Fill All fields</font>";
	 }
	 
	 ?>
	 </td>
	 </tr>
	 <form method="post" action="">
	 <tr>
	 <td>Username</td><td><input type="text" name="uname"></td>
	 </tr>
	 <tr>
	 <td>Password</td><td><input type="password" name="upass"></td>
	 </tr>
	 <tr>
	 <td colspan=2 align=center><input type="submit" value="Login"></td>
	 </tr>
	 <tr>
	 <td colspan=2 align=right><a href="pass_recover.php">Forgot Password</a></td>
	 </tr>
	 </table>
	</form>
</div>