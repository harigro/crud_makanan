<?php
$host = 'localhost';
$db = 'crud_makanan';
$user = 'root'; // Ganti dengan username MySQL Anda
$pass = ''; // Ganti dengan password MySQL Anda

try {
    // Koneksi ke MySQL tanpa memilih database
    $pdo = new PDO("mysql:host=$host", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Membuat database jika belum ada
    $pdo->exec("CREATE DATABASE IF NOT EXISTS $db");

    // Menggunakan database yang baru dibuat
    $pdo->exec("USE $db");

    // Membuat tabel users jika belum ada
    $createTableSQL = "
        CREATE TABLE IF NOT EXISTS makanan (
            id INT AUTO_INCREMENT PRIMARY KEY,
            nama VARCHAR(100) NOT NULL,
            harga INT NOT NULL
        );
    ";
    $pdo->exec($createTableSQL);

} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}
?>
