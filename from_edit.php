<?php
// require 'connection.php';
require 'function.php';

// Ambil ID dari URL
$id_makanan = $_GET['id'];

// Ambil data berdasarkan ID
$result = mysqli_query($connection, "SELECT * FROM tb_menu_makanan WHERE id_makanan = '$id_makanan'");
$data = mysqli_fetch_assoc($result);
?>
<?php 
  $_GET['action'] = 'edit';

  // $id_makanan = $_GET['id'];
  // $data_menu_makanan = myquery("SELECT * FROM tb_menu_makanan WHERE id_makanan = $id_makanan");
  
  // $data_makanan= myquery("SELECT * FROM tb_menu_makanan");

  if(isset($_POST['submit_update'])){
    // Kondisi cek return true atau false
    if(update($_POST) > 0){
      echo "<script> 
      alert('Data berhasil diubah'); 
      document.location.href = 'menu_makanan.php';
      </script>";
    } else {
      echo "<script> 
      alert('Data gagal diubah');
      </script>";
    }
  }

?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Makanan</title>
</head>
<body>

<h2>Edit Data Makanan</h2>
<form action="" method="post">
    <input type="hidden" name="id" value="<?= $data['id_makanan'] ?>">

    <label>Nama Makanan:</label>
    <input type="text" name="txt_nama_makanan" value="<?= $data['nama_makanan'] ?>" required><br><br>

    <label>Jenis Makanan:</label>
    <input type="text" name="txt_jenis_makanan" value="<?= $data['jenis_makanan'] ?>" required><br><br>
    <button type="submit" class="btn btn-primary" name="submit_update">SAVE</button>
    <a href="menu_makanan.php" class="btn btn-secondary">Kembali</a>

 </table>
  </form>
 <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1></h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
</body>
</html>
