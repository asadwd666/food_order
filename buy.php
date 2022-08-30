<?php
session_start();
	include("connection.php");
	if($_REQUEST['pro_id']!="" and $_SESSION['ip']!='')
	{
	$select_check=mysql_query("select * from shopping_cart where product_id='".$_REQUEST['pro_id']."' AND ip='".$_SESSION['ip']."'");
	$count1=mysql_num_rows($select_check);
if($count1>0)
	{
		header("location:index.php?page=products&cate_id=".$_REQUEST['cate_id']."&flage=added");
	}
	else{
		$add=mysql_query("INSERT INTO shopping_cart(product_id, quantity, total_price, ip) VALUES('".$_REQUEST['pro_id']."','1','".$_REQUEST['price']."', '".$_SESSION['ip']."')");
	  if($add){
		  header("location:index.php?page=products&flage=yes&cate_id=".$_REQUEST['cate_id']);
	  }
	  {
		  echo"error";
	  }
	}
}
?>