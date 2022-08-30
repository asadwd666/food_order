<?php
include("connection.php");
session_start();
$delete_acc=mysql_query("delete from customers where cust_id='".$_SESSION['cust_id']."'");
if($delete_acc){
?>
<script>

window.location="logout.php";
</script>
<?php
}

?>