<?php 
  require_once 'connection.php';

  // Jika terdapat 'action' dan 'id' maka melakukan sesuatu
  if(isset($_GET['action']) && isset($_GET['id'])){
    $action = $_GET['action'];
    $id = $_GET['id'];

    switch($action){
      case 'delete':
        delete_data($id);
        break;
      default:
        echo "";
    }
  }else{
    echo "Aksi dan ID tidak di definisikan!";
  }

  function delete_data($id){
    global $connection;
    $res = mysqli_query($connection, "DELETE FROM tb_menu_makanan WHERE id_makanan = $id" );
    
    if($res){
      // Jika true
      header("Location: menu_makanan.php?messages=Berhasil dihapus");
      exit();
    }else{
      // Jika false
      header("Location: menu_makanan.php?messages=Gagal dihapus");
      exit();
    }
  }


function update($data) {
    global $connection;

    $id = $data['id']; // Pastikan 'id' ada di data yang di-post
    $nama_makanan = mysqli_real_escape_string($connection, $data['txt_nama_makanan']);
    $jenis_makanan = mysqli_real_escape_string($connection, $data['txt_jenis_makanan']);

    // Pastikan nama kolom sesuai dengan struktur tabel
    $query = "UPDATE tb_menu_makanan SET nama_makanan = '$nama_makanan', jenis_makanan = '$jenis_makanan' WHERE id_makanan = '$id'";
    $result = mysqli_query($connection, $query);

    if ($result) {
        header("Location: form_tambah-menu.php?messages=Data berhasil diupdate");
    } else {
        header("Location: index.php?messages=Data gagal diupdate");
    }
    exit();

    
}

function login($username, $password)
{
    global $connection;

    $stmt = $connection->prepare("SELECT id, username, role, password FROM tb_user WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if user exists
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verify the password hash
        if (password_verify($password, $user['password'])) {
            // Set session variables
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];

            // Redirect to dashboard
            header("Location: ../index.php");
            exit();
        } else {
            return "Invalid password.";
        }
    } else {
        return "User not found.";
    }
}


function register($username, $password, $role = 'user')
{
    global $connection;

    // Check if the username already exists
    $query = "SELECT * FROM tb_user WHERE username = ?";
    $stmt = $connection->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        return "Username already exists. Please choose a different username.";
    }

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    var_dump($hashed_password);

    // Insert the new user into the database
    $insert_query = "INSERT INTO tb_user (username, password, role) VALUES (?, ?, ?)";
    $stmt = $connection->prepare($insert_query);
    $stmt->bind_param("sss", $username, $hashed_password, $role);

    if ($stmt->execute()) {
        
        echo "Daftar '$role' dengan username '$username' berhasil.";
        header("Location: login.php");
        exit();
    } else {
        return "Error: " . $stmt->error;
    }

    $stmt->close();
}
?>
