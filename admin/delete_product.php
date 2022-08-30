<?php

include("connection.php");
$delete=mysql_query("delete from products where product_id='".$_GET['product_id']."'");
if($delete){
	header("location:index.php?ptype=manage_products");
}else{
	echo"error";
}

?>