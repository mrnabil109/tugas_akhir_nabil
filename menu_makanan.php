<?php 
require 'connection.php';
$data= myquery("SELECT * FROM tb_menu_makanan");
// var_dump($data);

 if($_SERVER["REQUEST_METHOD"] == "POST"){
   $nama_makanan = $_POST['nama_makanan'];
   $jenis_makanan = $_POST['jenis_makanan'];

 $sql = "INSERT INTO tb_menu_makanan (nama_makanan,jenis_makanan) 
   VALUES ('','$nama_makanan', '$jenis_makanan')";
  
   if ($con->query($sql)=== TRUE) {
     echo "Data Berhasil Ditambahkan!";
  }else{                                                                                                                                                                                                                                
    echo "Error: "  .   $sql  .  "<br>"   .   $con->error; 
   }
}
?>


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Menu</title>
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
          <a class="nav-link active" aria-current="page" href="Home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Galeri Makanan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="menu_makanan.php">Menu Makanan</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
    <a href="logout.php" class="btn btn-outline-success" type="submit">Logout</a>
      </form>
    </div>
  </div>
</nav>

<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">id_makanan</th>
            <th scope="col">Nama makanan</th>
            <th scope="col">jenis makanan</th>
            <th scope="col">aksi</th>
        </tr>
        <?php foreach($data as $row):?>
        <tr>
            <td><?php echo $row['id_makanan']; ?></td>
            <td><?php echo $row['nama_makanan']; ?></td>
            <td><?php echo $row['jenis_makanan']; ?></td>
            
            <td>
                <a href="from_edit.php?id=<?php echo $row['id_makanan']; ?>" class="btn btn-primary">Edit</a>
                <a href="function.php?id=<?php echo $row['id_makanan']; ?>& action=delete" onclick="return confirm('Apakah Anda yakin ingin menghapus menu ini?')" class="btn btn-danger">Delete</a>
                
            </td>
        </tr>
       
        <?php endforeach; ?>
    </tbody>
</table>

<a href="form_tambah_data.php" class="btn btn-primary">Tambah Data</a>
    <script src="./assets/css/bootstrap.min.css"></script>
</body>
</html>
