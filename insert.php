<?php 
require_once("connect.php");
$user_balance_id = $_POST['user_balance_id'];
$balance_before = $_POST['balance_before'];
$balance_after = $_POST['balance_after'];
$activity = $_POST['activity'];
$type = $_POST['type'];
$ip = $_POST['ip'];
$location = $_POST['location'];
$user_agent = $_POST['user_agent'];
$author = $_POST['author'];

$sql = "SELECT * FROM user_balance_history WHERE user_balance_id = '$user_balance_id'";
   $query = $kon->query($sql);
   if($query->num_rows != 0) {
     echo "<div align='center'>Username already exist! <a href='add.php'>Back</a></div>";
   } else {
     if(!$user_balance_id || !$balance_before || !$balance_after || !$activity || !$type || !$ip || !$location || !$user_agent || !$author  ) {
       echo "<div align='center'>There is still empty data! <a href='add.php'>Back</a>";
     } else {
$data= "INSERT INTO user_balance_history VALUES (NULL, '$user_balance_id', '$balance_before', '$balance_after', '$activity', '$type', '$ip', '$location', '$user_agent', '$author')"; 
 $simpan = $kon->query($data);
       if($simpan) {
         echo "<div align='center'>Successful Input Data, If you want to Edit and Delete Data, Click <a href='index2.php'>Here</a></div>";
       } else {
         echo "<div align='center'>The process is failed!</div>";
       }
     }
   }
?>