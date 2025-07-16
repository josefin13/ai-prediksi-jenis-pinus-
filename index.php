<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sistem Diagnosa Jenis Pinus</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card shadow-lg p-4" style="width: 100%; max-width: 500px;">
            <h3 class="text-center mb-4 text-primary">Sistem Diagnosa Jenis Pinus</h3>
            <form action="form_diagnosa.php" method="post">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Anda</label>
                    <input type="text" name="nama" id="nama" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="jurusan" class="form-label">Jurusan</label>
                    <input type="text" name="jurusan" id="jurusan" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Mulai Diagnosa</button>
                <a href="kamera.php" class="btn btn-success w-100 mt-2">Kamera Pohon</a>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS Bundle (Opsional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
