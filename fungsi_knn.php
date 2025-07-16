<?php
function hitung_knn($diameter_uji, $tinggi_uji, $conn, $k = 3) {
    // Ambil semua data training
    $query = "SELECT * FROM data_training";
    $result = $conn->query($query);

    $jarak_data = [];

    while ($row = $result->fetch_assoc()) {
        $diameter_train = $row['diameter'];
        $tinggi_train = $row['tinggi'];
        $jenis = $row['jenis_pinus'];

        // Hitung Euclidean distance
        $jarak = sqrt(pow($diameter_uji - $diameter_train, 2) + pow($tinggi_uji - $tinggi_train, 2));

        $jarak_data[] = [
            'jarak' => $jarak,
            'jenis' => $jenis
        ];
    }

    // Urutkan berdasarkan jarak terkecil
    usort($jarak_data, function ($a, $b) {
        return $a['jarak'] <=> $b['jarak'];
    });

    // Ambil k data terdekat
    $k_terdekat = array_slice($jarak_data, 0, $k);

    // Hitung jumlah kemunculan jenis
    $hitung_jenis = [];
    foreach ($k_terdekat as $data) {
        $jenis = $data['jenis'];
        if (!isset($hitung_jenis[$jenis])) {
            $hitung_jenis[$jenis] = 0;
        }
        $hitung_jenis[$jenis]++;
    }

    // Cari jenis dengan jumlah terbanyak
    arsort($hitung_jenis); // urutkan berdasarkan jumlah terbanyak
    $jenis_terprediksi = array_key_first($hitung_jenis);
    $confidence = $hitung_jenis[$jenis_terprediksi] / $k; // presentase keyakinan

    return [
        'jenis' => $jenis_terprediksi,
        'confidence' => $confidence
    ];
}
