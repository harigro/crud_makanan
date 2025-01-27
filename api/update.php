<?php
include '../config.php';
$data = json_decode(file_get_contents("php://input"), true);
$id = $data['id'];
$nama = $data['nama'];
$harga = $data['harga'];

$sql = "UPDATE makanan SET nama=:nama, harga=:harga WHERE id=:id";
$stmt = $pdo->prepare($sql);
$result = $stmt->execute(['nama' => $nama, 'harga' => $harga, 'id' => $id]);

$response = $result ? ['message' => 'Berhasil diperbarui'] : ['message' => 'Gagal memperbarui'];
echo json_encode($response);
?>
