<?php
require 'function.php';

$registerMessage = ''; // Inisialisasi variabel pesan registrasi

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);
    
    // Check if passwords match
    if ($password !== $confirm_password) {  
        $registerMessage = "Passwords do not match. Please try again.";
    } else {
        // Call the register function
        $registerMessage = register($username, $password);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="mt-5 text-center">Register</h2>
                <?php if ($registerMessage): ?>
                    <div class="alert <?php echo strpos($registerMessage, 'successful') !== false ? 'alert-success' : 'alert-danger'; ?>">
                        <?php echo htmlspecialchars($registerMessage); ?>
                    </div>
                <?php endif; ?>
                <form method="post" action="registrasi.php" class="mt-4">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username:</label>
                        <input type="text" name="username" id="username" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="confirm_password" class="form-label">Confirm Password:</label>
                        <input type="password" name="confirm_password" id="confirm_password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Register</button>
                </form>
                <button type="button" class="btn btn-danger w-100 mt-2" onclick="window.location.href='login.php'">Back</button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
