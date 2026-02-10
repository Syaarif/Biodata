<?php
$nama_lengkap = "Muhammad Syaarif";
$nama_panggilan = "Syaarif";
$gender = "Laki-laki";
$agama = "Islam";
$kewarganegaraan = "Indonesia";


$tempat_lahir = "Semarang";
$tgl_lahir = "23";
$bulan_lahir = "Januari";
$tahun_lahir = 2010;


$alamat = "Jalan Bukit Palem Raja IX H4 No. 02, RT 07/RW 27, Meteseh, Tembalang, Semarang";
$wa = "089531465746";
$email = "muhammadsyaarif777@gmail.com";


$motto_hidup = "Dirimu adalah yang kamu pikirkan";


$foto = "Image/Syaarif.jpg";


$tahun_sekarang = date('Y');
$umur_sekarang = $tahun_sekarang - $tahun_lahir;
$tahun_plus_10 = $tahun_sekarang + 10;
$umur_plus_10 = $umur_sekarang + 10;


$keinginan = "Hai namaku $nama_panggilan, saat ini tahun $tahun_sekarang, aku adalah pelajar yang berumur $umur_sekarang tahun. 10 tahun lagi di tahun $tahun_plus_10, di umur $umur_plus_10 tahun, aku adalah seorang lulusan mahasiswa UNDIP yang telah bekerja di suatu perusahaan. Aku ingin membuat diriku bangga dengan diriku sendiri. Setelah itu, rencana yang akan aku tempuh adalah menjadi pengusaha yang tidak menerima gaji dari seseorang, tetapi memberikan gaji kepada banyak orang.";


$hobi = [
    "Desain Grafis",
    "Basket",
    "Main Game",
    "Nonton Film",
    "Coding"
];

$skills = [
    "Canva" => 70,
    "Affinity Design" => 10
    
];

$makanan_favorit = [
    "Bakso",
    "Nasi Goreng",
    "Ayam Goreng",
    "Mie Ayam",
    "Martabak"
];

$minuman_favorit = [
    "Air Putih",
    "Teh Manis",
    "Jus Jambu",
    "Kopi"
];

