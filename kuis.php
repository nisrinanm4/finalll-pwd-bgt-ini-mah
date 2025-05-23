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
    <title>C++ Quiz - CodeNest</title>
    <link rel="stylesheet" href="CSS/kuis.css">
</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        <a href="index.php" class="logo">Code<span>Nest</span></a>
        <div class="nav-links">
            <a href="index.php">Home</a>
            <a href="materi.php">Materi</a>
            <a href="#" class="active">Quiz</a>
            <a href="update_profil.php" class="profile-icon">👤</a>
        </div>
    </div>

    <main>
    <!-- TUTORIAL TITLE -->
    <h1 class="tutorial-title">Quiz Dasar-Dasar C++</h1>

    <div class="tutorial-container">
        <!-- Quiz Introduction -->
        <h2 class="section-title">Uji Pengetahuan C++ Anda</h2>
        <p class="content-text">Selamat datang di quiz C++ dasar! Quiz ini akan menguji pemahaman Anda tentang konsep dasar bahasa pemrograman C++. Pilihlah jawaban yang paling tepat untuk setiap pertanyaan.</p>
        
        <!-- Quiz Form -->
        <form action="hasil_kuis.php" method="post">
            <!-- Question 1 -->
            <div class="quiz-question">
                <p class="content-text"><strong>1. Siapa yang mengembangkan bahasa pemrograman C++?</strong></p>
                <div class="quiz-options">
                    <label><input type="radio" name="q1" value="a"> Dennis Ritchie</label>
                    <label><input type="radio" name="q1" value="b"> Bjarne Stroustrup</label>
                    <label><input type="radio" name="q1" value="c"> James Gosling</label>
                    <label><input type="radio" name="q1" value="d"> Guido van Rossum</label>
                </div>
            </div>

            <!-- Question 2 -->
            <div class="quiz-question">
                <p class="content-text"><strong>2. Apa nama awal C++ sebelum dinamai demikian?</strong></p>
                <div class="quiz-options">
                    <label><input type="radio" name="q2" value="a"> B with Classes</label>
                    <label><input type="radio" name="q2" value="b"> C with Classes</label>
                    <label><input type="radio" name="q2" value="c"> C Advanced</label>
                    <label><input type="radio" name="q2" value="d"> C Extended</label>
                </div>
            </div>

            <!-- Question 3 -->
            <div class="quiz-question">
                <p class="content-text"><strong>3. Apa arti simbol ++ dalam nama C++?</strong></p>
                <div class="quiz-options">
                    <label><input type="radio" name="q3" value="a"> Menunjukkan bahwa bahasa ini adalah versi kedua dari C</label>
                    <label><input type="radio" name="q3" value="b"> Hanya nama yang dipilih secara acak</label>
                    <label><input type="radio" name="q3" value="c"> Menunjukkan peningkatan dari bahasa C</label>
                    <label><input type="radio" name="q3" value="d"> Merepresentasikan operator increment dalam bahasa tersebut</label>
                </div>
            </div>

            <!-- Question 4 -->
            <div class="quiz-question">
                <p class="content-text"><strong>4. Fungsi apa yang menjadi titik masuk utama dalam program C++?</strong></p>
                <div class="quiz-options">
                    <label><input type="radio" name="q4" value="a"> start()</label>
                    <label><input type="radio" name="q4" value="b"> main()</label>
                    <label><input type="radio" name="q4" value="c"> begin()</label>
                    <label><input type="radio" name="q4" value="d"> run()</label>
                </div>
            </div>

            <!-- Question 5 -->
            <div class="quiz-question">
                <p class="content-text"><strong>5. Operator apa yang digunakan untuk menampilkan output ke layar di C++?</strong></p>
                <div class="quiz-options">
                    <label><input type="radio" name="q5" value="a"> cout <<</label>
                    <label><input type="radio" name="q5" value="b"> cin >></label>
                    <label><input type="radio" name="q5" value="c"> printf()</label>
                    <label><input type="radio" name="q5" value="d"> print()</label>
                </div>
            </div>

            <!-- Question 6 -->
            <div class="quiz-question">
                <p class="content-text"><strong>6. Paradigma pemrograman apa saja yang didukung oleh C++?</strong></p>
                <div class="quiz-options">
                    <label><input type="radio" name="q6" value="a"> Hanya berorientasi objek</label>
                    <label><input type="radio" name="q6" value="b"> Hanya prosedural</label>
                    <label><input type="radio" name="q6" value="c"> Berorientasi objek dan prosedural</label>
                    <label><input type="radio" name="q6" value="d"> Prosedural, berorientasi objek, dan generik</label>
                </div>
            </div>

            <!-- Question 7 -->
            <div class="quiz-question">
                <p class="content-text"><strong>7. Versi C++ berikut yang dirilis paling awal adalah:</strong></p>
                <div class="quiz-options">
                    <label><input type="radio" name="q7" value="a"> C++11</label>
                    <label><input type="radio" name="q7" value="b"> C++98</label>
                    <label><input type="radio" name="q7" value="c"> C++03</label>
                    <label><input type="radio" name="q7" value="d"> C++14</label>
                </div>
            </div>

            <!-- Question 8 -->
            <div class="quiz-question">
                <p class="content-text"><strong>8. Apa ekstensi file umum untuk kode sumber C++?</strong></p>
                <div class="quiz-options">
                    <label><input type="radio" name="q8" value="a"> .c</label>
                    <label><input type="radio" name="q8" value="b"> .cp</label>
                    <label><input type="radio" name="q8" value="c"> .cpp</label>
                    <label><input type="radio" name="q8" value="d"> .cx</label>
                </div>
            </div>

            <!-- Question 9 -->
            <div class="quiz-question">
                <p class="content-text"><strong>9. Mana yang bukan merupakan kelebihan bahasa C++?</strong></p>
                <div class="quiz-options">
                    <label><input type="radio" name="q9" value="a"> Eksekusi cepat dan efisien</label>
                    <label><input type="radio" name="q9" value="b"> Manajemen memori otomatis</label>
                    <label><input type="radio" name="q9" value="c"> Mendukung berbagai gaya pemrograman</label>
                    <label><input type="radio" name="q9" value="d"> Kompatibilitas dengan kode C</label>
                </div>
            </div>

            <!-- Question 10 -->
            <div class="quiz-question">
                <p class="content-text"><strong>10. C++ umumnya digunakan untuk pengembangan:</strong></p>
                <div class="quiz-options">
                    <label><input type="radio" name="q10" value="a"> Aplikasi web dinamis</label>
                    <label><input type="radio" name="q10" value="b"> Game dan engine game</label>
                    <label><input type="radio" name="q10" value="c"> Script database</label>
                    <label><input type="radio" name="q10" value="d"> Aplikasi Android</label>
                </div>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="submit-quiz">Selesai</button>
        </form>

        <!-- The quiz results will be processed on the quiz_result.php page -->
        <p class="content-text" style="text-align: center; font-style: italic;">Pilih jawaban terbaik untuk setiap pertanyaan dan klik "Selesai" untuk melihat skor Anda.</p>

    </div>

    <!-- NAVIGATION BUTTONS -->
    <div class="nav-buttons">
        <a href="materi.php"><button class="nav-button">Kembali ke Materi</button></a>
    </div>
</main>

</body>
</html>