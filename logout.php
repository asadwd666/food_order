<?php
session_start();
$_SESSION['uname']='';
$_SESSION['cust_id']='';
session_destroy();
header("location:index.php");



?>