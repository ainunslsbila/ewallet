<?php
   require_once("connect.php");
   $username = $_POST['username'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $cekuser = mysql_query("SELECT * FROM user WHERE username = '$username'");
   if(mysql_num_rows($cekuser) > 0) {
     echo "<div align='center'>Username Sudah Terdaftar! <a href='daftar.php'>Back</a></div>";
     } else {
     if(!$username || !$email || !$password) {
       echo "<div align='center'>Masih ada data yang kosong!><a href='daftar.php'>Back</a>";
     } else {
       $simpan = mysql_query("INSERT INTO user(username, email, password) VALUES('$username','$email','$password')");
       if($simpan) {
         echo "<div align='center'>Successful Registration, Silahkan <a href='login.php'>Login</a></div>";
       } else {
         echo "<div align='center'>Proces Failed!</div>";
       }
     }
   }
?>