<?php

   require_once("connect.php");
   $username = $_POST['username'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $sql = "SELECT * FROM user WHERE username = '$username'";
   $query = $kon->query($sql);
   if($query->num_rows != 0) {
     echo "<div align='center'>Username already exist! <a href='daftar.php'>Back</a></div>";
   } else {
     if(!$username || !$email || !$password) {
       echo "<div align='center'>There is still empty data! <a href='daftar.php'>Back</a>";
     } else {
       $data = "INSERT INTO user VALUES (NULL, '$username', '$email', '$password')";
       $simpan = $kon->query($data);
       if($simpan) {
         echo "<div align='center'>Successful Registration, If you want to Login, Click <a href='login.php'>Login</a></div>";
       } else {
         echo "<div align='center'>Proses Gagal!</div>";
       }
     }
   }
?>
<title>Registration</title>
<body>
 <body bgcolor="#CD5C5C"></body>