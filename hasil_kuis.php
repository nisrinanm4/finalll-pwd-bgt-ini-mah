<?php
include 'koneksi.php';
session_start();

// Cek apakah session email sudah ada (user sudah login)
if (!isset($_SESSION['user_id'])) {
    header("Location: login&regis.php");
    exit();
}

// Array jawaban yang benar
$correct_answers = [
    'q1' => 'b', // Bjarne Stroustrup
    'q2' => 'b', // C with Classes
    'q3' => 'c', // Menunjukkan peningkatan dari bahasa C
    'q4' => 'b', // main()
    'q5' => 'a', // cout <<
    'q6' => 'd', // Prosedural, berorientasi objek, dan generik
    'q7' => 'b', // C++98
    'q8' => 'c', // .cpp
    'q9' => 'b', // Manajemen memori otomatis
    'q10' => 'b' // Game dan engine game
];

// Cek jika form telah disubmit
$score = 0;
$total_questions = count($correct_answers);
$answered_questions = 0;
$user_answers = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Proses setiap jawaban
    foreach ($correct_answers as $question => $correct_answer) {
        if (isset($_POST[$question])) {
            $answered_questions++;
            $user_answers[$question] = $_POST[$question];
            
            if ($_POST[$question] == $correct_answer) {
                $score++;
            }
        }
    }
}

// Mendapatkan persentase skor
$percentage = ($score / $total_questions) * 100;

// Mendapatkan feedback berdasarkan skor
function getFeedback($percentage) {
    if ($percentage >= 80) {
        return [
            'message' => 'Luar Biasa!',
            'details' => 'Anda memiliki pemahaman yang sangat baik tentang dasar-dasar C++.',
            'color' => '#2e7d32' // Dark green
        ];
    } elseif ($percentage >= 60) {
        return [
            'message' => 'Bagus!',
            'details' => 'Anda memiliki pemahaman yang cukup tentang C++, namun masih perlu diperkuat.',
            'color' => '#1565c0' // Dark blue
        ];
    } else {
        return [
            'message' => 'Perlu Belajar Lagi',
            'details' => 'Disarankan untuk mempelajari kembali materi dasar C++ untuk meningkatkan pemahaman Anda.',
            'color' => '#c62828' // Dark red
        ];
    }
}

$feedback = getFeedback($percentage);

// Array untuk memetakan opsi jawaban ke teks sebenarnya
$answer_text = [
    'q1' => [
        'a' => 'Dennis Ritchie',
        'b' => 'Bjarne Stroustrup',
        'c' => 'James Gosling',
        'd' => 'Guido van Rossum'
    ],
    'q2' => [
        'a' => 'B with Classes',
        'b' => 'C with Classes',
        'c' => 'C Advanced',
        'd' => 'C Extended'
    ],
    'q3' => [
        'a' => 'Menunjukkan bahwa bahasa ini adalah versi kedua dari C',
        'b' => 'Hanya nama yang dipilih secara acak',
        'c' => 'Menunjukkan peningkatan dari bahasa C',
        'd' => 'Merepresentasikan operator increment dalam bahasa tersebut'
    ],
    'q4' => [
        'a' => 'start()',
        'b' => 'main()',
        'c' => 'begin()',
        'd' => 'run()'
    ],
    'q5' => [
        'a' => 'cout <<',
        'b' => 'cin >>',
        'c' => 'printf()',
        'd' => 'print()'
    ],
    'q6' => [
        'a' => 'Hanya berorientasi objek',
        'b' => 'Hanya prosedural',
        'c' => 'Berorientasi objek dan prosedural',
        'd' => 'Prosedural, berorientasi objek, dan generik'
    ],
    'q7' => [
        'a' => 'C++11',
        'b' => 'C++98',
        'c' => 'C++03',
        'd' => 'C++14'
    ],
    'q8' => [
        'a' => '.c',
        'b' => '.cp',
        'c' => '.cpp',
        'd' => '.cx'
    ],
    'q9' => [
        'a' => 'Eksekusi cepat dan efisien',
        'b' => 'Manajemen memori otomatis',
        'c' => 'Mendukung berbagai gaya pemrograman',
        'd' => 'Kompatibilitas dengan kode C'
    ],
    'q10' => [
        'a' => 'Aplikasi web dinamis',
        'b' => 'Game dan engine game',
        'c' => 'Script database',
        'd' => 'Aplikasi Android'
    ]
];

