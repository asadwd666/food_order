<head>
<title>Online Food Ordering System</title>
<?php
error_reporting(0);

include("connection.php");
session_start();
		$cust_id=$_SESSION['cust_id'];
		$order_id=$_GET['order_id'];
	$order=mysql_query("select * from orders where order_id='".$order_id."'");
		$order_record=mysql_fetch_array($order);
				
			
	?> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,widtd=900, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title>List of Passer</title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="widtd: 900px; font-size:16px; font-family:arial;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
<style>
#print_content{
width:auto;
margin:0 auto;
font-size:17px;
letter-spacing:1px;
word-spacing:3px;
line-height:25px;
}

</style>

<head>
<body>
<a href="javascript:Clickheretoprint()">Print</a>
<table align=center width=60%>
<tr>
<td>
<div id="print_content">
<h3 align=center>Order Details</h3>
<div style="text-align:left ;">
	
	<h3>Order No.<u> <?php echo $order_id;?></u></h3>
	<h4>Order Date: <u><?php echo $order_record['order_date'];?> </u></h4>
	<h4>Status: <u><?php echo $order_record['status'];?> </u></h4>
	</div>

<table cellpadding="10" cellspacing="0" border="1" width="100%" align=center>
		<tr>
			<td> <strong>Name</strong> </td>
			<td> <strong>unit price</strong> </td>
			<td> <strong>Quantity</strong> </td>
		</tr>
	<?php
	
		$cust_id=$_SESSION['cust_id'];
		$order_id=$_GET['order_id'];
		$results = mysql_query("SELECT * FROM order_detail inner join products on order_detail.product_id=products.product_id WHERE order_id='$order_id'");
		while($rows = mysql_fetch_array($results))
			{
				echo '<tr class="record">';
				echo '<td>'.$rows['product_name'].'</td>';
				echo '<td>'.$rows['unit_price'].'</td>';
				echo '<td>'.$rows['Qty_ordered'].'</td>';
				echo '</tr>';
			}
	?>
	<?php
				
				echo '<tr class="record">';
				echo '<td><strong>'.'Total Payable'.'</strong></td>';
				echo '<td colspan=2> <font color="d7585e">'.$order_record['total_amount'].'</font></td>';
				
				echo '</tr>';
			
	?> 
	
</table>

</div>

</td>
</tr>
</table>
<a href="index.php?page=myaccount&accpage=myorders">Back</a>