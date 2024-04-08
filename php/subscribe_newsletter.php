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

// Memasukkan data ke dalam database, melakukan pengiriman email, dll.
// Tulis kode untuk memproses data form di sini

// Redirect ke link Telegram setelah pengguna berhasil mengirimkan formulir
header("Location: https://t.me/+J1OhZZq-WyBmMzI1");
exit();
?>
