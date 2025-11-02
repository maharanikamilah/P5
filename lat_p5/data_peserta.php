<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Peserta</title>
    <style>
        body {
            font-family: 'Segoe UI';
            background: #e9f5e9;
            margin: 0;
            padding: 20px;
        }
        h2 {
            color:rgb(10, 56, 25);
            margin-bottom: 15px;
        }
        a { text-decoration: none; }
        .btn {
            background:rgb(11, 52, 32);
            color: white;
            padding: 8px 12px;
            border-radius: 6px;
            font-size: 14px;
            display: inline-block;
        }
        .btn:hover { background:rgb(10, 48, 36); }

        .back { color: #2a7b2a; margin-bottom: 10px; display: inline-block; }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            border-radius: 6px;
            overflow: hidden;
        }
        th {
            background:rgb(9, 45, 29);
            color: white;
            padding: 10px;
        }
        td {
            padding: 8px;
            border: 1px solid #cde5cd;
            text-align: center;
            font-size: 14px;
        }
        td a {
            color: #2a7b2a;
            font-weight: bold;
        }
        td a:hover { text-decoration: underline; }
    </style>
</head>
<body>

<a href="index.php" class="back">← Kembali ke Dashboard</a>

<h2>Data Peserta Desa</h2>

<a href="tambah_peserta.php" class="btn">+ Tambah Peserta</a>
<br><br>

<table>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NIK</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>No Telp</th>
        <th>Aksi</th>
    </tr>

    <?php
    $no = 1;
    $query = mysqli_query($koneksi, "SELECT * FROM peserta ORDER BY id_peserta ASC");
    while ($data = mysqli_fetch_array($query)) {
        echo "
        <tr>
            <td>$no</td>
            <td>$data[nama_peserta]</td>
            <td>$data[nik]</td>
            <td>$data[jenis_kelamin]</td>
            <td>$data[alamat]</td>
            <td>$data[no_telp]</td>
            <td>
                <a href='edit_peserta.php?id=$data[id_peserta]'>Edit</a> |
                <a href='hapus_peserta.php?id=$data[id_peserta]' onclick='return confirm(\"Hapus data ini?\")'>Hapus</a>
            </td>
        </tr>";
        $no++;
    }
    ?>
</table>

</body>
</html>
