<style>
#login{
	border:1px solid black;
	margin:200px auto;
	width:600px;
}
#login p{
	margin:0;
	padding:10px;
	font-size:20px;
	border-bottom:4px solid gold;
}

</style>
<?php
include("connection.php");

?>
<div id="login">
	<p>Rcover Password</p>
	
     <table align=center cellpadding=10px>
	
	 <form method="post" action="">
	 <tr>
	 <td>user name</td>
	 <td>
	 <input type="text" name="uname">
	 </td>
	 </tr>
	 <tr>
	 <td>Enter Favorite book name</td><td><input type="text" name="answer"></td>
	 </tr>
	 <tr>
	 <td colspan=2 align=center><input type="submit" value="Recover Password"></td>
	 </tr>
	 
	 </form>
	  <tr>
	  <td>Your password is</td>
	 <td>
	 <?php
	 error_reporting(0);
	 if(!empty($_POST['answer']) && !empty($_POST['uname'])){
	 $select="select * from users where user_name='".$_POST['uname']."' And answer='".$_POST['answer']."'";
	 $query=mysql_query($select);
	 $fetch=mysql_fetch_array($query);
	 }
	 ?>
	 <input type="text"  value="<?php echo $fetch['user_pass'];?>">
	 </td>
	 </tr>
	 <tr>
	 <td colspan=2 align=right><a href="login.php">Click here to go back</a></td>
	 </tr>
	 </table>
	
</div>