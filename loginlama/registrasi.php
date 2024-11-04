<!-- <?php 

if (isset($_POST['registrasi'])) {  
$error = array();
 
if (empty($_POST['member_username'])) {  
        $error[] = 'Username tidak boleh kosong'; 
    } else {
       $member_username =mysqli_real_escape_string($mysqli, $_POST['member_username']);
    }
 
 
    if (empty($_POST['member_password'])) {
        $error[] = 'Kata sandi tidak boleh kosong'; }
 
 if(strlen($_POST['member_password']) < 5 || strlen($_POST['member_password']) > 15){
 $error['password'] = "Masukkan Pasword minimal 5 karakter maksimal 15 karakter";
 } else {
     $member_password = mysqli_real_escape_string($mysqli,md5($_POST['member_password']));}
 
 
$member_email = mysqli_real_escape_string($mysqli, $_POST['member_email']);
if (!filter_var($member_email, FILTER_VALIDATE_EMAIL)) {
$error[] = 'Alamat Email yang anda masukkan salah';
} else {
$member_email = mysqli_real_escape_string($mysqli, $_POST['member_email']);
 }
unset($_POST['registrasi']);
mysqli_close($mysqli); }
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<form class="row-border" name="form1"  action="" method="post">
 
<div class="form-group">
<label>Nama Lengkap <span class="required">*</span></label>
<input name="member_nama" type="text" class="required form-control">
</div>
 
<div class="form-group">
<label>Email <span class="required">*</span></label>
<input name="member_email" type="email" class="required form-control">
</div>
 
<div class="form-group">
<label>Username <span class="required">*</span></label>
<input name="member_username" type="text" class="required form-control">
</div>
 
<div class="form-group">
<label>Password <span class="required">*</span></label>
<input name="member_password" type="password" class="required form-control">
</div>
<div class="form-actions">
<button class="btn  btn-warning" type="reset">Reset</button>
<button class="btn btn-primary" name="registrasi" type="submit">Registrasi</button>
</div>
</form>
    <title>Document</title>
</head>
<body>
    
</body>
</html>