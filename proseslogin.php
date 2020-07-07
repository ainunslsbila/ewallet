<?php
   session_start();
   require_once("connect.php");
   $username = $_POST['username'];
   $password = $_POST['password'];   
   $sql = "SELECT * FROM user WHERE username = '$username'";
   $query = $kon->query($sql);
   $hasil = $query->fetch_assoc();
   if($query->num_rows == 0) {
     echo "<div align='center'>Username did'nt exist! <a href='login.php'>Back</a></div>";
   } else {
     if($password <> $hasil['password']) {
       echo "<div align='center'>The password you entered was incorrect! <a href='login.php'>Back</a></div>";
     } else {
       $_SESSION['username'] = $hasil['username'];
       header('location:index.php');
     }
   }
?>
<title>Login Failed</title>
<body>
 <body bgcolor="#CD5C5C"></body>