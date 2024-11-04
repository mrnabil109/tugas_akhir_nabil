<?php
// session_start();

// Beberapa variable yang penting  ada di connection
$hostname = 'localhost';
$user = 'root';
$password = '';
$db_name = 'resep_makanan';

//global variable connection
$connection = mysqli_connect($hostname, $user, $password, $db_name);

// pastikan ini hanya dideklarasikan sekali
function myquery($query)
{
    global $connection;
    $result = mysqli_query($connection, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
?>