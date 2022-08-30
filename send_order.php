<?php
$con=mysqli_connect("localhost","root","","food_order");
session_start();


$total_payable=$_SESSION['payable'];

$status="Pending";

$order_date=DATE('y-m-d');

$customer_id=$_SESSION['cust_id'];
$insert="insert into orders (cust_id,order_date,status,total_amount) 
values('".$customer_id."','".$order_date."','".$status."','".$total_payable."')";
$query=mysqli_query($con, $insert);
$order_id=mysqli_insert_id($con);
echo $order_id;
if($query){
	
	$select=mysqli_query($con,"select * from shopping_cart where ip='".$_SESSION['ip']."'");
	while($row=mysqli_fetch_array($select))
	{
		
		$insert_detail=mysqli_query($con,"insert into order_detail(product_id,Qty_ordered,total_price,order_id) 
		values('".$row['product_id']."','".$row['quantity']."','".$row['total_price']."','".$order_id."')");
		if($insert_detail)
		{
			$del_shopingCart=mysqli_query($con,"delete from shopping_cart where ip='".$_SESSION['ip']."'");
			if($del_shopingCart){
			header("location:index.php?page=sucess&or_id=$order_id");
			}
			
		}
	}
}
?>