$pendidikan = [
    [
        "tingkat" => "SD",
        "sekolah" => "SD Negeri Meteseh 01",
        "mulai" => 2017,
        "lulus" => 2022
    ],
    [
        "tingkat" => "SMP",
        "sekolah" => "SMP Negeri 29 Semarang",
        "mulai" => 2022,
        "lulus" => 2025
    ],
    [
        "tingkat" => "SMK",
        "sekolah" => "SMK Negeri 08 Semarang",
        "mulai" => 2025,
        "lulus" => 2028
    ]
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata - <?php echo $nama_lengkap; ?></title>
    
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

        /* ===== HERO SECTION ===== */
        .hero {
            max-width: 1200px;
            margin: 3rem auto;
            padding: 0 2rem;
            text-align: center;
            animation: fadeInDown 0.8s ease;
        }

        .hero-content {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            border-radius: 30px;
            padding: 4rem 2rem;
            color: white;
            box-shadow: var(--shadow-lg);
            position: relative;
            overflow: hidden;
        }

        .hero-content::before {
            content: '';
            position: absolute;
            width: 500px;
            height: 500px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            top: -250px;
            right: -250px;
        }

        .hero-content::after {
            content: '';
            position: absolute;
            width: 300px;
            height: 300px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 50%;
            bottom: -150px;
            left: -150px;
        }

        .hero-inner {
            position: relative;
            z-index: 1;
        }

        .profile-picture {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin: 0 auto 1.5rem;
            border: 5px solid white;
            object-fit: cover;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
            animation: zoomIn 0.8s ease;
        }

        .hero-name {
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 0.5rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
            animation: slideInUp 0.8s ease 0.2s both;
        }

        .hero-nickname {
            font-size: 1.3rem;
            opacity: 0.95;
            margin-bottom: 1.5rem;
            animation: slideInUp 0.8s ease 0.4s both;
        }

        .hero-motto {
            font-size: 1.1rem;
            font-style: italic;
            background: rgba(255, 255, 255, 0.2);
            padding: 1rem 2rem;
            border-radius: 20px;
            display: inline-block;
            animation: slideInUp 0.8s ease 0.6s both;
            backdrop-filter: blur(5px);
             position: relative; /* penting */
    animation: kananKiri 3s infinite alternate ease-in-out;

        }
            @keyframes kananKiri {
    from {
        left: -50px;
    }
    to {
        left: 50px;
    }
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
            display: flex;
            align-items: center;
            gap: 1rem;
            animation: slideInLeft 0.6s ease;
        }

        .section-title i {
            font-size: 2.2rem;
        }

        /* ===== INFO CARDS GRID ===== */
        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-bottom: 3rem;
            animation: fadeIn 0.8s ease 0.3s both;
        }

        .info-card {
            background: var(--bg-white);
            padding: 1.5rem;
            border-radius: 20px;
            box-shadow: var(--shadow);
            transition: all 0.3s ease;
            border: 2px solid transparent;
            position: relative;
            overflow: hidden;
        }

        .info-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.5s ease;
        }

        .info-card:hover {
            transform: translateY(-8px);
            border-color: var(--primary);
            box-shadow: var(--shadow-lg);
        }

        .info-card:hover::before {
            left: 100%;
        }

        .info-card-icon {
            font-size: 2rem;
            color: var(--primary);
            margin-bottom: 0.5rem;
        }

        .info-card-label {
            font-size: 0.85rem;
            color: var(--text-light);
            text-transform: uppercase;
            font-weight: 600;
            letter-spacing: 0.5px;
            margin-bottom: 0.5rem;
        }

        .info-card-value {
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--text-dark);
        }

        /* ===== KEINGINAN 10 TAHUN LAGI ===== */
        .future-card {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            padding: 2rem;
            border-radius: 20px;
            box-shadow: var(--shadow-lg);
            margin-bottom: 3rem;
            animation: fadeInUp 0.8s ease;
        }

        .future-card h3 {
            font-size: 1.3rem;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.8rem;
        }

        .future-card p {
            font-size: 1rem;
            line-height: 1.8;
            opacity: 0.95;
        }

        /* ===== HOBI ===== */
        .hobi-list {
            background: var(--bg-white);
            padding: 2rem;
            border-radius: 20px;
            box-shadow: var(--shadow);
            margin-bottom: 3rem;
            animation: fadeInUp 0.8s ease 0.2s both;
        }

        .hobi-list ol {
            list-style: none;
            counter-reset: hobi-counter;
        }

        .hobi-list li {
            counter-increment: hobi-counter;
            margin-bottom: 1rem;
            padding: 1rem;
            background: linear-gradient(135deg, var(--primary-lighter) 0%, transparent 100%);
            border-radius: 10px;
            font-weight: 500;
            transition: all 0.3s ease;
            border-left: 4px solid var(--primary);
            padding-left: 1.5rem;
        }

        .hobi-list li:hover {
            transform: translateX(8px);
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
            color: white;
        }

        .hobi-list li::before {
            counter-style: decimal;
            content: counter(hobi-counter);
            display: inline-block;
            width: 30px;
            height: 30px;
            background: var(--primary);
            color: white;
            border-radius: 50%;
            text-align: center;
            line-height: 30px;
            margin-right: 0.8rem;
            font-weight: 700;
            margin-left: -1rem;
        }

        .hobi-list li:hover::before {
            background: white;
            color: var(--primary);
        }

        /* ===== SKILLS ===== */
        .skills-grid {
            background: var(--bg-white);
            padding: 2rem;
            border-radius: 20px;
            box-shadow: var(--shadow);
            margin-bottom: 3rem;
            animation: fadeInUp 0.8s ease 0.35s both;
        }

        .skill-item {
            margin-bottom: 2rem;
        }

        .skill-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 0.5rem;
        }

        .skill-name {
            font-weight: 600;
            color: var(--text-dark);
        }

        .skill-percent {
            color: var(--primary);
            font-weight: 700;
        }

        .skill-bar {
            width: 100%;
            height: 8px;
            background: #e2e8f0;
            border-radius: 10px;
            overflow: hidden;
        }

        .skill-progress {
            height: 100%;
            background: linear-gradient(90deg, var(--primary) 0%, var(--accent) 100%);
            border-radius: 10px;
            animation: fillBar 1.5s ease-out;
            transition: width 0.3s ease;
        }

        @keyframes fillBar {
            from {
                width: 0;
            }
            to {
                width: var(--width);
            }
        }

        /* ===== MAKANAN FAVORIT ===== */
        .makanan-list {
            background: var(--bg-white);
            padding: 2rem;
            border-radius: 20px;
            box-shadow: var(--shadow);
            margin-bottom: 3rem;
            animation: fadeInUp 0.8s ease 0.5s both;
        }

        .makanan-list ul {
            list-style: none;
        }

        .makanan-list li {
            padding: 1rem;
            margin-bottom: 0.8rem;
            background: #f1f5f9;
            border-radius: 8px;
            transition: all 0.3s ease;
            padding-left: 2rem;
            position: relative;
        }

        .makanan-list li:hover {
            background: linear-gradient(135deg, var(--primary-lighter) 0%, #e0f2fe 100%);
            transform: translateX(8px);
        }

        .makanan-list li::before {
            content: '';
            position: absolute;
            left: 0.8rem;
            top: 50%;
            transform: translateY(-50%);
            width: 12px;
            height: 12px;
            background: var(--primary);
            border-radius: 2px;
        }

        /* ===== MINUMAN FAVORIT ===== */
        .minuman-list {
            background: var(--bg-white);
            padding: 2rem;
            border-radius: 20px;
            box-shadow: var(--shadow);
            margin-bottom: 3rem;
            animation: fadeInUp 0.8s ease 0.65s both;
        }

        .minuman-list ol {
            list-style: none;
            counter-reset: minuman-counter;
        }

        .minuman-list li {
            counter-increment: minuman-counter;
            padding: 1rem;
            margin-bottom: 0.8rem;
            background: #f1f5f9;
            border-radius: 8px;
            transition: all 0.3s ease;
            padding-left: 2rem;
            position: relative;
        }

        .minuman-list li:hover {
            background: linear-gradient(135deg, var(--primary-lighter) 0%, #e0f2fe 100%);
            transform: translateX(8px);
        }

        .minuman-list li::before {
            content: '';
            position: absolute;
            left: 0.7rem;
            top: 50%;
            transform: translateY(-50%);
            width: 24px;
            height: 20px;
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            color: var(--primary);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .minuman-list li:nth-child(1)::before { content: 'A'; }
        .minuman-list li:nth-child(2)::before { content: 'B'; }
        .minuman-list li:nth-child(3)::before { content: 'C'; }
        .minuman-list li:nth-child(4)::before { content: 'D'; }
        .minuman-list li:nth-child(5)::before { content: 'E'; }

        /* ===== TABEL PENDIDIKAN ===== */
        .table-container {
            background: var(--bg-white);
            padding: 2rem;
            border-radius: 20px;
            box-shadow: var(--shadow);
            margin-bottom: 3rem;
            overflow-x: auto;
            animation: fadeInUp 0.8s ease 0.8s both;
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
            text-align: left;
            font-weight: 600;
            letter-spacing: 0.5px;
        }

        table td {
            padding: 1.2rem;
            border-bottom: 1px solid #e2e8f0;
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

        table tbody tr:hover td {
            font-weight: 500;
        }

        /* ===== TOMBOL ===== */
        .action-button {
            display: inline-block;
            padding: 1rem 2rem;
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            text-decoration: none;
            border-radius: 12px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 5px 20px rgba(30, 64, 175, 0.3);
            border: none;
            cursor: pointer;
            font-family: 'Poppins', sans-serif;
            font-size: 1rem;
            display: inline-flex;
            align-items: center;
            gap: 0.8rem;
            margin-top: 2rem;
            animation: slideInUp 0.8s ease 0.9s both;
        }

        .action-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(30, 64, 175, 0.4);
        }

        .action-button:active {
            transform: translateY(-1px);
        }

        .btn-back {
            background: linear-gradient(135deg, #6b7280 0%, #4b5563 100%);
            box-shadow: 0 5px 20px rgba(107, 114, 128, 0.3);
        }

        .btn-back:hover {
            box-shadow: 0 10px 30px rgba(107, 114, 128, 0.4);
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

        @keyframes zoomIn {
            from {
                opacity: 0;
                transform: scale(0.8);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 768px) {
            .hero-name {
                font-size: 2rem;
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

            .hero {
                padding: 0 1rem;
            }

            .info-grid {
                grid-template-columns: 1fr;
            }

            .section-title {
                font-size: 1.5rem;
            }

            .hero-content {
                padding: 2rem 1rem;
            }
        }
    </style>
</head>
<body>
    <!-- NAVBAR -->
    <nav>
        <div class="navbar-container">
            <div class="nav-brand">
                <i class="fas fa-user-graduate"></i> Biodata
            </div>
            <ul class="nav-links">
                <li><a href="index.php" class="active">Biodata</a></li>
                <li><a href="jadwal.php">Jadwal</a></li>
            </ul>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <section class="hero">
        <div class="hero-content">
            <div class="hero-inner">
                <img src="<?php echo $foto; ?>" alt="<?php echo $nama_panggilan; ?>" class="profile-picture">
                <h1 class="hero-name"><?php echo $nama_lengkap; ?></h1>
                <p class="hero-nickname">A.K.A <strong><?php echo strtoupper($nama_panggilan); ?></strong></p>
                <div class="hero-motto">
                    <i class="fas fa-quote-left"></i> <?php echo $motto_hidup; ?> <i class="fas fa-quote-right"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- INFORMASI PRIBADI -->
    <div class="container">
        <h2 class="section-title">
            <i class="fas fa-id-card"></i> Informasi Pribadi
        </h2>

        <div class="info-grid">
            <div class="info-card">
                <div class="info-card-icon">
                    <i class="fas fa-user"></i>
                </div>
                <div class="info-card-label">Nama Lengkap</div>
                <div class="info-card-value"><?php echo $nama_lengkap; ?></div>
            </div>

            <div class="info-card">
                <div class="info-card-icon">
                    <i class="fas fa-smile"></i>
                </div>
                <div class="info-card-label">Nama Panggilan</div>
                <div class="info-card-value"><?php echo $nama_panggilan; ?></div>
            </div>

            <div class="info-card">
                <div class="info-card-icon">
                    <i class="fas fa-venus-mars"></i>
                </div>
                <div class="info-card-label">Gender</div>
                <div class="info-card-value"><?php echo $gender; ?></div>
            </div>

            <div class="info-card">
                <div class="info-card-icon">
                    <i class="fas fa-mosque"></i>
                </div>
                <div class="info-card-label">Agama</div>
                <div class="info-card-value"><?php echo $agama; ?></div>
            </div>

            <div class="info-card">
                <div class="info-card-icon">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="info-card-label">Tempat Lahir</div>
                <div class="info-card-value"><?php echo $tempat_lahir; ?></div>
            </div>

            <div class="info-card">
                <div class="info-card-icon">
                    <i class="fas fa-calendar-alt"></i>
                </div>
                <div class="info-card-label">Tanggal Lahir</div>
                <div class="info-card-value"><?php echo "$tgl_lahir $bulan_lahir $tahun_lahir"; ?></div>
            </div>

            <div class="info-card">
                <div class="info-card-icon">
                    <i class="fas fa-birthday-cake"></i>
                </div>
                <div class="info-card-label">Umur</div>
                <div class="info-card-value"><?php echo "$umur_sekarang Tahun"; ?></div>
            </div>

            <div class="info-card">
                <div class="info-card-icon">
                    <i class="fas fa-passport"></i>
                </div>
                <div class="info-card-label">Kewarganegaraan</div>
                <div class="info-card-value"><?php echo $kewarganegaraan; ?></div>
            </div>

            <div class="info-card">
                <div class="info-card-icon">
                    <i class="fas fa-map"></i>
                </div>
                <div class="info-card-label">Alamat</div>
                <div class="info-card-value"><?php echo $alamat; ?></div>
            </div>

            <div class="info-card">
                <div class="info-card-icon">
                    <i class="fas fa-whatsapp"></i>
                </div>
                <div class="info-card-label">No. WhatsApp</div>
                <div class="info-card-value"><?php echo $wa; ?></div>
            </div>

            <div class="info-card">
                <div class="info-card-icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="info-card-label">Email</div>
                <div class="info-card-value"><?php echo $email; ?></div>
            </div>
        </div>

        <!-- KEINGINAN 10 TAHUN LAGI -->
        <div class="future-card">
            <h3>
                <i class="fas fa-star"></i> Keinginan 10 Tahun Lagi
            </h3>
            <p><?php echo $keinginan; ?></p>
        </div>

        <!-- HOBI -->
        <h2 class="section-title">
            <i class="fas fa-heart"></i> Hobi Saya
        </h2>
        <div class="hobi-list">
            <ol>
                <?php foreach ($hobi as $h) { ?>
                    <li><?php echo $h; ?></li>
                <?php } ?>
            </ol>
        </div>

        <!-- SKILLS -->
        <h2 class="section-title">
            <i class="fas fa-chart-line"></i> Skills & Kemampuan
        </h2>
        <div class="skills-grid">
            <?php foreach ($skills as $skill => $persen) { ?>
                <div class="skill-item">
                    <div class="skill-header">
                        <span class="skill-name"><?php echo $skill; ?></span>
                        <span class="skill-percent"><?php echo $persen; ?>%</span>
                    </div>
                    <div class="skill-bar">
                        <div class="skill-progress" style="--width: <?php echo $persen; ?>%;"></div>
                    </div>
                </div>
            <?php } ?>
        </div>

        <!-- MAKANAN FAVORIT -->
        <h2 class="section-title">
            <i class="fas fa-hamburger"></i> Makanan Favorit
        </h2>
        <div class="makanan-list">
            <ul>
                <?php foreach ($makanan_favorit as $makanan) { ?>
                    <li><?php echo $makanan; ?></li>
                <?php } ?>
            </ul>
        </div>

        <!-- MINUMAN FAVORIT -->
        <h2 class="section-title">
            <i class="fas fa-glass-cheers"></i> Minuman Favorit
        </h2>
        <div class="minuman-list">
            <ol>
                <?php foreach ($minuman_favorit as $minuman) { ?>
                    <li><?php echo $minuman; ?></li>
                <?php } ?>
            </ol>
        </div>

        <!-- RIWAYAT PENDIDIKAN -->
        <h2 class="section-title">
            <i class="fas fa-graduation-cap"></i> Riwayat Pendidikan
        </h2>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th><i class="fas fa-school"></i> Tingkat</th>
                        <th><i class="fas fa-building"></i> Nama Sekolah</th>
                        <th><i class="fas fa-sign-in-alt"></i> Tahun Mulai</th>
                        <th><i class="fas fa-sign-out-alt"></i> Tahun Lulus</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($pendidikan as $p) { ?>
                        <tr>
                            <td><?php echo $p['tingkat']; ?></td>
                            <td><?php echo $p['sekolah']; ?></td>
                            <td><?php echo $p['mulai']; ?></td>
                            <td><?php echo $p['lulus']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <!-- TOMBOL NAVIGASI -->
        <div style="text-align: center; margin-bottom: 3rem;">
            <a href="jadwal.php" class="action-button">
                <i class="fas fa-clock"></i>
                Lihat Jadwal Pelajaran
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>

    <!-- FOOTER -->
    <footer>
        <p>&copy; 2026 Biodata <?php echo $nama_panggilan; ?>. Dibuat dengan <i class="fas fa-heart" style="color: #ff6b6b;"></i> dan PHP, HTML, CSS & JavaScript.</p>
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

        // Animasi Progress Bar saat 'bisa dilihat'
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animation = 'none';
                    setTimeout(() => {
                        entry.target.style.animation = '';
                    }, 10);
                }
            });
        }, observerOptions);

        document.querySelectorAll('.skill-progress').forEach(el => {
            observer.observe(el);
        });
    </script>
</body>
</html>