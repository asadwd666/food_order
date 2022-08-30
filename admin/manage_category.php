<script>
function sure(){
	if(confirm("Are You Realy Want to Delete record")){
		return true;
	}else{
		return false;
	}
}

</script>
<?php
include("connection.php");
?>
<h2>Category Management Area</h2>
<fieldset style="width:70%;">
<legend><h3>Add New Category</h3></legend>

	<table align=center cellpadding=10 id="tbl">
	<tr>
	<td colspan=2>
	<?php
	$category=$_POST['category'];
	if(!empty($category))
	{
		$select=mysql_query("select * from category where category_name='".$category."'");
		$count=mysql_num_rows($select);
		if($count>=1){
			echo"<font color=red>This category already exist..</font>";
		}else{
			
			$insert=mysql_query("insert into category (category_name) values ('".$category."')");
			if($insert){
				echo"<font color=black>Category is added successfully..</font>";
			}
		}
	}else{
		echo"<font color=green>Please Enter Category Name...</font>";
	}
	?>
	
	
	</td>
	</tr>
	<form method="POST" action="">
	<tr>
	<td>Category Name</td><td><input type="text" name="category" id="txt"></td>
	</tr>
	<tr>
	<td colspan=2 align=center><input type="submit" value="Add Category"></td>
	</tr>
	</form>
	</table>

</fieldset>
<hr>
<table align=center cellpadding=10 border="1" width=50% class="tbl">

<tr>
<th>S.No</th><th>Category Name</th><th colspan=2>Action</th>
</tr>
<?php
$categories=mysql_query("select * from category");
$i=1;
while($fetch=mysql_fetch_array($categories)){

?>
<tr>
<td><?php echo $i; ?></td><td><?php echo $fetch['category_name']; ?></td><td><a href="delete_cate.php?cate_id=<?php echo $fetch['cate_id'];?>" onClick="return sure()">Delete</a></td>
</tr>
<?php
$i++;
}
?>

</table>

