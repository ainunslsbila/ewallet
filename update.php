<?php 
include "connect.php"; 
$id = $_GET['id']; 
 
$user_balance_id = $_POST['user_balance_id'];
$balance_before = $_POST['balance_before'];
$balance_after = $_POST['balance_after'];
$activity = $_POST['activity'];
$type = $_POST['type'];
$ip = $_POST['ip'];
$location = $_POST['location'];
$user_agent = $_POST['user_agent'];
$author = $_POST['author'];
 
$query=mysqli_query ($kon, "UPDATE user_balance_history SET user_balance_id='$user_balance_id', balance_before='$balance_before', balance_after='$balance_after', activity='$activity', type='$type', ip='$ip', location='$location', user_agent='$user_agent', author='$author' WHERE id='$id'")or die (mysqli_error()); 
 
if($query) { 
?>
<script language="JavaScript"> 
 document.location='index2.php'</script> 
<?php 
} 
?>