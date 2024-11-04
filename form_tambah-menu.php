<?php

require 'connection.php';

// jika terdapat 'action' dan 'id' maka melakukan sesuatu
  if(isset($_GET['action']) && isset($_GET['id'])){
    $action = $_GET['action'];
    $id = $_GET ['id'];

    switch($action){
        case 'delete':
            delete_data($id);
            break;
        case 'edit':
          echo "";
          break;
          default:
            echo "aksi tidak di definisikan";
    }
  }else{
    echo "aksi dan id tidak di definisikan!";
  }

  if($res){
    // jika true
    header("Location: index.php?messages=Berhasil dihapus");
  }else{
      // jika false
      header("Location: index.php?messegase=Gagal dihapus");
      exit();
  }

  function update($data): int|string{
    global $connection;
    

    $id = $data['id_makanan'];
    $nama_makanan =$connection->Real_escape_string($data['txt_nama_makanan']);
    $jenis_makanan= $data['txt_jenis_makanan'];

    $query = "UPDATE tb_menu_makanan SET
    nama_menu_makanan ='$nama_makanan',
    jenis_makanan= '$jenis_makanan',
    id_makanan = '$id_makanan',
    ";

    mysqli_query($connection, $query);
    return mysqli_affected_rows(mysql: $connection);
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body>
<div class="container mt-5">
    <h2>Tambah Menu Makanan</h2>
    <form action="" method="POST">
        <div class="mb-3">
            <label for="nama_menu" class="for-label">Nama Menu Makanan</label>
            <input type="text" class="form-control" id="menu" name="nama_makanan" required>
         </div>
         <div class="mb-3">
            <label for="jenis" class="form-label">Jenis</label>
            <select class="form-select" id="jenis" name="jenis_makanan" required>
                <option value="" selected>Pilih Jenis Makanan</option>
                <option value="main_course">Main course</option>
                <option value="fast_food">fast food</option>
                <option value="appetizer">Appetizer</option>
                <option value="dessert">Dessert</option>
            </select>
        </div>
            <button type="submit" class="btn btn-dark">Save</button>
            </form>
       </div>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>