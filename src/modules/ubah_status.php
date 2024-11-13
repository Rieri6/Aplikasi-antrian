<?php 
include "../../config/koneksi.php";

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $newStatus = "Selesai";
    $sql = "UPDATE antrian SET status = :status WHERE id = :id";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':status', $newStatus);
    $stmt->bindParam('id', $id ,PDO::PARAM_INT);


    if($stmt->execute()) {
        header('Location: daftar_antrian.php?status=updated');
        exit();
    } else {
        echo "Error: Gagal mengubah status";
    }
}
$conn = null;
?>