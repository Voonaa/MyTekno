<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_tekno_db";

// Membuat Koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mendapatkan data dari form
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

header("Location: https://t.me/+J1OhZZq-WyBmMzI1");
exit();
?>