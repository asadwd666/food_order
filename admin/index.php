
<?php
session_start();
if($_SESSION['name']==''){
	?>
	<script>
	window.location="login.php";
	</script>
	<?php
}

?>

<html>
<head>
<style>
body{
	margin-top:0px;
	margin:0px;
	
}
*{
	font-weight:bold;
}


.container{
	width:80%;
	min-width:1000px;
	background:red;
	height:auto;
	margin:0 auto;
}
.header{
	height:120px;
	width:100%;
	background:#FFFFD7;
	float:left;
	overflow:hidden;
}
.nav_bar{
	height:50px;
	background:black;
	border-bottom:3px solid gold;
	width:100%;
	margin-top:-20px;
	float:left;
	line-height:50px;
	color:white;
	font-weight:bold;
}
.nav_bar ul{
	padding:0;
	margin:0;
	margin-left:200px;
	
}
.nav_bar ul li{
	list-style:none;
	
}
.nav_bar ul li a{
	display:block;
	float:left;
	padding:0 30px 0 30px;
	text-decoration:none;
	color:white;
	font-weight:bold;
	border-right:1px dotted white;
}
.nav_bar ul li a:hover{
	color:gold;
	text-decoration:underline;
}

.main_body{
	width:100%;
	min-width:1000px;
	margin-top:20px;
	float:left;
}
.footer{
	margin-top:10px;
	float:left;
	background:#FFFFD7;
	height:80px;
	width:100%;
	text-align:center;
	line-height:50px;
	border-top:2px solid gold;
}




#txt{
	padding:4px 10px 4px 10px;
	border:1px solid blue;
	margin-left:10px;
}
#btn{
	padding:5px 15px 5px 15px;
	background:linear-gradient(180deg,lightblue,black);
	border:2px solid white;
	color:white;
	border-radius:4px;
	margin-left:10px;
	transition:all 0.5s ease-out;
	font-weight:bold;
}
#btn:hover{
	background:linear-gradient(180deg,gray,rgb(40,30,50));
	cursor:pointer;
}


#contents{
	float:right;
	margin:0;
	margin-left:2%;
	width:76%;
	height:auto;
	
}
h2{
	color:red;
	text-shadow:1px 1px 3px black;
	width:98%;
	padding:10px;
	border-bottom:3px solid gold;
	text-align:center;
}
fieldset{
	border:1px dashed gray;
	border-radius:10px;
	width:75%;
	margin:0 auto;
	
}
legend{
	font-size:24px;
	color:rgb(0,104,132);
	text-shadow:1px 1px 3px gold;
}
.tbl{
	border-collapse:collapse;
	border:1px solid black;
}
</style>
</head>
<body>

<div class="container">
	<div class="header">
	
		
		
		logedin:<?php echo $_SESSION['name'];?>
		 <a href="logout.php" style="margin:20px; float:right;">Logout</a>
		 <h1 align=center style="color:gold; text-shadow:1px 1px 3px black;">Admin Panel</h1>
	</div>
	<div class="nav_bar">
		<ul>
		<li><a href="index.php">Home</a></li>
		
		<li><a href="index.php?ptype=manage_category">Manage Category</a></li>
		<li><a href="index.php?ptype=manage_products">Manage Products</a></li>
		
	<li><a href="index.php?ptype=manage_orders">Manage Orders</a></li>
	<li><a href="index.php?ptype=sell_report">Sale Report</a></li>
	
		</ul>
	</div>
	<div class="main_body">
	<?php
		error_reporting(0);
		if($_REQUEST['ptype']=='dash' || $_REQUEST['ptype']==''){
			include("dashboard.php");
		}else if($_REQUEST['ptype']=='manage_products'){
			include('manage_products.php');
		}else if($_REQUEST['ptype']=='view_products'){
			include('view_products.php');
		}else if($_REQUEST['ptype']=='manage_category'){
			include('manage_category.php');
		}else if($_REQUEST['ptype']=='manage_orders'){
			include('orders.php');
			
			}else if($_REQUEST['ptype']=='sell_report'){
			include('sell_report.php');
			
		}else if($_REQUEST['ptype']=='delivered_orders'){
			include('delivered_orders.php');
		}else if($_REQUEST['ptype']=='order_detail'){
			include('order_detail.php');
		}
		
		
		?>
		
		
		
	</div>
	
</div>
<div class="footer">

Online Food Ordering System
</div>





</body>
</html>