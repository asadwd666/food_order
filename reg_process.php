
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<center>
<img src="images/page_loader.gif">
<?php

error_reporting(0);
include("connection.php");
$username=$_POST['username'];
$password=sha1($_POST['password']);
$name=$_POST['name'];


$address=$_POST['address'];

$city=$_POST['city'];
$contact=$_POST['contact'];

$email=$_POST['email'];
$reg_date=date('m-d-y');
$insert=mysql_query("insert into customers (username, password, name, address, city, contact_no, email, reg_date) 
values ('".$username."','".$password."','".$name."','".$address."','".$city."','".$contact."','".$email."','".$reg_date."')");
if($insert){
	?>
		<script>
		setTimeout(function(){
		window.location="index.php?page=reg_success";
		},3000);
		</script>
		<?php
}else
{
	?>
		<script>
		setTimeout(function(){
		window.location="index.php?page=shipping_info";
		},5000);
		</script>
		<?php
}
?>

<br><br><br><br><br><br><br><br><br><br><br><br>
</center>