<?php

include "../koneksi.php";

// Mendapatkan id_tim dari parameter URL
$id_armada = $_GET['id_armada'];

// Membuat query untuk menghapus data berdasarkan id_tim
$hapus = mysqli_query($koneksi, "DELETE FROM armada WHERE id_armada = '$id_armada'");


if ($hapus) {
    echo "<script>
    alert('Data Berhasil Dihapus');
    window.location.href='../?page=armada/index';
    </script>";
} else {
    // Menampilkan pesan error jika query gagal
    echo "<script>
    alert('Data Gagal Dihapus');
    window.location.href='../?page=armada/index';
    </script>";
}
