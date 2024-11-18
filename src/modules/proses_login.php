<?php
session_start();
include "../../config/koneksi.php";

if($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST ['username'];
    $password = $_POST ['password'];

    $sql = "SELECT * FROM users WHERE username = :username AND password = :password";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':username', $username);    
    $stmt->bindParam(':password', $password);    

    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if($user) {
        $_SESSION['username'] = $user['username'];
        header("Location: ../../index.php");
    } else {
        echo "<script>alert('Login gagal! Username atau Password salah'); window.location.href='../../login.php';</script>";
    }
}



?>