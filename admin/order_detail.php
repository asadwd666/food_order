<h2>Detail Of Order</h2>
<a href="index.php?ptype=manage_orders" style="margin-left:60;">Go Back</a>
<table cellpadding="8" cellspacing="0" border="1" width="90%" align=center>
		<tr>
			<td> <strong>Name</strong> </td>
			<td> <strong>Photo</strong> </td>
			<td> <strong>unit price</strong> </td>
			<td> <strong>Quantity</strong> </td>
		</tr>
	<?php
		
		include("connection.php");
		$order_id=$_GET['order_id'];
		$details=mysql_query("select * from orders where order_id='".$order_id."'");
		 $fetch_detail=mysql_fetch_array($details);
		$results = mysql_query("SELECT * FROM order_detail inner join products on order_detail.product_id=products.product_id WHERE order_id='$order_id'");
		while($rows = mysql_fetch_array($results))
			{
				echo '<tr class="record">';
				echo '<td>'.$rows['product_name'].'</td>';
				echo "<td><img src='".$rows['img_path']."' height=100 width=100></td>";
				echo '<td>'.$rows['unit_price'].'</td>';
				echo '<td>'.$rows['Qty_ordered'].'</td>';
				echo '</tr>';
			}
	?>
	<?php
				
				echo '<tr class="record">';
				echo '<td colspan=2 align=right><strong>'.'Total Payable'.'</strong></td>';
				
				
				echo '<td colspan=2> &nbsp; <font color="d7585e">'.$fetch_detail['total_amount'].'</font></td>';
				
				echo '</tr>';
			
	?> 
	
</table>
 <p align=center>Order Date:<font color="d7585e"><?php echo $fetch_detail['order_date'];?></font></p>