
<?php
session_start();
include("connection.php");

?>
<script>
function sure(){
	if(confirm("Are You Realy Want to Delete record")){
		return true;
	}else{
		return false;
	}
}

</script>


<h2>SHOPPING CART</h2>
<table align=center cellpadding=10 border="1" width=80% id="view_tbl">
<form method="POST" action="index.php?page=process">
<tr>
<th>S.No</th><th>Product</th><th>Quantiy</th><th>Total Price</th><th colspan=2>Action</th>
</tr>
<?php
$categories=mysql_query("select * from shopping_cart inner join products on shopping_cart.product_id=products.product_id where shopping_cart.ip='".$_SESSION['ip']."'");
$i=1;
while($fetch=mysql_fetch_array($categories)){
$total+=$fetch['unit_price']*$fetch['quantity'];
?>
<tr>
<td><?php echo $i; ?></td><td><?php echo $fetch['product_name']; ?><br><img src="admin/<?php echo $fetch['img_path'];?>" height=50px width=40px align=top></td>
<td><input type="number" value="<?php echo $fetch['quantity']; ?>" name="qty[]" style="width:30px;"></td>
<td><?php echo $fetch['total_price'];?></td><td><a href="delete_cart.php?del_id=<?php echo $fetch['cart_id'];?>" onClick="return sure()">Delete</a></td>

<input type="hidden" name="pro[]" value="<?php echo $fetch['product_id'];?>">
<input type="hidden" name="price[]" value="<?php echo $fetch['quantity']*$fetch['unit_price']; ?>">

</tr>
<?php
$i++;
}

?>
<input type="hidden" name="total_amount" value="<?php echo $total;?>">
<tr>
<td colspan=3 align=right>Over All Total:</td><td colspan=2 align=left><?php echo $total; ?></td>
</tr>
<tr>

<td colspan=2></td>
<td><input type="submit" value="Update Cart" class="subbtn" name="update"></td>

<td colspan=3><input type="submit" value="Place Order" name="checkout" class="subbtn"></td>
</tr>
</form>
</table>
