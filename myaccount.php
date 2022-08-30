<head>
<script>
function sure(){
	if(confirm("are you realy want to delete your account")){
		return true;
	}else{
		return false;
	}
}

</script>
<style>
#right_bar{
	width:19%;
	margin:1%;
	
	
	background:#FFFFD7;
	height:500px;
	
}
#contents{
	width:77%;
	
	background:white;
	

	
	
}
</style>


</head>

<h2 style="text-align:left;">My Account</h2>
	<div id="right_bar" style="float:left;">
		<h3 align=center style="margin:0; padding:10px; background-color:black; color:white;"> Operations</h3>
			<div id="cat">
				<ul >
				<li style="list-style:none;"><a href="index.php?page=myaccount&accpage=myorders">My Orders</a></li>
				<br>
				<li style="list-style:none;"><a href="index.php?page=myaccount&accpage=update_shipping_details">Update Customer Details</a></li>
				<br>
				
				<li style="list-style:none;"><a href="index.php?page=myaccount&accpage=change_password">Change Password</a></li>
				<br>
				<li style="list-style:none;"><a href="index.php?page=myaccount&accpage=delete_acc" onClick="return sure()">Delete Account</a></li>
				</ul>
			</div>
		</div>
		<div id="contents" style="float:right;">
		
		
		<?php
				
				if($_REQUEST['accpage']=='change_password'){
					include("change_pass.php");
				}else if($_REQUEST['page']=='myaccount' && $_REQUEST['accpage']=='update_shipping_details'){
					include("update_acc.php");
				}else if($_REQUEST['accpage']=='delete_acc'){
					include("delete_acc.php");
				}else if($_REQUEST['accpage']=='myorders'){
					include("myorders.php");
				}else if($_REQUEST['accpage']=='order_details'){
					include("order_details.php");
				}
				?>
		</div>

<?php

if($_REQUEST['flage']=='updated'){
	?>
	<script>
	alert("Account is Updated)
	</script>
	<?php
}

?>