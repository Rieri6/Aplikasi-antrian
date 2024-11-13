<?php
include "../../config/koneksi.php";

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM antrian WHERE id = :id";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    
    if($stmt->execute()) {
        header('Location: daftar_antrian.php?status=deleted');
        exit();
    } else {
        echo "Error: Gagal menghapus data";
    }
}
?>