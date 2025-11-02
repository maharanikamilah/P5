<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard Desa</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

<style>
    body {
        margin: 0;
        font-family: 'Poppins', sans-serif;
        background-color: #06372F;
        color: #E9F8F2;
        display: flex;
    }

    /* Sidebar */
    .sidebar {
        width: 250px;
        background: #052922;
        padding: 25px;
        min-height: 100vh;
    }
    .sidebar h2 {
        text-align: center;
        margin-bottom: 30px;
        font-weight: 600;
        font-size: 20px;
    }
    .menu a {
        display: flex;
        align-items: center;
        padding: 12px;
        margin-bottom: 10px;
        border-radius: 8px;
        color: #E9F8F2;
        text-decoration: none;
        font-size: 15px;
        transition: 0.2s;
    }
    .menu a:hover,
    .menu a.active {
        background-color: #0D5043;
    }
    .menu a i {
        margin-right: 10px;
    }

    /* Main */
    .main {
        flex: 1;
        padding: 30px;
    }
    .main h1 {
        font-size: 28px;
        margin-bottom: 5px;
        font-weight: 600;
    }
    .main p {
        color: #B6E3D8;
        margin-bottom: 25px;
        font-size: 15px;
    }

    /* Grid Cards */
    .grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
    }
    .card {
        background: #0D5043;
        padding: 20px;
        border-radius: 12px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.2);
        transition: 0.2s ease;
    }
    .card:hover {
        transform: translateY(-4px);
    }
    .card h3 {
        font-size: 16px;
        color: #B6E3D8;
        font-weight: 500;
        margin-bottom: 5px;
    }
    .card .value {
        font-size: 34px;
        font-weight: 600;
    }

    /* Notifikasi area */
    .notif {
        margin-top: 20px;
        background: #0D5043;
        padding: 20px;
        border-radius: 12px;
    }
</style>
</head>
<body>

<!-- Sidebar -->
<div class="sidebar">
    <h2>DESA LEBAKSIU</h2>
    <div class="menu">
        <a class="active" href="index.php">Dashboard</a>
        <a href="kegiatan.php">Data Kegiatan</a>
        <a href="data_peserta.php">Data Peserta</a>
        <a href="lokasi.php">Lokasi</a>
        <a href="kategori_kegiatan.php">Kategori</a>
        <a href="pengumuman.php">Pengumuman</a>
        <a href="laporan_kegiatan.php">Laporan</a>
        <a href="log_aktivitas.php">Log Aktivitas</a>
        <a href="logout.php">Logout</a>
    </div>
</div>

<!-- Main Content -->
<div class="main">
    <h1>Sistem Informasi Penjadwalan Kegiatan Desa</h1>
    <p>Dashboard Admin</p>

    <!-- Statistik -->
    <div class="grid">
        <div class="card">
            <h3>Jumlah Kegiatan</h3>
            <div class="value">12</div>
        </div>

        <div class="card">
            <h3>Jumlah Peserta</h3>
            <div class="value">350</div>
        </div>

        <div class="card">
            <h3>Kegiatan Aktif</h3>
            <div class="value">5</div>
        </div>
    </div>

    <!-- Notifikasi -->
    <div class="notif">
        Notifikasi kegiatan terbaru...
    </div>

</div>
</body>
</html>
