<?php
session_start();

if (!isset($_SESSION['username'])) {  // menggunakan 'username' yang sama
   header('Location:auth/login.php');
   exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dashboard</title>
</head>

<body>
   <?php
   // Pastikan menggunakan 'username' sesuai yang disimpan
   echo $_SESSION['username'];
   ?>

   <a href="auth/logout.php">Dasboard</a>
</body>

</html>