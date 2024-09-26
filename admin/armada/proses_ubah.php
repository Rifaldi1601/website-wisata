<?php
include "../koneksi.php";

// Mengambil data dari form
$id_armada = $_POST['id_armada']; // ID tim yang akan diupdate
$nama_armada = $_POST['nama_armada'];
$jumlah_armada = $_POST['jumlah_armada'];

// Menangani upload file foto
if ($_FILES['gambar_armada']['name'] == '') {
    $namafile = $_POST['gambar_armada_lama'];
} else {
    $namafile = $_FILES['gambar_armada']['name'];
    $namaSementara = $_FILES['gambar_armada']['tmp_name'];
    move_uploaded_file($namaSementara, '../uploads/' . $namafile);
}

// Melakukan query update ke database
$update = mysqli_query($koneksi, "UPDATE armada SET nama_armada='$nama_armada', jumlah_armada='$jumlah_armada',gambar_armada='$namafile' WHERE id_armada='$id_armada'");


// Menampilkan pesan berdasarkan hasil query
if ($update) {
    echo "<script>
    alert('Data Berhasil Diubah');
    window.location.href='../?page=armada/index';
    </script>";
} else {
    echo "<script>
    alert('Data Gagal Diubah');
    window.location.href='../?page=armada/index';
    </script>";
}
