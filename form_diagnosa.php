<?php
// Terima nama & jurusan dari index.php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['nama'] = $_POST['nama'];
    $_SESSION['jurusan'] = $_POST['jurusan'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Form Diagnosa Pohon Pinus</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card shadow-lg p-4" style="width: 100%; max-width: 500px;">
            <h3 class="text-center mb-4 text-success">Form Diagnosa Pohon Pinus</h3>
            <form action="hasil.php" method="post">
                <div class="mb-3">
                    <label for="diameter" class="form-label">Diameter Pohon (cm)</label>
                    <input type="number" step="any" name="diameter" id="diameter" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="tinggi" class="form-label">Tinggi Pohon (m)</label>
                    <input type="number" step="any" name="tinggi" id="tinggi" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-success w-100">Diagnosa Sekarang</button>
                <a href="index.php" class="btn btn-danger w-100 mt-2">Kembali</a>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS (Opsional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
