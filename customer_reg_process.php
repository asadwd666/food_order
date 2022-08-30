<?php
error_reporting(0);
include("connection.php");
$username=$_POST['username'];
$password=$_POST['password'];
$name=$_POST['name'];


$address=$_POST['address'];

$city=$_POST['city'];
$contact=$_POST['contact'];

$email=$_POST['email'];
$reg_date=date('d-m-y');
$insert=mysql_query("insert into customers (username, password, name, dob, father_name, address, country, city, contact_no, email, reg_date) 
values ('".$username."','".$password."','".$name."'','".$address."','".$country."','".$city."','".$contact."','".$email."','".$reg_date."')");
if($insert){
	header("location:index.php?ptype=register&flage=reg_success");
}else
{
	echo"error";
}
?>