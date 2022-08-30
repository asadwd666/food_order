<?php
include("connection.php");

if(isset($_POST['search']))
{
	$txt=$_POST['txt'];
	$txt2=$_POST['txt2'];
	
	$orders=mysql_query("select * from orders where order_date between'$txt' and '$txt2' && status='delivered'");
	
	
}



?>
<table align=center cellpadding=2 border="4" width=95% class="tbl">

<tr>
<th>ORDER ID</th><th>Customer id</th><th>ORDER DATE</th><th>STATUS</th><th>total amount</th>
</tr>


<?php
include("connection.php");

$i=1;
while($fetch=mysql_fetch_array($orders)){

?>

<tr>
<td><?php echo $fetch['order_id']; ?></td><td><?php echo $fetch['cust_id'];?></td><td><?php echo $fetch['order_date'];?></td><td><?php echo $fetch['status'];?></td><td><?php echo $fetch['total_amount']; ?></td>


</tr>
<?php
$i++;
}
?>

</table>



