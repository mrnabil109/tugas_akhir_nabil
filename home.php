
<?php
session_start(); // Memulai sesi

if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fontawesome-free-6.6.0-web/fontawesome-free-6.6.0-web/css/all.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Resep Makanan</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Galeri Makanan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Menu Makanan</a>
        </li>
      </ul>
      <!-- <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>    
  </div> -->
</nav>
<h1>Selamat Datang di Website Resep Makanan</h1>
<br>
<p>"Didirikan pada tahun 2024, hadir untuk menginspirasi setiap dapur dengan resep-resep istimewa yang mudah, lezat, dan sehat. Kami berkomitmen untuk menyediakan panduan memasak yang praktis, dengan bahan-bahan yang mudah ditemukan, serta tips-tips bermanfaat yang dapat dinikmati oleh semua kalangan. Mari bersama-sama menjelajahi dunia kuliner dan menciptakan momen tak terlupakan melalui hidangan penuh rasa."</p>

    
</body>
</html>