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
    <h1 class="tutorial-title">Pengenalan C++</h1>

    <div class="tutorial-container">
        <!-- SECTION 1 -->
        <h2 class="section-title">1. Sejarah Bahasa C++</h2>
        <p class="content-text justify">
    Bahasa pemrograman C++ dikembangkan oleh Bjarne Stroustrup di Bell Laboratories pada awal tahun 1980-an. Awalnya dinamakan "C with Classes" karena merupakan perluasan dari bahasa C yang sudah ada sebelumnya, dengan menambahkan fitur pemrograman berorientasi objek. Pada tahun 1983, nama C++ resmi digunakan, dengan simbol "++" yang menunjukkan peningkatan dari bahasa C.

    Sejak itu, C++ telah mengalami banyak pengembangan dan standarisasi. Versi-versi utama yang dirilis antara lain: C++98, C++03, C++11, C++14, C++17, C++20, dan C++23. Setiap versi membawa pembaruan penting untuk meningkatkan efisiensi, keamanan, dan kemudahan dalam pengembangan perangkat lunak modern.

    C++ dikenal sebagai bahasa yang multi-paradigma karena mendukung pemrograman prosedural, berorientasi objek, dan generik. Hal ini menjadikan C++ sangat fleksibel dan cocok untuk berbagai jenis aplikasi, mulai dari sistem operasi, driver perangkat keras, hingga game dan aplikasi finansial. Selain itu, C++ memungkinkan pengembang memiliki kontrol penuh terhadap penggunaan memori dan kinerja program, menjadikannya bahasa pilihan untuk aplikasi yang membutuhkan efisiensi tinggi. Karena kompatibilitasnya yang tinggi dengan bahasa C, banyak proyek besar tetap menggunakan C++ sebagai tulang punggung pengembangannya.</p>

        <br>
        <!-- SECTION 2 -->
        <h2 class="section-title">2. Tujuan dan Fungsi C++</h2>
        <p class="content-text">C++ dirancang sebagai bahasa pemrograman yang fleksibel dan efisien. Tujuan utamanya adalah menyediakan bahasa yang mendukung pemrograman sistem dan aplikasi dengan performa tinggi, sambil tetap memungkinkan penggunaan berbagai paradigma pemrograman.</p>
        
        <p class="content-text">Fungsi utama C++ meliputi:</p>
        <p class="content-text">1. Pengembangan perangkat lunak sistem seperti compiler, operating system, dan driver.</p>
        <p class="content-text">2. Pembuatan aplikasi desktop dan mobile yang membutuhkan kecepatan tinggi.</p>
        <p class="content-text">3. Pengembangan game dan engine karena dukungan terhadap manajemen memori langsung dan performa optimal.</p>
        <p class="content-text">4. Aplikasi real-time dan embedded system.</p>
        <br>

        <!-- SECTION 3 -->
        <h2 class="section-title">3. Karakteristik Bahasa C++</h2>
        <p class="content-text">C++ memiliki sejumlah karakteristik yang membedakannya dari bahasa lain:</p>
        <p class="content-text">- <strong>Bahasa Multi-Paradigma</strong>: Mendukung pemrograman prosedural, berorientasi objek, dan generik.</p>
        <p class="content-text">- <strong>Performa Tinggi</strong>: Memberikan kontrol tingkat rendah terhadap sistem dan memori.</p>
        <p class="content-text">- <strong>Portabel</strong>: Kode C++ dapat dijalankan di berbagai platform dengan sedikit atau tanpa perubahan.</p>
        <p class="content-text">- <strong>Kompatibel dengan C</strong>: Sebagian besar kode C dapat digunakan langsung di dalam program C++.</p>
        <br>

        <!-- SECTION 4 -->
        <h2 class="section-title">4. Kelebihan dan Kekurangan C++</h2>
        <p class="content-text"><strong>Kelebihan:</strong></p>
        <p class="content-text">- Eksekusi cepat dan efisien.</p>
        <p class="content-text">- Mendukung berbagai gaya pemrograman.</p>
        <p class="content-text">- Banyak digunakan di industri besar (game engine, sistem embedded, compiler).</p>
        
        <p class="content-text"><strong>Kekurangan:</strong></p>
        <p class="content-text">- Kompleks untuk pemula karena sintaks dan manajemen memori manual.</p>
        <p class="content-text">- Tidak seaman bahasa modern seperti Python dalam hal manajemen memori dan pointer.</p>
        <br>

        <!-- SECTION 5 -->
        <h2 class="section-title">5. Contoh Program Sederhana C++</h2>
        <p class="content-text">Berikut adalah contoh program sederhana C++ yang mencetak teks ke layar:</p>
        <img src="assets/HelloWorld.png" alt="Hello World">
        <p class="content-text">Program di atas akan menampilkan teks "Hello World" ke layar, Fungsi <code>main()</code> adalah titik masuk utama dan <code>cout</code> digunakan untuk mencetak ke output.</p>
    </div>

    <!-- NAVIGATION BUTTONS -->
    <div class="nav-buttons">
        <a href="materi.php"><button class="nav-button">Kembali</button></a>
        <a href="tipeData.php"><button class="nav-button">Lanjut</button></a>
    </div>
</main>

</body>
</html>