// Array untuk memetakan ke pertanyaan sebenarnya
$questions = [
    'q1' => 'Siapa yang mengembangkan bahasa pemrograman C++?',
    'q2' => 'Apa nama awal C++ sebelum dinamai demikian?',
    'q3' => 'Apa arti simbol ++ dalam nama C++?',
    'q4' => 'Fungsi apa yang menjadi titik masuk utama dalam program C++?',
    'q5' => 'Operator apa yang digunakan untuk menampilkan output ke layar di C++?',
    'q6' => 'Paradigma pemrograman apa saja yang didukung oleh C++?',
    'q7' => 'Versi C++ berikut yang dirilis paling awal adalah:',
    'q8' => 'Apa ekstensi file umum untuk kode sumber C++?',
    'q9' => 'Mana yang bukan merupakan kelebihan bahasa C++?',
    'q10' => 'C++ umumnya digunakan untuk pengembangan:'
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Quiz C++ - CodeNest</title>
   <link rel="stylesheet" href="CSS/hasil_kuis.css">
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
        <h1 class="tutorial-title">Hasil Quiz C++</h1>

        <div class="tutorial-container">
            <div class="result-container">
                <h2 class="section-title">Hasil Quiz Dasar-Dasar C++ Anda</h2>
                
                <div class="score-display">
                    <?php echo $score . " / " . $total_questions; ?>
                </div>
                
                <div class="progress-container">
                    <div class="progress-bar" style="width: <?php echo $percentage; ?>%; background-color: <?php echo $feedback['color']; ?>;">
                        <?php echo round($percentage) . "%"; ?>
                    </div>
                </div>
                
                <div class="feedback-message" style="color: <?php echo $feedback['color']; ?>;">
                    <?php echo $feedback['message']; ?>
                </div>
                
                <div class="feedback-details">
                    <?php echo $feedback['details']; ?>
                </div>
                
                <?php if($answered_questions < $total_questions): ?>
                <div style="color: #e65100; margin-bottom: 20px;">
                    <p>Anda hanya menjawab <?php echo $answered_questions; ?> dari <?php echo $total_questions; ?> pertanyaan.</p>
                </div>
                <?php endif; ?>
                
                <!-- Jawaban yang benar -->
                <div class="answers-review">
                    <h3 class="section-title">Tinjauan Jawaban:</h3>
                    
                    <?php
                    // Tampilkan setiap pertanyaan dan jawaban
                    foreach ($questions as $q_id => $question) {
                        $is_correct = false;
                        $user_answer = isset($user_answers[$q_id]) ? $user_answers[$q_id] : '';
                        
                        if ($user_answer === $correct_answers[$q_id]) {
                            $is_correct = true;
                        }
                        
                        echo '<div class="answer-item ' . ($is_correct ? 'correct' : 'incorrect') . '">';
                        echo '<div class="answer-status">' . ($is_correct ? '✓ Benar' : '✗ Salah') . '</div>';
                        echo '<p><strong>Pertanyaan ' . substr($q_id, 1) . ':</strong> ' . $question . '</p>';
                        
                        if (!empty($user_answer)) {
                            echo '<p>Jawaban Anda: ' . $answer_text[$q_id][$user_answer] . '</p>';
                        } else {
                            echo '<p>Anda tidak menjawab pertanyaan ini.</p>';
                        }
                        
                        if (!$is_correct) {
                            echo '<p>Jawaban yang benar: ' . $answer_text[$q_id][$correct_answers[$q_id]] . '</p>';
                        }
                        
                        echo '</div>';
                    }
                    ?>
                </div>

                <p class="content-text" style="margin-top: 30px;">
                    Teruslah belajar dan jangan ragu untuk mengulang materi tentang C++ untuk meningkatkan pemahaman Anda!
                </p>
            </div>
        </div>

        <!-- NAVIGATION BUTTONS -->
        <div class="nav-buttons">
            <a href="kuis.php"><button class="nav-button">Coba Lagi</button></a>
            <a href="materi.php"><button class="nav-button">Kembali ke Materi</button></a>
        </div>
    </main>
</body>
</html>