<?php 

include "connect.php"; 
$id = $_GET['id']; 
 
$query=mysqli_query($kon, "SELECT * FROM user_balance_history WHERE id='$id'");
while ($row=mysqli_fetch_array($query)){ 
 
$user_balance_id = $row['user_balance_id'];
$balance_before = $row['balance_before'];
$balance_after = $row['balance_after'];
$activity = $row['activity'];
$type = $row['type'];
$ip = $row['ip'];
$location = $row['location'];
$user_agent = $row['user_agent'];
$author = $row['author'];
 
echo "<html>"; 
echo "<body>"; 
echo "<font face='tahoma' color='green' size=4><b>Edit History</b></font>"; 
echo "<table align='left'>"; 
echo "<form method=\"post\" action=\"update.php?id=$id\" enctype='multipart/form-data'>"; 
echo "<br>"; 
echo "<tr><td><font face='Tahoma' color='black' size=2>user_balance_id </font></td><td>:</td><td><input type='text' name='user_balance_id' value='$user_balance_id' size='30'>&nbsp;
</td></tr>"; 
 
echo "<tr><td><font face='Tahoma' color='black' size=2>balance_before</font></td><td>:</td><td><input type='text' name='balance_before' value='$balance_before' size='30'>&nbsp;
</td></tr>";

echo "<tr><td><font face='Tahoma' color='black' size=2>balance_after</font></td><td>:</td><td><input type='text' name='balance_after' value='$balance_after' size='30'>&nbsp;
</td></tr>"; 

echo "<tr><td><font face='Tahoma' color='black' size=2>activity</font></td><td>:</td><td><input type='text' name='activity' value='$activity' size='30'>&nbsp;
</td></tr>"; 

echo "<tr><td><font face='Tahoma' color='black' size=2>type</font></td><td>:</td><td><input type='text' name='type' value='$type' size='30'>&nbsp;
</td></tr>"; 

echo "<tr><td><font face='Tahoma' color='black' size=2>ip</font></td><td>:</td><td><input type='text' name='ip' value='$ip' size='30'>&nbsp;
</td></tr>";

echo "<tr><td><font face='Tahoma' color='black' size=2>location</font></td><td>:</td><td><input type='text' name='location' value='$location' size='30'>&nbsp;
</td></tr>"; 

echo "<tr><td><font face='Tahoma' color='black' size=2>user_agent</font></td><td>:</td><td><input type='text' name='user_agent' value='$user_agent' size='30'>&nbsp;
</td></tr>"; 

echo "<tr><td><font face='Tahoma' color='black' size=2>author</font></td><td>:</td><td><input type='text' name='author' value='$author' size='30'>&nbsp;
</td></tr>";   
 
echo "<tr><td></td><td></td><td><font size='2'><input type='submit' name='submit' value='Update'/></font></td></tr>"; 
echo "</table></form></body></html>"; 
} 
?>