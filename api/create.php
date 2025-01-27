<?php
include '../config.php';
$data = json_decode(file_get_contents("php://input"), true);
$nama = $data['nama'];
$harga = $data['harga'];

$sql = "INSERT INTO makanan (nama, harga) VALUES (:nama, :harga)";
$stmt = $pdo->prepare($sql);
$result = $stmt->execute(['nama' => $nama, 'harga' => $harga]);

$response = $result ? ['message' => 'Berhasil ditambahkan'] : ['message' => 'Gagal menambahkan'];
echo json_encode($response);
?>
