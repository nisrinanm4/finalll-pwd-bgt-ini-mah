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
            <a href="#">Quiz</a>
            <a href="update_profil.php" class="profile-icon">👤</a>
        </div>
    </div>

    <main>
    <!-- TUTORIAL TITLE -->
    <h1 class="tutorial-title">Fungsi</h1>

    <div class="tutorial-container">
        <!-- SECTION 1 -->
        <h2 class="section-title">1. Pengertian</h2>
        <p class="content-text justify">
   Fungsi adalah blok kode yang dirancang untuk melakukan tugas tertentu dan dapat dipanggil berulang kali dalam program. Fungsi membantu mengorganisir kode agar lebih modular, mudah dibaca, dan dapat digunakan kembali.</p>
        <br>
         <!-- SECTION 2 -->
        <h2 class="section-title">2. Struktur Dasar Fungsi</h2>
        <p class="content-text">Sebuah fungsi terdiri dari:</p>
        <p class="content-text">- <strong>Tipe pengembalian (return type)</strong>: tipe data yang dikembalikan fungsi (misal int, void, float, dll).</p>
        <p class="content-text">- <strong>Nama fungsi</strong>: identifier untuk memanggil fungsi.</p>
        <p class="content-text">- <strong>Parameter (opsional)</strong>: data yang diterima fungsi sebagai input.</p>
        <p class="content-text">- <strong>Badan fungsi (body)</strong>: kumpulan perintah yang dijalankan saat fungsi dipanggil.</p>
        
        <br>

        <!-- SECTION 3 -->
        <h2 class="section-title">3. Fungsi void</h2>
        <p class="content-text">Fungsi dengan tipe void tidak mengembalikan nilai.</p>
            <img src="assets/fungsi void.png" alt="Fungsi Void">
        <br>

         <!-- SECTION 4 -->
        <h2 class="section-title">4. Cara Memanggil Fungsi</h2>
        <p class="content-text">Setelah fungsi didefinisikan, panggil dengan menyebutkan nama dan memberikan argumen sesuai parameter:</p>
          <img src="assets/cara memanggil fungsi.png" alt="cara memanggil fungsi">
        <br>

        <!-- SECTION 5 -->
        <h2 class="section-title">5. Fungsi dengan Parameter dan Argumen</h2>
        <p class="content-text">Array bisa memiliki lebih dari satu dimensi (misal: matriks).</p>
         <p class="content-text">- <strong>Parameter</strong> adalah variabel yang didefinisikan di fungsi.</p>
         <p class="content-text">- <strong>Argumen</strong> adalah nilai yang diberikan saat memanggil fungsi.</p>
         <img src="assets/fungsi dengan parameter.png" alt="fungsi dengan parameter">
         <br>

          <!-- SECTION 6 -->
          <h2 class="section-title">6. Fungsi Prototype</h2>
          <p class="content-text">Fungsi prototype adalah deklarasi fungsi sebelum definisi lengkapnya, berguna agar fungsi bisa dipanggil sebelum definisinya muncul dalam kode.</p>
          <img src="assets/Fungsi Prototype.png" alt="Fungsi Prototype">
         <br>

         <!-- SECTION 7 -->
          <h2 class="section-title">7. Fungsi Overloading</h2>
          <p class="content-text">C++ mendukung fungsi dengan nama sama tapi parameter berbeda, disebut fungsi overloading.</p>
          <img src="assets/Fungsi Overloading.png" alt="Fungsi Overloading">
         <br>

         <!-- SECTION 8 -->
        <h2 class="section-title">8. Fungsi const dan constexpr</h2>
        <p class="content-text">- Fungsi const biasanya digunakan dalam kelas untuk menunjukkan fungsi tidak mengubah data anggota.</p>
        <p class="content-text">- Fungsi constexpr memungkinkan evaluasi fungsi saat kompilasi untuk optimasi.</p>
    </div>
         


    <!-- NAVIGATION BUTTONS -->
    <div class="nav-buttons">
        <a href="materi.php"><button class="nav-button">Kembali</button></a>
        <a href="kuis.php"><button class="nav-button">Kuis</button></a>
    </div>
</main>

</body>
</html>
        