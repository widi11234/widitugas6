<?php

require './../config/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Lakukan validasi login (sesuai dengan logika login Anda)
    // Contoh sederhana tanpa database:

    if ($email == $email && $password == $password) {
        // Jika login berhasil, arahkan ke show.php
        header("Location: ../show.php");
        exit();
    } else {
        // Jika login gagal, tampilkan pesan kesalahan
        echo "<script>alert('Email atau password salah');</script>";
    }
}
?>