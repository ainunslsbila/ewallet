<?php 
require_once("connect.php");
$user_id = $_POST['user_id'];
$balance = $_POST['balance'];
$topup = $_POST['topup'];
$balance_achieve = $_POST['balance_achieve'];

$sql = "SELECT * FROM user_balance WHERE user_id = '$user_id'";
   $query = $kon->query($sql);
   if($query->num_rows != 0) {
   } else {
     if(!$user_id || !$balance || !$topup || !$balance_achieve ) {
       echo "<div align='center'>There is still empty data! <a href='add2.php'>Back</a>";
     } else {
$data= "INSERT INTO user_balance VALUES (NULL, '$user_id', '$balance', '$topup', '$balance_achieve')"; 
 $simpan = $kon->query($data);
       if($simpan) {
         echo "<div align='center'>Successful Topup, If you want to Topup Again Data, Click <a href='topup.php'>Here</a></div>";
       } else {
         echo "<div align='center'>The process is failed!</div>";
       }
     }
   }
?>