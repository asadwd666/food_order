<?php
include("connection.php");
$cart_id=$_GET['del_id'];
mysql_query("delete from shopping_cart where cart_id=$cart_id");
header("location:index.php?page=shopping_cart");


?>