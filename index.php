<?php
session_start();
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit();
}
require 'connection.php';
$data = myquery(query: "SELECT * FROM tb_menu_makanan");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama_makanan = $_POST['nama_makanan'];
  $jenis_makanan = $_POST['jenis_makanan'];

  $sql = "INSERT INTO tb_menu_makanan (nama_makanan, jenis_makanan) VALUES ('$nama_makanan', '$jenis_makanan')";

  if ($con->query($sql) === TRUE) {
    echo "Data Berhasil Ditambahkan!";
    header(header: "Location: menu_makanan.php");
    exit();
  } else {
    echo "Error: " . $sql . "<br>" . $con->error;
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resep Makanan</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="fontawesome-free-6.6.0-web/fontawesome-free-6.6.0-web/css/all.min.css">
  <style>
    .card-title {
      color: pink;
      font-size: 1.5em;
    }

    .btn:not(:last-child) {
      margin-right: 10px;
    }
  </style>
</head>

<body class="d-flex flex-column min-vh-100">

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Resep Makanan</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="Home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Galeri Makanan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="menu_makanan.php">Menu Makanan</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <a href="menu_makanan.php" class="btn btn-outline-success" type="submit">Tambah Data</a>
          <a href="logout.php" class="btn btn-outline-success" type="submit">Logout</a>
        </form>

      </div>
    </div>
  </nav>


  <div class="container my-5">
    <div class="row">
      <?php foreach ($data as $row): ?>
        <div class="col-lg-4 mb-4">
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title"><?= htmlspecialchars($row['nama_makanan']); ?></h5>
              <hr>
              <p class="card-text"><?= htmlspecialchars($row['jenis_makanan']); ?></p>



            </div>
          </div>
        </div>
      <?php endforeach; ?>




    </div>
  </div>

  <footer class="my-footer mt-auto">
    <marquee>
      <address> &copy;TerimaKasih Sudah Membaca Website Resep Makanan Thank You </address>
    </marquee>
  </footer>


  <script src="./assets/css/bootstrap.min.css"></script>
</body>

</html>