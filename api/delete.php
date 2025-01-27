<?php
include '../config.php';
$data = json_decode(file_get_contents("php://input"), true);
$id = $data['id'];

try {
    // Hapus data berdasarkan ID
    $sql = "DELETE FROM makanan WHERE id=:id";
    $stmt = $pdo->prepare($sql);
    $result = $stmt->execute(['id' => $id]);

    // Reset nilai AUTO_INCREMENT setelah penghapusan
    if ($result) {
        // Reset AUTO_INCREMENT
        $pdo->exec("ALTER TABLE makanan AUTO_INCREMENT = 1");
        
        $response = ['message' => 'Berhasil dihapus dan AUTO_INCREMENT direset'];
    } else {
        $response = ['message' => 'Gagal menghapus'];
    }
} catch (PDOException $e) {
    $response = ['message' => 'Error: ' . $e->getMessage()];
}

echo json_encode($response);
?>
