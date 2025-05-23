<?php
include 'koneksi.php';
session_start();

// Cek apakah session email sudah ada (user sudah login)
if (!isset($_SESSION['user_id'])) {
    header("Location: login&regis.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CodeNest</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="CSS/materi.css">
</head>

<body>

    <!-- Navbar -->
    <div class="navbar">
        <a href="index.php" class="logo">Code<span>Nest</span></a>
        <div class="nav-links">
            <a href="index.php">Home</a>
            <a href="materi.php" class="active">Materi</a>
            <a href="kuis.php">Quiz</a>
            <a href="update_profil.php" class="profile-icon">👤</a>
        </div>
    </div>

    <!-- Materi Cards -->
    <div class="container">

        <a href="pengenalan.php" class="card-link">
            <div class="card">
                <div class="card-title">Pengenalan C++</div>
            </div>
        </a>

        <a href="tipeData.php" class="card-link">
            <div class="card">
                <div class="card-title">Tipe Data Dasar</div>
            </div>
        </a>
        <a href="variabel.php" class="card-link">
            <div class="card">
                <div class="card-title">Variabel</div>
            </div>
        </a>
        <a href="percabangan.php" class="card-link">
            <div class="card">
                <div class="card-title">Percabangan</div>
            </div>
        </a>
        <a href="perulangan.php" class="card-link">
            <div class="card">
                <div class="card-title">Perulangan (Looping)</div>
            </div>
        </a>
        <a href="array.php" class="card-link">
            <div class="card">
                <div class="card-title">Array</div>
            </div>
        </a>
        <a href="fungsi.php" class="card-link">
            <div class="card">
                <div class="card-title">Fungsi</div>
            </div>
        </a>
    </div>
</body>

</html>