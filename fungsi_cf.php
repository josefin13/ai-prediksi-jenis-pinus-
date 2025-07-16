<?php
function hitung_cf($diameter, $tinggi, $conn) {
    $query = "SELECT * FROM basis_pengetahuan";
    $result = $conn->query($query);

    $hasil_tertinggi = [
        'jenis' => null,
        'cf' => 0
    ];

    while ($row = $result->fetch_assoc()) {
        $kondisi = $row['kondisi'];
        $jenis = $row['jenis_pinus'];
        $cf = floatval($row['cf']);

        // Buat variabel lokal untuk digunakan dalam eval()
        $d = $diameter;
        $t = $tinggi;

        // Evaluasi kondisi
        if (eval("return $kondisi;")) {
            if ($cf > $hasil_tertinggi['cf']) {
                $hasil_tertinggi['jenis'] = $jenis;
                $hasil_tertinggi['cf'] = $cf;
            }
        }
    }

    return $hasil_tertinggi;
}
