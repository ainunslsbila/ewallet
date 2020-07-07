<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:index.php'); }
   require_once("connect.php");
?>

<title>Form Login</title>
<body>
 <body bgcolor="#CD5C5C"></body>
<div align='center'>
  <form action="proseslogin.php" method="post">
  <h1>E-Wallet Login</h1>
  <table>
  <tbody>
  <tr><td>Username</td><td> : <input name="username" type="text"></td></tr>
  <tr><td>Password</td><td> : <input name="password" type="password"></td></tr>
  <tr><td colspan="2" align="right"><input value="Login" type="submit"> <input value="Cancel" type="reset"></td></tr>
  <tr><td colspan="2" align="center">Don't Have an Account ? <a href="daftar.php"><b>Register</b></a></td></tr>
  </tbody>
  </table>
  </form>
</div>