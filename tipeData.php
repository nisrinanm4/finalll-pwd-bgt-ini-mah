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
    <link rel="stylesheet" href="CSS/tipeData.css">
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
    <h1 class="tutorial-title">Tipe Data Dasar</h1>

    <div class="tutorial-container">
        <!-- SECTION 1 -->
        <h2 class="section-title">1. Pengertian Tipe Data</h2>
        <p class="content-text justify">
        Tipe Data (Data Type) adalah klasifikasi atau pengelompokan data yang menentukan jenis nilai
        yang dapat dimiliki oleh suatu variabel, konstanta, atau ekspresi dalam pemrograman.
        Tipe data membantu komputer memahami bagaimana data harus disimpan, diolah, dan diinterpretasika</p>

        <br>
        <!-- SECTION 2 -->
        <h2 class="section-title">2. Macam-Macam Tipe Data di C++</h2>
        <p class="content-text">Berikut adalah jenis-jenis tipe data yang ada di C++ beserta penjelasan singkat dan contohnya:</p>
        
        <p class="content-text"><strong>a. Tipe Data Dasar</strong></p>
        <table class="table-tipe-data">
            <thead>
                <tr>
                    <th>Tipe Data</th>
                    <th>Ukuran(byte)</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>bool</td>
                    <td>1</td>
                    <td>Menyimpan nilai logika (true/false)</td>
                </tr>
                <tr>
                    <td>char</td>
                    <td>1</td>
                    <td>Menyimpan karakter tunggal (huruf/simbol)</td>
                </tr>
                  <tr>
                    <td>int</td>
                    <td>4</td>
                    <td>Menyimpan bilangan bulat</td>
                </tr>
                 <tr>
                    <td>float</td>
                    <td>4</td>
                    <td>Menyimpan bilangan desimal presisi tunggal</td>
                </tr>
                <tr>
                    <td>double</td>
                    <td>8</td>
                    <td>Menyimpan bilangan desimal presisi presisi ganda (lebih akurat)</td>
                </tr>
                <tr>
                    <td>void</td>
                    <td>0</td>
                    <td>Menyatakan tidak ada nilai yang dikembalikan atau tidak bertipe.</td>
                </tr>
            </tbody>
        </table>

        <br>
        
        <p class="content-text"><strong>b. Tipe Data Modifikasi</strong></p>
        <table class="table-tipe-data">
            <thead>
                <tr>
                    <th>Tipe Data</th>
                    <th>Ukuran(byte)</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>short</td>
                    <td>2</td>
                    <td>Menyimpan bilangan bulat kecil</td>
                </tr>
                <tr>
                    <td>long</td>
                    <td>4 atau 8</td>
                    <td>Menyimpan bilangan bulat lebih besar dari int</td>
                </tr>
                  <tr>
                    <td>unsigned int</td>
                    <td>4</td>
                    <td>Menyimpan bilangan bulat tanpa tanda negatif</td>
                </tr>
                 <tr>
                    <td>unsigned short</td>
                    <td>2</td>
                    <td>Seperti short, tapi tanpa negatif</td>
                </tr>
                <tr>
                    <td>unsigned long</td>
                    <td>4 atau 8</td>
                    <td>Seperti long, tapi tanpa negatif</td>
                </tr>
            </tbody>
        </table>

        <br>

         <p class="content-text"><strong>c. Tipe Data Komposit</strong></p>
        <table class="table-tipe-data">
            <thead>
                <tr>
                    <th>Tipe Data</th>
                    <th>Ukuran(byte)</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>struct</td>
                    <td>Bervariasi</td>
                    <td>Kumpulan data berbeda dalam satu kesatuan</td>
                </tr>
                <tr>
                    <td>class</td>
                    <td>Bervariasi</td>
                    <td>Seperti struct, tapi dengan fitur OOP</td>
                </tr>
                  <tr>
                    <td>union</td>
                    <td>Bervariasi</td>
                    <td>Menyimpan satu dari beberapa tipe dalam satu lokasi memori</td>
                </tr>
                 <tr>
                    <td>enum</td>
                    <td>4</td>
                    <td>Menyimpan konstanta bernama (biasanya bilangan bulat)</td>
                </tr>
            </tbody>
        </table>

        <br>
         <h2 class="section-title">3. Contoh Penggunaan Tipe Data Dalam C++</h2>
        <p class="content-text">Berikut contoh kode program untuk mendemonstrasikan penggunaan tipe data:</p>
        <img src="assets/Tipe_data.png" alt="Tipe Data">
    <!-- NAVIGATION BUTTONS -->
    <div class="nav-buttons">
        <a href="pengenalan.php"><button class="nav-button">Kembali</button></a>
        <a href="variabel.php"><button class="nav-button">Lanjut</button></a>
    </div>
</main>

</body>
</html>