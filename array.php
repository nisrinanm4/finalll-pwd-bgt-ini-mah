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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeNest</title>
    <link rel="stylesheet" href="CSS/pengenalan.css">
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

    <main>
    <!-- TUTORIAL TITLE -->
    <h1 class="tutorial-title">Array</h1>

    <div class="tutorial-container">
        <!-- SECTION 1 -->
        <h2 class="section-title">1. Pengertian</h2>
        <p class="content-text justify">
    Array adalah struktur data yang digunakan untuk menyimpan sekumpulan data dengan tipe yang sama dalam satu variabel. Data dalam array disimpan secara berurutan dan setiap elemen dapat diakses menggunakan indeks yang dimulai dari 0.</p>
        <br>
         <!-- SECTION 2 -->
        <h2 class="section-title">2. Deklarasi dan Inisialisasi Array</h2>
        <p class="content-text">a. Deklarasi array:</p>
        <p class="content-text"><code>tipe_data</code> <code>nama_variabel</code> = <code>nilai_awal;</code></p>
        
        <p class="content-text">&nbsp;&nbsp;&nbsp;&nbsp;Contoh:</p>
        <img src="assets/arrayint.png" alt="array int">
        
        <p class="content-text">b. Inisialisasi array:</p>
       <img src="assets/int5.png" alt="inisialisasi">
        <br>

        <!-- SECTION 3 -->
        <h2 class="section-title">3. Mengakses Elemen Array</h2>
        <p class="content-text">Elemen array diakses dengan menggunakan indeks dalam tanda kurung siku []. Indeks dimulai dari 0.</p>

        <p class="content-text">Contoh:</p>
        <img src="assets/aksesarray.png" alt="akses array">
        <br>

        <!-- SECTION 4 -->
        <h2 class="section-title">4. Mengisi dan Menampilkan Array dengan Loop</h2>
       <img src="assets/menampilkan.png" alt="menampilkan array">
        <br>

        <!-- SECTION 5 -->
        <h2 class="section-title">5. Array multidimensi</h2>
        <p class="content-text">Array bisa memiliki lebih dari satu dimensi (misal: matriks).</p>
        <img src="assets/multidimensi.png" alt="array multidimensi">
    <br>
    </div>

    <!-- NAVIGATION BUTTONS -->
    <div class="nav-buttons">
        <a href="perulangan.php"><button class="nav-button">Kembali</button></a>
        <a href="fungsi.php"><button class="nav-button">Lanjut</button></a>
    </div>
</main>

</body>
</html>
        