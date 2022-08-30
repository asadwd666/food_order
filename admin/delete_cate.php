<?php
include("connection.php");
$delete=mysql_query("delete from category where cate_id='".$_GET['cate_id']."'");
if($delete){
	$de_p=mysql_query("delete from products where cate_id='".$_GET['cate_id']."'");
	if($de_p){
	header("location:index.php?ptype=manage_category");
	}
}


?>