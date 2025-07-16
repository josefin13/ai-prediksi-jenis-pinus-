<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Kamera - Ambil Gambar Pohon</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        video, canvas {
            border: 2px solid #333;
            margin-bottom: 15px;
            width: 100%;
            height: auto;
            border-radius: 8px;
        }
    </style>
</head>
<body class="bg-light">

<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow p-4" style="width: 100%; max-width: 600px;">
        <h3 class="text-center mb-3 text-primary">📸 Kamera Pohon Pinus</h3>
        <p class="text-center text-muted">Gunakan kamera untuk menangkap gambar pohon pinus. Gambar belum diproses secara otomatis (simulasi vision module).</p>

        <video id="video" autoplay></video>
        <canvas id="canvas" class="d-none"></canvas>

        <div class="d-grid gap-2">
            <button class="btn btn-success" onclick="takePhoto()">📷 Ambil Foto</button>
            <a href="index.php" class="btn btn-outline-primary">Kembali ke Beranda</a>
        </div>
    </div>
</div>

<!-- Script untuk akses kamera -->
<script>
    const video = document.getElementById('video');
    const canvas = document.getElementById('canvas');
    const context = canvas.getContext('2d');

    // Akses kamera
    navigator.mediaDevices.getUserMedia({ video: true })
        .then(function(stream) {
            video.srcObject = stream;
        })
        .catch(function(error) {
            alert("Gagal mengakses kamera: " + error);
        });

    function takePhoto() {
        // Atur ukuran canvas sesuai video
        canvas.width = video.videoWidth;
        canvas.height = video.videoHeight;

        context.drawImage(video, 0, 0, canvas.width, canvas.height);
        alert("📸 Gambar berhasil ditangkap (simulasi)");
    }
</script>

</body>
</html>
