<?php
include "../../config/koneksi.php";

$sql =  "SELECT * FROM antrian";
$stmt = $conn->prepare($sql);
$stmt->execute();

$antrian = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Antrian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center mb-4">Daftar Antrian Pasien</h2>

    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="table-primary text-center">
                <tr>
                    <th>No</th>
                    <th>Nama Pasien</th>
                    <th>Nomor Antrian</th>
                    <th>Waktu Kedatangan</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if(count($antrian) > 0) {
                    $no = 1;
                    foreach($antrian as $antr) {
                        echo "<tr>
                                <td class='text-center'>".$no."</td>
                                <td>".$antr["nama_pasien"]."</td>
                                <td class='text-center'>".$antr["nomor_antrian"]."</td>
                                <td>".$antr["waktu_kedatangan"]."</td>
                                <td class='text-center'>".$antr["status"]."</td>
                                <td class='text-center'>
                                    <a href='ubah_status.php?id=".$antr["id"]."' class='btn btn-warning btn-sm'>Ubah Status</a> 
                                    <a href='hapus_antrian.php?id=".$antr["id"]."' class='btn btn-danger btn-sm' onclick='return confirm(\"Yakin ingin menghapus?\")'>Hapus</a>
                                </td>
                            </tr>
                            ";
                        $no++;
                    }
                } else {
                    echo "<tr><td colspan='6' class='text-center'>Tidak ada antrian</td></tr>";
                }
                ?>
            </tbody>
            </table>
        <a href='../../index.php' class='mt-2 btn btn-success'>Kembali</a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
