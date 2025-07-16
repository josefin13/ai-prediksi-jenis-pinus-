<?php
session_start();
require 'db.php';
require 'fungsi_cf.php'; // nanti kita buat
require 'fungsi_knn.php'; // nanti kita buat

// Tangkap input
$diameter = $_POST['diameter'];
$tinggi = $_POST['tinggi'];

// Jalankan proses CF
$cf_result = hitung_cf($diameter, $tinggi, $conn);

// Jalankan proses KNN
$knn_result = hitung_knn($diameter, $tinggi, $conn);

// Gabungkan hasil
$hasil_akhir = "";
$keyakinan = 0;

if ($cf_result['jenis'] == $knn_result['jenis']) {
    $hasil_akhir = $cf_result['jenis'];
    $keyakinan = round((($cf_result['cf'] + $knn_result['confidence']) / 2) * 100, 2);
} else {
    // Jika berbeda, ambil yang confidence-nya lebih besar
    if ($cf_result['cf'] >= $knn_result['confidence']) {
        $hasil_akhir = $cf_result['jenis'] . " (via CF)";
        $keyakinan = round($cf_result['cf'] * 100, 2);
    } else {
        $hasil_akhir = $knn_result['jenis'] . " (via KNN)";
        $keyakinan = round($knn_result['confidence'] * 100, 2);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Hasil Diagnosa</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow-lg p-4" style="width: 100%; max-width: 600px;">
        <h3 class="text-center mb-4 text-success">Hasil Diagnosa Jenis Pinus</h3>

        <ul class="list-group mb-3">
            <li class="list-group-item"><strong>Nama:</strong> <?= htmlspecialchars($_SESSION['nama']) ?></li>
            <li class="list-group-item"><strong>Jurusan:</strong> <?= htmlspecialchars($_SESSION['jurusan']) ?></li>
            <li class="list-group-item"><strong>Diameter:</strong> <?= $diameter ?> cm</li>
            <li class="list-group-item"><strong>Tinggi:</strong> <?= $tinggi ?> m</li>
        </ul>

        <div class="alert alert-primary text-center">
            <h5><strong>Jenis Pinus:</strong> <?= $hasil_akhir ?></h5>
            <p><strong>Tingkat Keyakinan:</strong> <?= $keyakinan ?>%</p>
        </div>

        <a href="form_diagnosa.php" class="btn btn-success w-100">Diagnosa Lagi</a>
        <a href="index.php" class="btn btn-primary w-100 mt-2">Kembali ke Beranda</a>
    </div>
</div>

</body>
</html>
