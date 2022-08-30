<?php
session_start();
include("connection.php");
function items()
{
	
	$get=mysql_query("select * from shopping_cart where ip='".$_SESSION['ip']."'");
	while($items=mysql_fetch_array($get)){
		$total_items+=$items['quantity'];
	}
	

	
echo "&nbsp;<font color=red>Qty.".$total_items."</font>"; 
	
}
function total_price()
{
$total=0;

$categories=mysql_query("select * from shopping_cart inner join products on shopping_cart.product_id=products.product_id where shopping_cart.ip='".$_SESSION['ip']."'");
$i=1;
while($fetch=mysql_fetch_array($categories)){
$total+=$fetch['unit_price']*$fetch['quantity'];
	

}
echo "&nbsp;Rs.".$total;


}
?>