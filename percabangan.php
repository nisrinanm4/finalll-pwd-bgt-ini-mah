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
    <h1 class="tutorial-title">Percabangan</h1>

    <div class="tutorial-container">
        <!-- SECTION 1 -->
        <h2 class="section-title">1. Pengertian Percabangan</h2>
        <p class="content-text justify">Percabangan dalam C++ digunakan untuk membuat program memilih dan mengeksekusi pernyataan berdasarkan kondisi tertentu. 
            Dengan percabangan, alur program bisa bercabang tergantung nilai dari ekspresi logika.</p>

        <br>
        <!-- SECTION 2 -->
        <h2 class="section-title">2. Struktur dan Jenis Percabangan</h2>
        <p class="content-text">Ada beberapa jenis percabangan dalam C++, yaitu:</p>
        
        <p class="content-text"><strong>a. Percabangan <code>if</code></strong></p>
        <p class="content-text">Menjalankan blok kode jika kondisi bernilai benar (true).</p>
        <p class="content-text">Sintaks:</p>
        <img src="assets/if.png" alt="if">
        <br><br>

        <p class="content-text"><strong>b. Percabangan <code>if-else</code></strong></p>
        <p class="content-text">Menjalankan satu blok kode jika kondisi benar, dan blok lain jika salah</p>
        <p class="content-text">Sintaks:</p>
        <img src="assets/if-else.png" alt="if-else">
        <br><br>

        <p class="content-text"><strong>c. Percabangan <code>else if</code></strong></p>
        <p class="content-text">Memeriksa beberapa kondisi secara berurutan. Jika satu kondisi terpenuhi, blok terkait dijalankan.</p>
        <p class="content-text">Sintaks:</p>
        <img src="assets/else-if.png" alt="else-if">
        <br><br>

        <p class="content-text"><strong>d. Percabangan <code>switch</code></strong></p>
        <p class="content-text">Digunakan untuk memeriksa nilai ekspresi terhadap banyak kemungkinan (case). Cocok untuk nilai tetap seperti angka atau karakter.</p>
        <p class="content-text">Sintaks:</p>
        <img src="assets/switch.png" alt="switch">
        <br><br>

        <h2 class="section-title">3. Contoh Program</h2>
        <p class="content-text"><strong>a. Contoh <code>if..else</code></strong></p>
        <img src="assets/contohif.png" alt="contoh if-else"> <br><br>
        <p class="content-text"><strong>b. Contoh <code>switch</code></strong></p>
        <img src="assets/contohswitch.png" alt="contoh switch">

        

        

        

    <!-- NAVIGATION BUTTONS -->
    <div class="nav-buttons">
        <a href="variabel.php"><button class="nav-button">Kembali</button></a>
        <a href="perulangan.php"><button class="nav-button">Lanjut</button></a>
    </div>
</main>

</body>
</html>