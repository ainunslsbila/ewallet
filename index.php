<?php
session_start();
if(!isset($_SESSION['username'])) {
   header('location:login.php'); 
} else { 
   $username = $_SESSION['username']; 
}
?>

<title>Successful Login</title>
<body>
 <body bgcolor="#CD5C5C"></body>
<div align='center'>
   <h1>Welcome to E-Wallet</h1> <b><h2><?php echo $username;?></h2></b> <a href="index2.php"><br><br><br>Go to Mini E-Wallet</br></br></br></a> <a href="index3.php"><br><br><br>Topup Balance</br></br></br></a> <a href="logout.php"><br><br><br>Logout</br></br></br></a>
</div>