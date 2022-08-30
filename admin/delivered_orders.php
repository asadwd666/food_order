<script>
function sure(){
	if(confirm("Are You realy want to delete the product..")){
		return true;
	}else{
		return false;
	}
}


</script>

<p>Delivered Orders </p>
<table align=center cellpadding=10 border="1" width=95% class="tble">

<tr>
<th>S.No</th><th>Customer Name</th><th>Contact No</th><th>Coountry</th><th>City</th><th>Delivery Address</th><th>Total Payable</th><th>Status</th><th colspan=2>Action</th>
</tr>
<?php
include("connection.php");
$categories=mysql_query("select * from customers inner join orders on customers.cust_id=orders.cust_id where orders.status='Delivered'");
$i=1;
while($fetch=mysql_fetch_array($categories)){

?>
<tr>
<td><?php echo $i; ?></td><td><?php echo $fetch['name']; ?></td><td><?php echo $fetch['contact_no'];?><td><?php echo $fetch['country'];?></td><td><?php echo $fetch['city'];?></td><td><?php echo $fetch['address'];?></td><td><?php echo $fetch['total_amount'];?></td>
<td><?php echo $fetch['status'];?></td>

<td><a href="delete_order.php?order_id=<?php echo $fetch['order_id'];?>" onClick="return sure()">Delete</a></td>
</tr>
<?php
$i++;
}
?>

</table>