<?php
error_reporting(0);
session_start();
$_SESSION['ip']= getHostByName(getHostName());
//echo $_SESSION['ip'];
include("functions.php");
?>

<html>
<head>
<link href="css/styles.css" rel="stylesheet">
<style>

</style>
<script src="js/validation.js"></script>
</head>
<body>

<div class="container">
	<div class="header">
	<!--
	   <div id="reg">
		<a href="index.php?page=login_info"><img src="images/reg.fw.png"></a>
		<a href="index.php?page=login_info">Register</a>
		<p>Click Here Register</p>
		</div>
		-->
		
		<div id="banner">
		<div id="search_area">
		
		<form method="POST" action="index.php?page=search_products">
		
			<span style=""> </span> Search:
			<input type="text" class="txt" name="food_name" placeholder="Food Name">
			
			<input type="submit" value="Search" id="btn">
		</form>
		</div>
		
		
		<div id="items">
		<p style="margin:0;">Loged in : <?php echo $_SESSION['name']; ?></p>
		
	      <?php items(); echo" \t\t\t"; total_price(); ?>
		  <br><a href="index.php?page=shopping_cart" style="color:black;">Shopping Cart</a>
	    </div>
		<!--
		<div style="margin-top:60px; background:white; padding:10px;">
		<marquee onmouseover="this.stop()" onmouseout="this.start()">slkadjflkdsajflkk</marquee>
		</div>
		-->
		</div>
	
		<!--
		<div id="cart">
		
		<a href="index.php?page=shopping_cart"></a>
		
		</div>
		-->
		
		 
	</div>
	<div class="nav_bar">
	<div id="menu_bar">
				<ul>
				<li><a href="index.php">Home</a></li>
				<?php
				if($_SESSION['uname']==''){
				?>
				<li><a href="index.php?page=login_info" >Register</a></li>
				<li><a href="index.php?page=login">Login</a></li>
				<?php
				}else{
				?>
				<li><a href="logout.php">Logout</a></li>
				<li><a href="index.php?page=myaccount">My Account</a></li>
				<?php
				}
				?>
				
				
				<li><a href="index.php?page=shopping_cart"> Cart</a></li>
				<li><a href="index.php?page=contact"  style="border-right:none;">Contact Us</a></li>
				</ul>
				</div>
				
					
	
		
	</div>
	

	<div class="main_body">
	<?php
	error_reporting(0);
	if($_REQUEST['page']==''){
		
		
	
	
	?>
		<div id="left_bar">
		<p>Categories</p>
			<div id="cat">
				<ul>
				<?php
					   
					   $categories=mysql_query("select * from category");
					   while($row1=mysql_fetch_array($categories))
					   {
					   ?>
						<li><a href="index.php?page=products&cate_id=<?php echo $row1['cate_id'];?>"><?php echo $row1['category_name'];?></a></li>
						<?php
					   }
				?>
				</ul>
			</div>
			
		</div>
		<div id="contents">
		<div style="border:0px solid black; float:left; width:100%;">
		<h2>Foods</h2>
			<?php
				
				$product=mysql_query("select * from products");
				while($row=mysql_fetch_array($product)){
				?>
					<div id="product">
					<h4 style="position:absolute; background-color:black;  color:white; padding:10px;" align=center><?php echo $row['product_name'];?></h4>
					<img src="admin/<?php echo $row['img_path'];?>" height=200 width=220>
					<p>PRICE &nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;<?php echo $row['unit_price'];?></p>
					<h3><a href="buy.php?pro_id=<?php echo $row['product_id']."&amp;price=".$row['unit_price']."&amp;cate_id=".$row['cate_id'];?>">Add To Cart</a></h3>
					<h4 style="text-align:center; margin:0; padding:5px;"><a href="index.php?page=food_detail&product_id=<?php echo $row['product_id']?>">Details</a></h4>
					</div>
				<?php 
				}
				?>
				</div>
			
				
				</div>
		</div>
	<?php
	}else if($_REQUEST['page']=='login_info'){
		include("login_info.php");
	}else if($_REQUEST['page']=='shipping_info'){
		include("shipping_info.php");
	}else if($_REQUEST['page']=='shopping_cart'){
		include("shopping_cart.php");
	}else if($_REQUEST['page']=='login'){
		include("login.php");
	}else if($_REQUEST['page']=='products'){
		include("product.php");
	}else if($_REQUEST['page']=='reg_process'){
		include("reg_process.php");
	}else if($_REQUEST['page']=='reg_success'){
		include("reg_success.php");
	}else if($_REQUEST['page']=='myaccount'){
		include("myaccount.php");
	}else if($_REQUEST['page']=='process'){
		include("process.php");
	}else if($_REQUEST['page']=='sucess'){
		include("success.php");
	}else if($_REQUEST['page']=='search_products'){
		include("search_products.php");
	}else if($_REQUEST['page']=='contact'){
		include("contact.php");
	}else if($_REQUEST['page']=='food_detail'){
		include("food_detail.php");
	}
	
	?>
	</div>
</div>
<div class="footer">

Online Food Ordering System
</div>





</body>
</html>