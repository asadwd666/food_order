
<?php
session_start();
include("connection.php");

?>
<style>
.hide{
	display:none;
}

</style>
<script>
function sure(){
	if(confirm("Are You Realy Want to Cancel the order?")){
		return true;
	}else{
		return false;
	}
}

</script>
<h3 align=center>My Orders</h3>
<table align=center cellpadding=10 border="1" width=80% id="view_tbl">
<form method="POST" action="index.php?page=process">
<tr>
<th>S.No</th><th>Order No.</th><th>Date</th><th>Total Payable</th><th>Order Status</th><th colspan=2>Action</th>
</tr>
<?php

$order=mysql_query("select * from orders where cust_id='".$_SESSION['cust_id']."'");
$i=1;
while($data=mysql_fetch_array($order)){


?>
<tr>
<td><?php echo $i;?></td><td><?php echo $data['order_id']?></td><td><?php echo $data['order_date']?></td><td><?php echo $data['total_amount']?></td><td><?php echo $data['status']?></td>
<td><a href="index.php?page=myaccount&accpage=order_details&order_id=<?php echo $data['order_id'];?>">Order Details</a></td>

<td><a href="cancel_order.php?order_id=<?php echo $data['order_id'];?>" onclick="return sure()" class="<?php if($data['status']=="Delivered"){ echo "hide";}else{}?>">Cancel Order</a></td>
</tr>
<?php
$i++;
}
?>


</table>