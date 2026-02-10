<?php

$nama_lengkap = "Muhammad Syaarif";
$nama_panggilan = "Syaarif";

$jam = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10"];

$jadwal_pelajaran = [
    "Senin" => [
        "Bahasa Inggris",
        "Bahasa Inggris",
        "KKA",
        "KKA",
        "KKA",
        "KKA",
        "GIM",
        "GIM",
        "GIM",
        "GIM"
    ],
    "Selasa" => [
        "Matematika",
        "Matematika",
        "Seni Musik",
        "Seni Musik",
        "Ipas",
        "Ipas",
        "Ipas",
        "Ipas",
        "Bahasa Indonesia",
        "Bahasa Indonesia"
    ],
    "Rabu" => [
        "Pelajaran Agama",
        "Pelajaran Agama",
        "Pelajaran Agama",
        "Pelajaran Olahraga",
        "Pelajaran Olahraga",
        "Pelajaran Olahraga",
        "Bahasa Jawa",
        "Bahasa Jawa",
        "Sejarah",
        "Sejarah"
    ],
    "Kamis" => [
        "Bahasa Inggris",
        "Bahasa Inggris",
        "PGD",
        "PGD",
        "PGD",
        "PGD",
        "PGD",
        "PGD",
        "PGD",
        "PGD"
    ],
    "Jumat" => [
        "Ipas",
        "Ipas",
        "Matematika",
        "Matematika",
        "PPS",
        "PPS",
        "Bahasa Indonesia",
        "Bahasa Indonesia",
        "-",
        "-"
    ]
];

