<?php
$server = "localhost"; // Perbaiki penulisan nama host menjadi "localhost"
$username = "root";
$password = "";
$database = "produk_bumantara";

// Membuat koneksi
$connect = mysqli_connect($server, $username, $password);

// Memeriksa koneksi
if (!$connect) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Memilih database
$db_selected = mysqli_select_db($connect, $database);

// Memeriksa pemilihan database
if (!$db_selected) {
    die("Database tidak bisa dibuka: " . mysqli_error($connect));
}