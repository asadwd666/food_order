<script>
function sure(){
	if(confirm("Are You realy want to delete the product..")){
		return true;
	}else{
		return false;
	}
}
function deliver(){
 if(confirm("Are You realy want to Deliver This Order")){
		return true;
	}else{
		return false;
	}
}

</script>

<h2>Orders Management... </h2>
<table align=center cellpadding=10 border="1" width=95% class="tbl">

<tr>
<th>S.No</th><th>Customer Name</th><th>Contact No</th><th>City</th><th>Delivery Address</th><th>Total Payable</th><th>Status</th><th colspan=4>Action</th>
</tr>
<?php
include("connection.php");
$categories=mysql_query("select * from customers inner join orders on customers.cust_id=orders.cust_id");
$i=1;
while($fetch=mysql_fetch_array($categories)){

?>
<tr>
<td><?php echo $i; ?></td><td><?php echo $fetch['name']; ?></td><td><?php echo $fetch['contact_no'];?></td><td><?php echo "Buner";?></td><td><?php echo $fetch['address'];?></td><td><?php echo $fetch['total_amount'];?></td><td><?php echo $fetch['status'];?></td>
<td>
<?php 
if($fetch['status']=="Delivered"){
	echo"<font color=green>Delivered</font>";
}else{
	?>
<a href="edit_order.php?order_id=<?php echo $fetch['order_id'];?>" onClick="return deliver()">Deliver</a>
<?php
}
?>
</td>
<td><a href="delete_order.php?order_id=<?php echo $fetch['order_id'];?>" onClick="return sure()">Delete</a></td>
<td><a href="index.php?ptype=order_detail&order_id=<?php echo $fetch['order_id'];?>">Details</a></td>
<td><a href="print.php?order_id=<?php echo $fetch['order_id'].'&cust_id='.$fetch['cust_id'];?>">Print</a></td>
</tr>
<?php
$i++;
}
?>

</table>