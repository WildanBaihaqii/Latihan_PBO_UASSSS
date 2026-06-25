<?php
// membuat koneksi dari database
$host = '127.0.0.1';
$username = 'Baihaqy';
$password = '1023';
$db = 'db_rental_pbo';

$conn = new mysqli($host, $username, $password, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
