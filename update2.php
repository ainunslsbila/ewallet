<?php 
include "connect.php"; 
$id = $_GET['id']; 
 
$user_id = $_POST['user_id'];
$balance = $_POST['balance'];
$topup = $_POST['topup'];
$balance_achieve = $_POST['balance_achieve'];

$query=mysqli_query ($kon, "UPDATE user_balance SET user_id='$user_id', balance_='$balance', topup='$topup', balance_achieve='$balance_achieve' WHERE id='$id'")or die (mysqli_error()); 
if($query) { 
?>
<script language="JavaScript"> 
 document.location='topup.php'</script> 
<?php 
} 
?>