$jadwal_piket = [
    "Senin" => "Cahaya, Azka, Fanessa, Nafiu, Ridwan, Rama, Aca",
    "Selasa" => "Syaarif, Teo, Zidni, Diva, Angel, Galuh, Love",
    "Rabu" => "Marta, Nashwa, Reizo, Alfarizi, Ines",
    "Kamis" => "Jihan, Jason, Qais, Gavian, Bunga, Tata, Valen",
    "Jumat" => "Leon, Ubay, Virda, Alin, Windy, Kael, Ihsan"
];

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal - <?php echo $nama_lengkap; ?></title>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary: #1e40af;
            --primary-dark: #1e3a8a;
            --primary-light: #3b82f6;
            --primary-lighter: #93c5fd;
            --secondary: #0369a1;
            --accent: #06b6d4;
            --text-dark: #0f172a;
            --text-light: #64748b;
            --bg-light: #f8fafc;
            --bg-white: #ffffff;
            --shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            --shadow-lg: 0 20px 50px rgba(0, 0, 0, 0.15);
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f8fafc 0%, #e0f2fe 100%);
            color: var(--text-dark);
            line-height: 1.6;
            min-height: 100vh;
        }

        /* ===== NAVBAR ===== */
        nav {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: var(--shadow);
            position: sticky;
            top: 0;
            z-index: 100;
            padding: 1rem 0;
            border-bottom: 2px solid var(--primary-lighter);
        }

        .navbar-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .nav-brand {
            font-size: 1.5rem;
            font-weight: 700;
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
            list-style: none;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--text-dark);
            font-weight: 500;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-links a:hover {
            color: var(--primary);
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--primary);
            transition: width 0.3s ease;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .nav-links a.active {
            color: var(--primary);
        }

        .nav-links a.active::after {
            width: 100%;
        }

        /* ===== CONTAINER ===== */
        .container {
            max-width: 1200px;
            margin: 3rem auto;
            padding: 0 2rem;
        }

        .section-title {
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 2rem;
            margin-top: 3rem;
            display: flex;
            align-items: center;
            gap: 1rem;
            animation: slideInLeft 0.6s ease;
        }

        .section-title i {
            font-size: 2.2rem;
        }

        /* ===== PAGE HEADER ===== */
        .page-header {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            padding: 3rem 2rem;
            border-radius: 20px;
            margin-bottom: 2rem;
            box-shadow: var(--shadow-lg);
            text-align: center;
            animation: fadeInDown 0.8s ease;
        }

        .page-header h1 {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
        }

        .page-header p {
            font-size: 1.1rem;
            opacity: 0.95;
        }

        /* ===== JADWAL PELAJARAN TABEL ===== */
        .table-container {
            background: var(--bg-white);
            padding: 2rem;
            border-radius: 20px;
            box-shadow: var(--shadow);
            margin-bottom: 3rem;
            overflow-x: auto;
            animation: fadeInUp 0.8s ease 0.2s both;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table thead {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
        }

        table th {
            padding: 1.2rem;
            text-align: center;
            font-weight: 600;
            letter-spacing: 0.5px;
            border: 2px solid var(--primary);
        }

        table td {
            padding: 1rem;
            border: 1px solid #e2e8f0;
            text-align: left;
            font-weight: 500;
        }

        table tbody tr {
            transition: all 0.3s ease;
        }

        table tbody tr:nth-child(odd) {
            background: #f8fafc;
        }

        table tbody tr:hover {
            background: var(--primary-lighter);
        }

        table td:first-child {
            font-weight: 700;
            color: var(--primary);
            text-align: center;
            min-width: 60px;
        }

        /* ===== JADWAL PIKET TABEL ===== */
        .piket-table td {
            padding: 1.2rem;
        }

        .piket-table tbody tr:hover {
            transform: scale(1.02);
        }

        /* Highlight nama pelajar di jadwal piket */
        .piket-nama {
            display: inline-block;
        }

        .piket-nama.highlight {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            padding: 0.4rem 0.8rem;
            border-radius: 8px;
            font-weight: 700;
            margin: 0.3rem 0.3rem 0.3rem 0;
        }

        /* ===== TOMBOL ===== */
        .action-button {
            display: inline-block;
            padding: 1rem 2rem;
            background: linear-gradient(135deg, #6b7280 0%, #4b5563 100%);
            color: white;
            text-decoration: none;
            border-radius: 12px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 5px 20px rgba(107, 114, 128, 0.3);
            border: none;
            cursor: pointer;
            font-family: 'Poppins', sans-serif;
            font-size: 1rem;
            display: inline-flex;
            align-items: center;
            gap: 0.8rem;
            margin: 2rem 0;
            animation: slideInUp 0.8s ease 0.6s both;
        }

        .action-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(107, 114, 128, 0.4);
        }

        .action-button:active {
            transform: translateY(-1px);
        }

        /* ===== FOOTER ===== */
        footer {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            text-align: center;
            padding: 2rem;
            margin-top: 3rem;
            font-size: 0.9rem;
        }

        /* ===== ANIMASI ===== */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 768px) {
            .page-header h1 {
                font-size: 1.8rem;
            }

            .nav-links {
                gap: 1rem;
            }

            .navbar-container {
                padding: 0 1rem;
            }

            .container {
                padding: 0 1rem;
            }

            .table-container {
                overflow-x: auto;
                padding: 1rem;
            }

            table {
                font-size: 0.9rem;
            }

            table th,
            table td {
                padding: 0.8rem 0.5rem;
            }

            .section-title {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- NAVBAR -->
    <nav>
        <div class="navbar-container">
            <div class="nav-brand">
                <i class="fas fa-clock"></i> Jadwal
            </div>
            <ul class="nav-links">
                <li><a href="index.php">Biodata</a></li>
                <li><a href="jadwal.php" class="active">Jadwal</a></li>
            </ul>
        </div>
    </nav>

    <!-- PAGE HEADER -->
    <div class="container">
        <div class="page-header">
            <h1><i class="fas fa-calendar-check"></i> Jadwal Pelajaran & Piket</h1>
            <p>Jadwal pelajaran mingguan dan pembagian piket untuk <?php echo $nama_lengkap; ?></p>
        </div>

        <!-- JADWAL PELAJARAN -->
        <h2 class="section-title">
            <i class="fas fa-book"></i> Jadwal Pelajaran (Jam 1-10)
        </h2>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th style="min-width: 70px;">JAM</th>
                        <th>Senin</th>
                        <th>Selasa</th>
                        <th>Rabu</th>
                        <th>Kamis</th>
                        <th>Jumat</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($jam as $index => $j) { ?>
                        <tr>
                            <td><?php echo "JAM " . $j; ?></td>
                            <td><?php echo $jadwal_pelajaran['Senin'][$index]; ?></td>
                            <td><?php echo $jadwal_pelajaran['Selasa'][$index]; ?></td>
                            <td><?php echo $jadwal_pelajaran['Rabu'][$index]; ?></td>
                            <td><?php echo $jadwal_pelajaran['Kamis'][$index]; ?></td>
                            <td><?php echo $jadwal_pelajaran['Jumat'][$index]; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <!-- JADWAL PIKET -->
        <h2 class="section-title">
            <i class="fas fa-broom"></i> Jadwal Piket
        </h2>
        <div class="table-container">
            <table class="piket-table">
                <thead>
                    <tr>
                        <th style="min-width: 100px;">Hari</th>
                        <th>Nama Anggota (Piket)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($jadwal_piket as $hari => $nama_piket) { 
                        // Pisahkan nama berdasarkan koma
                        $daftar_piket = array_map('trim', explode(',', $nama_piket));
                    ?>
                        <tr>
                            <td><?php echo $hari; ?></td>
                            <td>
                                <?php foreach ($daftar_piket as $piket) { ?>
                                    <span class="piket-nama <?php echo ($piket == $nama_panggilan) ? 'highlight' : ''; ?>">
                                        <?php echo $piket; ?>
                                    </span>
                                <?php } ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <!-- TOMBOL KEMBALI -->
        <div style="text-align: center;">
            <a href="index.php" class="action-button">
                <i class="fas fa-arrow-left"></i>
                Kembali ke Biodata
            </a>
        </div>
    </div>

    <!-- FOOTER -->
    <footer>
        <p>&copy; 2026 Jadwal <?php echo $nama_panggilan; ?>.Dibuat dengan <i class="fas fa-heart" style="color: #ff6b6b;"></i> dan PHP, HTML, CSS & JavaScript.</p>
    </footer>

    <script>
        // Smooth Scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            });
        });
    </script>
</body>
</html>