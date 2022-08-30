<?php

include("connection.php");
$order_id=$_GET['order_id'];
$delete_order=mysql_query("delete from orders where order_id='".$order_id."'");
if($delete_order){
$delete_details=mysql_query("delete from order_detail where order_id='".$order_id."'");
if($delete_details){
header("location:index.php?page=myaccount&accpage=myorders");
}
}

?>