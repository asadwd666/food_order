<?php
include("connection.php");
session_start();
$product=mysql_query("select * from products inner join category on products.cate_id=category.cate_id where products.product_id='".$_GET['product_id']."'");
$record=mysql_fetch_array($product);


?>
<style>
.tbl{
	border-collapse:collapse;
}
.tbl td{
	border:1px solid black;
	padding:10px;
}
</style>
<h2>Food Details</h2>
<a href="index.php" style="float:right;">Go Back</a>
<table class="tbl" width=60% align=center >
<tr>
<td>Picture</td><td><img src="admin/<?php echo $record['img_path'] ?>" height=450 width=350></td>
</tr>
<tr>
<td>Food Name</td><td><?php echo $record['product_name'] ?></td>
</tr>
<tr>
<td>Category</td><td><?php echo $record['category_name'] ?></td>
</tr>
<tr>
<td>Unit Price</td><td><?php echo $record['unit_price'] ?></td>
</tr>
<tr>
<td>Description</td><td><?php echo $record['description'] ?></td>
</tr>
</table>