<?php
require 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_makanan = isset($_POST['nama_makanan']) ? $_POST['nama_makanan'] : '';
    $jenis_makanan = isset($_POST['jenis_makanan']) ? $_POST['jenis_makanan'] : '';

    if (!empty($nama_makanan) && !empty($jenis_makanan)) {

        $sql = "INSERT INTO tb_menu_makanan (id_makanan, nama_makanan, jenis_makanan) VALUES (null, '$nama_makanan', '$jenis_makanan')";

        $res = mysqli_query($connection, query: $sql);

        if ($res) {
            echo "Data Berhasil Ditambahkan!";
            header("Location: menu_makanan.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $connection->error;
        }

    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Menu Makanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2>Tambah Data Makanan</h2>
        <form action="form_tambah_data.php" method="POST">

            <div class="mb-3">
                <label for="nama_makanan" class="form-label">NAMA MAKANAN</label>
                <input type="text" class="form-control" id="nama_makanan" name="nama_makanan">
            </div>

            <div class="mb-3">
                <label for="jenis_makanan" class="form-label">JENIS MAKANAN</label>
                <input type="text" class="form-control" id="jenis_makanan" name="jenis_makanan">
            </div>
            <button type="submit" class="btn btn-primary">SAVE</button>
            <a href="menu_makanan.php" class="btn btn-danger">Kembali</a>
        </form>
    </div>
</body>

</html>