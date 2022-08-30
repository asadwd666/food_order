<?php
session_start();
$_SESSION['name']='';
$_SESSION['pass']='';
session_destroy();
header("location:login.php");


?>