<?php


include("connection.php");


?>
<html>
<head>
<center>
</head>
<body>
<h2>Total Sell report</h2>
<form action="report_detail.php" method="POST">
<input type="date" name="txt" >
<input type="date" name="txt2">


<p>

<input type="submit" name="search"  value="search report">
</p>

</form>
<br><br><br>

<h2>Specific Customer Sell report</h2>
<form action="cust_report.php" method="POST">
<input type="text" placeholder="type customer id here" name="txt" >



<p>

<input type="submit" name="search"  value="search report">
</p>

</form>
</center>
</body>
</html>