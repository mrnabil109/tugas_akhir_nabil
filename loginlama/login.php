<?php
// Memulai session
// session_start();
// $user = array(
//     "admin" => "password123"

// );

// if (isset($_SESSION['username'])) {
//     header(header: "Location: index.php");
//     exit();
// }
// // Cek apakah form sudah disubmit
// if (isset($_POST['submit_login'])) {
//     // Mengambil data dari form
//     $username = $_POST['username'];
//     $password = $_POST['password'];
//     // Validasi username dan password
//     if (isset($user[$username]) && $user[$username] === $password) {
//         // Login berhasil
//         $_SESSION["username"] = $username;
//         header(header: "Location:home.php");
//         exit();
//     } else {
//         // Login gagal
//         $arr = "Username atau password salah.";
//     }
// }
?>





<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css"> <!-- Link ke file CSS -->
</head>

<body>
    <form action="" method="post">
        <div class="login-container">
            <h2>Login</h2>
            <form action="login.php" method="post">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="submit" name="submit_login" value="Login">
            </form>
            <?php
            if (isset($arr)) {
                echo "<p style='color:red;'>" . $arr . "</p>";
            }

            ?>
        </div>

</body>

</html>