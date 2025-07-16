# 🌲 Sistem Prediksi Jenis Pinus dengan Kecerdasan Buatan

Proyek ini merupakan tugas UAS mata kuliah **Kecerdasan Buatan**, yang mengimplementasikan gabungan metode **Certainty Factor (CF)** dan **K-Nearest Neighbor (KNN)** untuk memprediksi jenis pohon pinus berdasarkan **diameter dan tinggi pohon**.

---

## 📌 Fitur Utama

- ✅ Prediksi jenis pinus berdasarkan input diameter & tinggi
- ✅ Metode Certainty Factor (aturan berbasis pengetahuan)
- ✅ Metode KNN (machine learning supervised learning)
- ✅ Kombinasi hasil CF & KNN untuk akurasi lebih baik
- ✅ Simulasi Computer Vision: kamera untuk tangkap gambar pohon
- ✅ Tampilan Bootstrap yang responsif dan user-friendly

---

## 🧠 Metode AI yang Digunakan

### 1. Certainty Factor (CF)

Digunakan untuk menentukan jenis pinus berdasarkan **aturan logika pakar** yang ditentukan secara manual.

Contoh aturan:

- Jika tinggi >= 15 dan diameter >= 13 → jenis: _White Pine_, CF = 0.9
- Jika tinggi < 15 dan diameter < 13 → jenis: _Douglas Fir_, CF = 0.9

### 2. K-Nearest Neighbor (KNN)

Digunakan untuk memprediksi jenis pinus berdasarkan kedekatan nilai diameter dan tinggi pohon terhadap data training menggunakan **Euclidean Distance**.

---

## 🚀 Cara Menjalankan Proyek

1. Clone repo ini atau download ZIP-nya
2. Import file SQL ke database MySQL
3. Pastikan file `db.php` sesuai dengan konfigurasi lokalmu
4. Jalankan melalui `localhost` / XAMPP: http://localhost/nama-folder/index.php

---

## 📸 Tentang Fitur Kamera

Fitur ini merupakan **simulasi awal** untuk integrasi Computer Vision, memungkinkan pengguna menangkap gambar dari webcam. Belum dilakukan klasifikasi gambar secara otomatis, namun dapat dikembangkan ke tahap tersebut menggunakan AI vision seperti OpenCV.

---

## 👨‍💻 Developer

- Nama: Josefin Anderson
- NPM: 2355201031
- Universitas: Universitas Muhammadiyah Bengkulu

---

## 📚 Lisensi

Proyek ini digunakan untuk keperluan pembelajaran dan tugas akademik. Bebas digunakan kembali dengan menyertakan atribusi.
