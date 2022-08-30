<?php
error_reporting(0);
session_start();
include("connection.php");
$username=$_POST['username'];

$name=$_POST['name'];

$city=$_POST['city'];
$contact_no=$_POST['contact_no'];
$email=$_POST['email'];
$reg_date=date('d-m-y');
$p_address=$_POST['address'];
$contact_no=$_POST['contact'];
$update=mysql_query("update customers set username='".$username."', name='".$name."', 
address='".$p_address."', city='".$city."', contact_no='".$contact_no."', email='".$email."', reg_date='".$reg_date."' where cust_id='".$_SESSION['cust_id']."'");
if($update){
	
	header("location:index.php?page=myaccount&accpage=update_shipping_details&flage=updated");
}else{
	echo "error".$_POST['cust_id'];
}
?>