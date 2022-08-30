<head>
<style>
#product{
	float:left;
	border:1px dashed rgb(28,62,74);
	margin:8px;
	border-radius:10px;
	overflow:hidden;
	
}
#product p{
	text-align:center;
	font-size:20px;
	margin-top:0px;
	margin-bottom:0;
	background:rgb(28,62,74);
	padding:10px 0 10 0;
	color:white;
	border-bottom:1px solid red;
}
#product h3{
	text-align:center;
	background:white;
	padding:10px 0 10 0;
	margin:0;
}
#product h3 a{
	color:black;
	text-decoration:none;
}
#product h3 a:hover{
	color:blue;
	text-decoration:underline;
	
}

</style>

</head>
<div id="left_bar">
		<p> All Categories</p>
			<div id="cat">
				<ul>
				<?php
					   include("connection.php");
					   $categories=mysql_query("select * from category");
					   while($row=mysql_fetch_array($categories))
					   {
					   ?>
						<li><a href="index.php?page=products&cate_id=<?php echo $row['cate_id'];?>"><?php echo $row['category_name'];?></a></li>
						<?php
					   }
				?>
				</ul>
			</div>
		
		</div>
		<div id="contents">
		<h2>
		<?php
		include("connection.php");
		if(isset($_GET['cate_id'])){
			
			
		$categories=mysql_query("select * from category where cate_id='".$_GET['cate_id']."'");
		while($row=mysql_fetch_array($categories))
		{
					  
		echo $row['category_name'];
						
		}
		?>
		</h2>
		<?php
				
				$product=mysql_query("select * from products inner join category on products.cate_id=category.cate_id where products.cate_id='".$_GET['cate_id']."'");
				
		}
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
				if($_REQUEST['flage']=='added')
					{
				?>
				<script>alert("Product is already exist..")</script>
				<?php

					}
					else if($_REQUEST['flage']=='yes'){
				?>
				<script>alert("Product is Added into Cart")</script>
				<?php
					}
				?>
		</div>

