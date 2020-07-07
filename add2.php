<html>
     <head>
         <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
         <title>Topup Balancey</title>
         <link href="style.css" type="text/css" rel="stylesheet">
     </head>
     <body>
         <form action="insert2.php" method="POST">
             <table align="left">
                 <tr>
                     <td><font face="Tahoma" color="black" size="2">User  Id</font></td>
                     <td>:</td>
                     <td><input type="text" name="user_id" size="30"></td>
                 </tr> 
 
                 <tr>
                     <td><font face="Tahoma" color="black" size="2">Balance</font></td>
                     <td>:</td>
                     <td><input type="text" id="balance" onkeyup="sum();"/></td>
                 </tr> 
                 <tr>
                     <td><font face="Tahoma" color="black" size="2">Topup</font></td>
                     <td>:</td>
                     <td><input type="text" id="topup" onkeyup="sum();"/></td>
                 </tr> 
                 <tr>
                     <td><font face="Tahoma" color="black" size="2">Balance Achieve</font></td>
                     <td>:</td>
                     <td><input type="text" id="balance_achieve"/></td>
                 </tr>  

<script>
function sum() {
      var txtFirstNumberValue = document.getElementById('balance').value;
      var txtSecondNumberValue = document.getElementById('topup').value;
      var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
      if (!isNaN(result)) {
         document.getElementById('balance_achieve').value = result;
      }
}
</script>

                 <tr>
                     <td></td><td></td>
                     <td>
                     <font face="Tahoma" color="green" size="2">
                     <a href="index.php" style="text-decoration:none">Back</font></a>
                     </td>
                 </tr>
             </table>
         </form>
     </body>
 </html>