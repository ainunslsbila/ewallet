<html>
     <head>
         <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
         <title>Mini E-Wallet History</title>
         <link href="style.css" type="text/css" rel="stylesheet">
     </head>
     <body>
         <form action="insert.php" method="POST">
             <div center> <font face="Tahoma" color="green" size="5"><b><br>Create New Balance History</b></font></div>
             <table align="left">
                 <tr>
                     <td><font face="Tahoma" color="black" size="2">User Balance Id</font></td>
                     <td>:</td>
                     <td><input type="text" name="user_balance_id" size="30"></td>
                 </tr> 
 
                 <tr>
                     <td><font face="Tahoma" color="black" size="2">Balance Before</font></td>
                     <td>:</td>
                     <td><input type="text" name="balance_before" size="30"></td>
                 </tr> 

                 <tr>
                     <td><font face="Tahoma" color="black" size="2">Balance After</font></td>
                     <td>:</td>
                     <td><input type="text" name="balance_after" size="30"></td>
                 </tr> 
                 <tr>
                     <td><font face="Tahoma" color="black" size="2">Activity</font></td>
                     <td>:</td>
                     <td><input type="text" name="activity" size="30"></td>
                 </tr>
                 <tr>
                     <td><font face="Tahoma" color="black" size="2">Type</font></td>
                     <td>:</td>
                     <td><input type="radio" name="type" value="Credit">Credit</
                     <td><input type="radio" name="type" value="Debit">Debit</td>
                 </tr>
                 <tr>
                     <td><font face="Tahoma" color="black" size="2">Ip</font></td>
                     <td>:</td>
                     <td><input type="text" name="ip" size="30"></td>
                 </tr>
                 <tr>
                     <td><font face="Tahoma" color="black" size="2">Location</font></td>
                     <td>:</td>
                     <td><input type="text" name="location" size="30"></td>
                 </tr>
                 <tr>
                     <td><font face="Tahoma" color="black" size="2">User Agent</font></td>
                     <td>:</td>
                     <td><input type="text" name="user_agent" size="30"></td>
                 </tr>
                 <tr>
                     <td><font face="Tahoma" color="black" size="2">Author</font></td>
                     <td>:</td>
                     <td><input type="text" name="author" size="30"></td>
                 </tr>

 
                 <tr>
                     <td></td><td></td>
                     <td><input type="submit" value="Update">
                     <font face="Tahoma" color="green" size="2">
                     <a href="index2.php" style="text-decoration:none">Back</font></a>
                     </td>
                 </tr>
             </table>
         </form>
     </body>
 </html>