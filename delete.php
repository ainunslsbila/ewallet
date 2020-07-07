<?php 
include "connect.php"; 
$id = $_GET['id']; 
 
$query = "DELETE FROM user_balance_history WHERE id = $id"; 
mysqli_query($kon, $query); 
 
?> 
<script language="JavaScript"> 
document.location='index2.php'</script> 
<?php 
?>