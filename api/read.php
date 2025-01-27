<?php
include '../config.php';
$sql = "SELECT * FROM makanan";
$stmt = $pdo->query($sql);
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($data);
?>
