<?php
include "../koneksi.php";

// Mengambil data dari form
$visi = $_POST['visi'];
$misi = $_POST['misi'];



$namafile = $_FILES['gambar_about']['name'];
$namaSementara = $_FILES['gambar_about']['tmp_name'];
move_uploaded_file($namaSementara, '../uploads/' . $namafile);


// Melakukan query update ke database
$tambah = mysqli_query($koneksi, "INSERT INTO about ( visi, misi, gambar_about) VALUES ( '$visi', '$misi', '$namafile')");

// Menampilkan pesan berdasarkan hasil query
if ($tambah) {
    echo "<script>
    alert('Data Berhasil Ditambah');
    window.location.href='../?page=about/index';
    </script>";
} else {
    echo "<script>
    alert('Data Gagal Ditambah');
    window.location.href='../?page=about/index';
    </script>";
}
