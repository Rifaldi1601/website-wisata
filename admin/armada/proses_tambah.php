<?php
include "../koneksi.php";

// Mengambil data dari form
$nama_armada = $_POST['nama_armada'];
$jumlah_armada = $_POST['jumlah_armada'];



$namafile = $_FILES['gambar_armada']['name'];
$namaSementara = $_FILES['gambar_armada']['tmp_name'];
move_uploaded_file($namaSementara, '../uploads/' . $namafile);


// Melakukan query update ke database
$tambah = mysqli_query($koneksi, "INSERT INTO armada ( nama_armada, jumlah_armada, gambar_armada) VALUES ( '$nama_armada', '$jumlah_armada', '$namafile')");

// Menampilkan pesan berdasarkan hasil query
if ($tambah) {
    echo "<script>
    alert('Data Berhasil Ditambah');
    window.location.href='../?page=armada/index';
    </script>";
} else {
    echo "<script>
    alert('Data Gagal Ditambah');
    window.location.href='../?page=armada/index';
    </script>";
}
