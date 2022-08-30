 <head>
<link href="css/styles.css" rel="stylesheet">
<script type="text/javascript">
function validateForm()
{

var dadres=document.forms["form1"]["daddress"].value;
	if(dadres==null || dadres=="")
	{
		alert("Please Enter delivery address");
		return false;
	}
var pay=document.forms["form1"]["payment"].value;
if(pay==null || pay=="")
	{
	alert("Please Select Payment Method");
	return false;
	}
}
</script>
<style>
body{
	background:#C1E0FF;
	
}
</style>

</head>

<?php
include("connection.php");
session_start();
if(isset($_POST['update'])){
	$pro_id=$_POST['pro'];
	$price=$_POST['price'];
	$q=$_POST['qty'];
	foreach($q as $dix=>$value){
		mysql_query("update shopping_cart set quantity='".$value."', total_price='".$price[$dix]."' where ip='".$_SESSION['ip']."' AND product_id='".$pro_id[$dix]."'");
	?>
	<script>
	
	window.location="index.php?page=shopping_cart";
	</script>
	
	<?php
	}
}
else if(isset($_POST['checkout'])){
	if($_SESSION['cust_id']==''){
		?>
		<script>
		window.location="index.php?page=login&flage=process";
		</script>
		<?php
	}else if($_SESSION['cust_id']!=''){
		
		?>
		<br><br><br><br><br><br><br><br>
		<center>
		<h1 style="color:blue;">Sending...</h1>
		<img src="images/sendingprocess.gif">
		</center>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<script>
		setTimeout(function(){
			window.location="send_order.php?payable=";
	},5000);
		</script>
		<?php
		$_SESSION['payable']=$_POST['total_amount'];
	}
}

?>