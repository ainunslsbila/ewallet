<?php 

include "connect.php"; 
$query=mysqli_query ($kon, "SELECT * FROM user_balance_history")or die (mysqli_error()); 
$jumlah = mysqli_num_rows($query); 
echo "<html>"; 
echo "<head>"; 
echo "<link href='style.css' type='text/css' rel='stylesheet'>"; 
echo "</head>"; 
echo "<title>E-Wallet</title>"; 
echo "<body>"; 
echo "<font color='darkmagenta' face='Arial' size=3><b><br>Mini E-Wallet History</b></font><br><br>"; 
echo "<a href='add.php' style=\"text-decoration: none\"><font face='tahoma' size='1'>Create History</font></a><br>"; 
echo "<br><table  border=\"0\" cellpadding=\"1\" cellspacing=\"1\" bordercolor=\"blue\" bgcolor=\"white\"> 
<tr bgcolor='blue' height=\"30\"><font color='white'>  
     <th align='center'><font color='white' face='Arial' size=2>Id</font></th>         
     <th align='center'><font color='white' face='Arial' size=2>User Balance Id</font></th>         
     <th align='center'><font color='white' face='Arial' size=2>Balance Before</font></th>
     <th align='center'><font color='white' face='Arial' size=2>Balance After</font></th>
     <th align='center'><font color='white' face='Arial' size=2>Activity</font></th>
     <th align='center'><font color='white' face='Arial' size=2>Type</font></th>
     <th align='center'><font color='white' face='Arial' size=2>Ip</font></th>
     <th align='center'><font color='white' face='Arial' size=2>Location</font></th> 
     <th align='center'><font color='white' face='Arial' size=2>User Agent</font></th>
     <th align='center'><font color='white' face='Arial' size=2>Author</font></th>       
     <th align='center'><font color='yellow' face='Arial' size=2>Edit and Delete</font></th> 
</tr>";  
$j=0; 
while ($row=mysqli_fetch_array($query)) {     
    echo "<tr><td align='center' bgcolor='#657FFF'>";
    echo "<font face='Arial' size=1>";
    echo $j+1;
    echo"</font>";
    echo"</td>";     
    echo "<td align='center' bgcolor='#E8D3DF'>";
    echo "<font face='Arial' size=1>";
    echo $row["user_balance_id"];
    echo"</font>";
    echo"</td>";  
    echo "<td align='center' bgcolor='#E8D3DF'>";
    echo "<font face='Arial' size=1>";
    echo $row["balance_before"];
    echo"</font>";
    echo"</td>";      
    echo"<td align='center' bgcolor='#E8D3DF'>";
    echo "<font face='Arial' size=1>";
    echo $row["balance_after"];
    echo"</font>";
    echo"</td>"; 
    echo"<td align='center' bgcolor='#E8D3DF'>";
    echo "<font face='Arial' size=1>";
    echo $row["activity"];
    echo"</font>";
    echo"</td>"; 
    echo"<td align='center' bgcolor='#E8D3DF'>";
    echo "<font face='Arial' size=1>";
    echo $row["type"];
    echo"</font>";
    echo"</td>"; 
    echo"<td align='center' bgcolor='#E8D3DF'>";
    echo "<font face='Arial' size=1>";
    echo $row["ip"];
    echo"</font>";
    echo"</td>"; 
    echo"<td align='center' bgcolor='#E8D3DF'>";
    echo "<font face='Arial' size=1>";
    echo $row["location"];
    echo"</font>";
    echo"</td>"; 
    echo"<td align='center' bgcolor='#E8D3DF'>";
    echo "<font face='Arial' size=1>";
    echo $row["user_agent"];
    echo"</font>";
    echo"</td>"; 
    echo"<td align='center' bgcolor='#E8D3DF'>";
    echo "<font face='Arial' size=1>";
    echo $row["author"];
    echo"</font>";
    echo"</td>";
    echo"<td align='center' bgcolor='#E8D3DF'>"; 
    echo "<a href='edit.php?id=".$row['id']."' style=\"text-decoration: none\" title=\"Edit\"><font face='tahoma' size='1'>Edit</font></a>
    <a href='delete.php?id=".$row['id']."' style=\"text-decoration: none\" title=\"Delete\"><font face='tahoma' size='1'>Delete</font></a>";
    $j++; } 
echo"</table>"; 
echo "</body>"; 
echo "</html>"; 
?>