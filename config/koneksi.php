<?php 
$host = "localhost";
$username = "root";
$password = '';
$dbname = "queue";


try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "";
} catch (PDOException $e) {
    echo "Koneksi gagal " . $e->getMessage();
}
?>