
<?php
include("connection.php");
?>
<h2>Products Management</h2>
<fieldset>
<legend><h3>Add New Product</h3></legend>

	<table align=center  cellpadding=10 width="60%">
	<tr>
	<td colspan=2>
	<?php
	
	$product_name=$_POST['product_name'];
	$unit_price=$_POST['unit_price'];
	$description=$_POST['description'];
	
	$category=$_POST['category'];
	
	
	$product_image=$_FILES['product_image']['name'];
	$temp_loc=$_FILES['product_image']['tmp_name'];
	$dir="products/".$product_image;
	
	if(!empty($product_name) && !empty($unit_price) && !empty($description) && !empty($category) && !empty($product_image))
	{
		move_uploaded_file($temp_loc,$dir);
		
		
		$select=mysql_query("select * from  products where product_name='".$product_name."'");
		$count=mysql_num_rows($select);
		if($count>=1){
			echo"<font color=red>This Product already exist..</font>";
		}else{
			
			$insert=mysql_query("insert into products (product_name, img_path, description, unit_price, cate_id) values ('".$product_name."','".$dir."','".$description."', '".$unit_price."', '".$category."')");
			if($insert){
				echo"<font color=black>Product is added successfully..</font>";
				?>
				
				<script>
				alert("Product is added successfully")
				</script>
				<?php
			}
		}
	
	}else{
		echo"<font color=green>Please Fill All Fields</font>";
	}
	
	?>
	
	
	</td>
	</tr>
	<form method="POST" action="" enctype="multipart/form-data">
	<tr>
	<td>Product Name</td><td><input type="text" name="product_name" id="txt"></td>
	</tr>
	<tr>
	<td>Product Image</td><td><input type="file" name="product_image" id="txt"></td>
	</tr>
	<tr>
	<td>Unit Price:</td><td><input type="text" name="unit_price" id="txt"></td>
	</tr>

	<tr>
	<td>Description: </td><td><textarea name="description" cols="45" rows=5 id="txt"></textarea></td>
	</tr>
	
	<tr>
	<td>Category: </td>
	<td>
	<select name="category" id="txt">
	<option value="">Select Category</option>
	<?php
	$category=mysql_query("select * from category");
	while($row=mysql_fetch_array($category)){
	?>
	<option value="<?php echo $row['cate_id']; ?>"><?php echo $row['category_name'];?></option>
	
	<?php
	}
	?>
	
	
	
	</select>
	</td>
	</tr>
	
	<tr>
	<td colspan=2 align=center><input type="submit" value="Add Product" ></td>
	</tr>
	</form>
	</table>

</fieldset>
<hr>
<script>
function sure(){
	if(confirm("Are You realy want to delete the product..")){
		return true;
	}else{
		return false;
	}
}


</script>

<table align=center cellpadding=10 border="1" width=95% class="tbl">

<tr>
<th>S.No</th><th>Product Name</th><th>Photo</th><th>Unit Price</th><th>Category</th><th colspan=1>Action</th>
</tr>
<?php
include("connection.php");
$categories=mysql_query("select * from products inner join category on products.cate_id=category.cate_id");
$i=1;
while($fetch=mysql_fetch_array($categories)){

?>
<tr>
<td><?php echo $i; ?></td><td><?php echo $fetch['product_name']; ?></td><td><img src="<?php echo $fetch['img_path'];?>" width=200 height=200></td><td><?php echo $fetch['unit_price'];?></td><td><?php echo $fetch['category_name'];?></td>
<td><a href="delete_product.php?product_id=<?php echo $fetch['product_id'];?>" onClick="return sure()">Delete</a></td>

</tr>
<?php
$i++;
}
?>

</table>



