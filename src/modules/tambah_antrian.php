<?php
include "../../config/koneksi.php";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_pasien = $_POST['nama_pasien'];
    $nomor_antrian = $_POST['nomor_antrian'];
    $waktu_kedatangan = date('Y-m-d H:i:s');

    $sql = "INSERT INTO antrian (nama_pasien, nomor_antrian, waktu_kedatangan) 
            VALUES (:nama_pasien, :nomor_antrian, :waktu_kedatangan)";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nama_pasien', $nama_pasien);
    $stmt->bindParam(':nomor_antrian', $nomor_antrian);
    $stmt->bindParam(':waktu_kedatangan', $waktu_kedatangan);

    if($stmt->execute()) {
        echo "<script>alert('Data berhasil ditambahkan!')</script>";
    } else {
        echo "Error: Gagal menambahkan data";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Antrian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Form Tambah Antrian Pasien</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <form method="POST" action="tambah_antrian.php">
                            <div class="mb-3">
                                <label for="nama_pasien" class="form-label">Nama Pasien</label>
                                <input type="text" class="form-control" id="nama_pasien" name="nama_pasien" placeholder="Masukkan nama pasien" required>
                            </div>
                            <div class="mb-3">
                                <label for="nomor_antrian" class="form-label">Nomor Antrian</label>
                                <input type="number" class="form-control" id="nomor_antrian" name="nomor_antrian" placeholder="Masukkan nomor antrian" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Tambah Antrian</button>
                            <a href="../../index.php" class="mt-2 btn btn-success">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
