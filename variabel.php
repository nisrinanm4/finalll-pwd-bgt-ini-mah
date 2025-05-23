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
    <link rel="stylesheet" href="CSS/variabel.css">
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
    <h1 class="tutorial-title">Variabel</h1>

    <div class="tutorial-container">
        <!-- SECTION 1 -->
        <h2 class="section-title">1. Pengertian Variabel</h2>
        <p class="content-text justify">
        Variabel adalah tempat untuk menyimpan data dalam memori komputer yang bisa diakses dan diubah selama program berjalan. Variabel memiliki nama, tipe data, dan nilai.</p>

        <br>
        <!-- SECTION 2 -->
        <h2 class="section-title">2. Aturan Penamaan Variabel</h2>

        <p class="content-text">1. Harus dimulai dengan huruf (a–z, A–Z) atau underscore <code>_</code> </p>
        <p class="content-text">2. Tidak boleh mengandung spasi atau karakter khusus (kecuali <code>_</code>)</p>
        <p class="content-text">3. Tidak boleh sama dengan kata kunci C++ seperti <code>int, return, class</code>, dll.</p>
        <p class="content-text">4. Case-sensitive: <code>nilai</code>dan <code>Nilai</code>dianggap variabel yang berbeda</p>
        <br>

        <!-- SECTION 3 -->
        <h2 class="section-title">3.  Deklarasi Variabel</h2>
        <p class="content-text"><strong>a. Struktur Penulisan Variabel</strong></p>
        <p class="content-text"><code>tipe_data</code> <code>nama_variabel</code> = <code>nilai_awal;</code></p>

        <p class="content-text"><strong>b. Deklarasi Variabel</strong></p>
        <p class="content-text">Variabel dapat dideklarasikan tanpa langsung memberikan nilai Atau langsung:</p>
        <img src="assets/deklarasiVariabel.png" alt="Deklarasi Variabel">
        <br><br>

       <h2 class="section-title">4. Jenis-jenis Variabel</h2>

        <table class="table-tipe-data">
            <thead>
                <tr>
                    <th>Jenis</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Local</td>
                    <td>Hanya bisa digunakan di dalam blok atau fungsi tempat dia dideklarasikan</td>
                    
                </tr>
                <tr>
                    <td>Global</td>
                    <td>Dideklarasikan di luar semua fungsi, bisa diakses dari mana saja dalam file</td>
                </tr>
                  <tr>
                    <td>Static</td>
                    <td>Menyimpan nilai walaupun fungsi sudah selesai dijalankan</td>
                </tr>
                 <tr>
                    <td>Const</td>
                    <td>Variabel konstan yang nilainya tidak bisa diubah setelah ditetapkan</td>
                </tr>
                <tr>
                    <td>Extern</td>
                    <td>EDeklarasi variabel yang didefinisikan di file lain (multi-file project)</td>
                </tr>
            </tbody>
        </table>
        <br>

    <!-- NAVIGATION BUTTONS -->
    <div class="nav-buttons">
        <a href="tipeData.php"><button class="nav-button">Kembali</button></a>
        <a href="percabangan.php"><button class="nav-button">Lanjut</button></a>
    </div>
</main>

</body>
</html>