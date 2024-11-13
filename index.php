 <?php
session_start();
if(!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumah Sakit - Sistem Antrian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <h6 class="me-3">Selamat Datang, <?php echo $_SESSION['username']; ?>!</h6>
            <a class="navbar-brand" href="#">Sistem Antrian RS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="src/modules/daftar_antrian.php">Daftar Antrian</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="src/modules/tambah_antrian.php">Tambah Antrian</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Keluar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="bg-light py-5">
        <div class="container text-center">
            <h1 class="display-4">Selamat Datang di Sistem Antrian Rumah Sakit</h1>
            <p class="lead">Kelola antrian pasien dengan lebih mudah dan cepat.</p>
        </div>
    </header>

    <div class="container my-5">
        <div class="row">
            <div class="col-md-6">
                <h3>Fitur Utama</h3>
                <ul>
                    <li>Daftar antrian pasien secara real-time</li>
                    <li>Tambah antrian pasien dengan cepat</li>
                    <li>Ubah status antrian dengan mudah</li>
                    <li>Pengelolaan data yang aman dan terstruktur</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h3>Petunjuk Penggunaan</h3>
                <p>Gunakan menu navigasi di atas untuk mengakses fitur yang tersedia. Pastikan data yang dimasukkan sudah benar untuk menghindari kesalahan pengolahan antrian.</p>
                <p>Jika ada kendala, silakan hubungi admin sistem untuk bantuan lebih lanjut.</p>
            </div>
        </div>
    </div>

    <footer class="bg-primary text-white text-center py-3">
        <p class="mb-0">&copy; 2024 Sistem Antrian Rumah Sakit. All Rights Reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
