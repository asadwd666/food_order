<?php
include("connection.php");
$edit=mysql_query("update orders set status='Delivered' where order_id='".$_GET['order_id']."'");
if($edit){
	header("location:index.php?ptype=manage_orders");
}else{
	echo"error";
}

?>